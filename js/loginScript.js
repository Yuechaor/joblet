
$(document).ready(function() {
    var $loginForm = $("#loginForm");
    var $lostForm = $("#lostPassword");
    var $regForm = $("#regForm");
    var $formDiv = $("#forms");
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("form").submit(function(){
      switch (this.id) {
        case "loginForm":
          $.ajax({
            type: "POST",
            url: "includes/action.php?action=login",
            data: "email=" + $("#loginEmail").val() + "&password=" + $("#logingPassword").val() + "&loginActive=" + $("#loginbtn").val(),
            success: function(result) {
              // alert(result);
              if (result == "1") {
                msgChange($("#loginMSG"),$("#loginMSGImg"),$("#loginMSGText"),"success","fa fa-times-circle","login success");
                window.location.assign("http://localhost/joblet/index.php");
              } else {
               msgChange($("#loginMSG"),$("#loginMSGImg"),$("#loginMSGText"),"error","fa fa-times-circle",result);
               }
            }
          })
          return false;
          break;
        case "lostPassword": //email  validation and database match!!! !!!!!!
          var $emailAddress = $("#getEmail").val();
          if($emailAddress == "check"){
            msgChange($("#lostPasswordMSG"),$("#lostPasswordImg"),$("#lostPasswordText"),"error","fa fa-times-circle","Opps! email does not exist!");
          }else {
            msgChange($("#lostPasswordMSG"),$("#lostPasswordImg"),$("#lostPasswordText"),"success","fa fa-check-circle","Email send!");
          }
          return false;
          break;
        case "regForm":   //register validation !!!!!!
          $.ajax({
            type: "POST",
            url: "includes/action.php?action=signUp",
            data: "email=" + $("#regEmail").val() + "&password=" + $("#regPassword").val()+ "&privilege=" + $("input[name='privilege']:checked").val() + "&loginActive=" + $("#signUp").val()+ "&username=" + $("#regUsername").val(),
            success: function(result) {
              // alert(result);
              if (result == "1") {
               msgChange($("#registerMSG"),$("#registerImg"),$("#registerText"),"success","fa fa-times-circle","Account created");
              window.location.assign("http://localhost/joblet/index.php");
              } else {
                msgChange($("#registerMSG"),$("#registerImg"),$("#registerText"),"error","fa fa-check-circle",result);
               }
            }
          })
          return false;
          break;
        default:
          return false;
      }
      return false;
    });

    function formSwitch($currentForm,$targetForm){
      var $currentFormHeight = $currentForm.height();
      var $targetFormHeight = $targetForm.height();
      $formDiv.css("height", $currentFormHeight);
      $currentForm.fadeToggle($modalAnimateTime,function(){
        $formDiv.animate({height: $targetFormHeight},$modalAnimateTime,function(){
          $targetForm.fadeToggle($modalAnimateTime);
        });
      });
    }
    $("#loginLostBtn").click(function(){formSwitch($loginForm, $lostForm);});
    $("#logingRegBtn").click(function(){formSwitch($loginForm, $regForm);});
    $("#lostLoginBtn").click(function(){formSwitch($lostForm, $loginForm);});
    $("#lostRegBtn").click(function(){formSwitch($lostForm, $regForm);});
    $("#regLoginBtn").click(function(){formSwitch($regForm, $loginForm);});
    $("#regLostBtn").click(function(){formSwitch($regForm, $lostForm);});

    function msgFade($msgId, $msgText){
      $msgId.fadeOut($msgAnimateTime,function(){
        $(this).text($msgText).fadeIn($msgAnimateTime);
      });
    }

    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText){
        var $msgCurrent = $divTag.text();
        msgFade($textTag,$msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("fa-chevron-right");
        $iconTag.addClass($iconClass+" "+$divClass);
        setTimeout(function(){
          msgFade($textTag,$msgCurrent);
          $divTag.removeClass($divClass);
          $iconTag.removeClass($iconClass+" "+$divClass);
          $iconTag.addClass("fa fa-chevron-right");
        },$msgShowTime);
      }

      $("#submitSearch").click(function() {
          // console.log("hello");
          $.ajax({
              type: "POST",
              url: "includes/action.php?action=indexsearch", //mlgb 注意文件结构！！！！！
              data: "indexkeywords=" + $("#indexKeywords").val() + "&indexcategory=" + $("#indexCategory").val() + "&indexemployer=" + $("#indexEmployer").val()+ "&indexlocation=" + $("#indexLocation").val()+ "&indexSearch=" + $("#submitSearch").val(),
              success: function(result) {
                // alert(result);
                  if (result == "1") {

                      window.location.assign("http://localhost/joblet/joblist.php");

                  } else {

                      $("#loginAlert").html(result).show();
                      setTimeout(function(){
                        $("#loginAlert").html(result).hide();
                      },$msgShowTime)

                  }
              }

          })

      })


});
