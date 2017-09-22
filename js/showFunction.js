// ---------------------------------
//subcategory text change
//----------------------------------
$(document).ready(function() {

      $('.category-dropdown').on('click', '.category-change a', function(ev) {
          if ("#" === $(this).attr('href')) {                      //connection to category-database
              ev.preventDefault();
              var parent = $(this).parents('.category-dropdown');
              parent.find('.change-text').html($(this).html());
          }
      });
});


// ---------------------------------
//category-show more btn change
//----------------------------------
$(document).ready(function() {

        $(".more-category.one").hide();
        $(".show-more.one").click(function()
           {
               $(".more-category.one").show();
               $(".show-more.one").hide();
           });
});

$(document).ready(function() {

        $(".more-category.two").hide();
        $(".show-more.two").click(function()
           {
               $(".more-category.two").show();
               $(".show-more.two").hide();
           });
});

$(document).ready(function() {

        $(".more-category.three").hide();
        $(".show-more.three").click(function()
           {
               $(".more-category.three").show();
               $(".show-more.three").hide();
           });
});
// ---------------------------------
//category-plus &minus icon  change
//----------------------------------
$(document).ready(function() {

        $('.collapse').on('show.bs.collapse', function() {
            var id = $(this).attr('id');
            // console.log(id);
            $('a[href="#' + id + '"] span').html('<i class="fa fa-minus"></i>');
        });
        $('.collapse').on('hide.bs.collapse', function() {
            var id = $(this).attr('id');
            $('a[href="#' + id + '"] span').html('<i class="fa fa-plus"></i>');
        });

});

// ---------------------------------
//category-check box change
//----------------------------------
$(document).ready(function() {

      $('input[type="checkbox"]').change(function(){
          if($(this).is(':checked')){
              $(this).parent("label").addClass("checked");
          } else {
              $(this).parent("label").removeClass("checked");
          }
      });
});
