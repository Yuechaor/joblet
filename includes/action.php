<?php

  include("functions.php");

  if($_GET['action'] == "signUp"){
    // print_r($_POST);

    $error = "";

       if (!$_POST['email']) {

           $error = "An email address is required.";

       } else if (!$_POST['username']) {

           $error = "A username is required";

       }else if (!$_POST['password']) {

           $error = "A password is required";

       }else if ($_POST['privilege'] == "undefined") {

           $error = "Please Choose Your Account Type.";

       }else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {

           $error = "Please enter a valid email address.";

       }

       if ($error != "") {

           echo $error;
           exit();

       }

       if ($_POST['loginActive'] == "1") {

            $query = "SELECT * FROM reg_user WHERE REG_EMAIL = '". mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) > 0) {
              $error = "That email address is already taken.";
            } else {
              $query = "SELECT * FROM reg_user WHERE REG_USERNAME = '". mysqli_real_escape_string($link, $_POST['username'])."' LIMIT 1";
              $usernameResult = mysqli_query($link, $query);
              if (mysqli_num_rows($usernameResult) > 0) {
                $error = "That username is already taken.";
            } else {

                $query = "INSERT INTO reg_user (`REG_EMAIL`, `REG_PASSWORD`,`PRIVILEGE`,`REG_USERNAME`) VALUES ('". mysqli_real_escape_string($link, $_POST['email'])."', '". mysqli_real_escape_string($link, $_POST['password'])."','".$_POST['privilege']."','". mysqli_real_escape_string($link, $_POST['username'])."')";

                if (mysqli_query($link, $query)) {

                    $_SESSION['id'] = mysqli_insert_id($link);

                    $query = "UPDATE reg_user SET REG_PASSWORD = '". md5(md5($_SESSION['id']).$_POST['password']) ."' WHERE REG_ID = ".$_SESSION['id']." LIMIT 1";
                    mysqli_query($link, $query);

                    $query = "SELECT * FROM reg_user WHERE REG_ID = '". $_SESSION['id']."' LIMIT 1";

                        $resultForReg = mysqli_query($link, $query);
                        $row = mysqli_fetch_assoc($resultForReg);
                        $_SESSION['username'] = $row['REG_USERNAME'];
                        echo 1;

                } else {
                    $error = "Couldn't create user - please try again later";
                }
        }
      }
    }
      if ($error != "") {

            echo $error;
            exit();

        }
  }
if($_GET['action'] == "login"){
      $error = "";

     if (!$_POST['email']) {

         $error = "An email address is required.";

     } else if (!$_POST['password']) {

         $error = "A password is required";

     }else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {

         $error = "Please enter a valid email address.";

     }

     if ($error != "") {

         echo $error;
         exit();

     }
      if ($_POST['loginActive'] == "0") {

        $query = "SELECT * FROM reg_user WHERE REG_EMAIL = '". mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

            $result = mysqli_query($link, $query);

            $row = mysqli_fetch_assoc($result);

                if ($row['REG_PASSWORD'] == md5(md5($row['REG_ID']).$_POST['password'])) {

                    echo 1;
                    $_SESSION['id'] = $row['REG_ID'];
                    $_SESSION['username'] = $row['REG_USERNAME'];

                } else {

                    $error = "Wrong username/password combination. Please try again.";

                }

      }
      if ($error != "") {

          echo $error;
          exit();

      }

}

    if ($_GET['action'] == "indexsearch") {
      // print_r($_POST);
      $error = "";
      $keywords = $_POST['indexkeywords'];
      $category = $_POST['indexcategory'];
      $employer = $_POST['indexemployer'];
      $location = $_POST['indexlocation'];

      // if (!$_POST['keywords'] && !$_POST['category'] && !$_POST['employer'] && !$_POST['location']) {
      if (!$keywords && !$employer && !$location&& !$category) {
          $error = "Please input some infor about your wanted job.";
      } else {

            $query = "SELECT * FROM job WHERE ";
            $and = "0";

            if(trim($keywords)!= '') {
            $and = "1";
            $query .= "job_name LIKE '%$keywords%'";
            }
            if(trim($category)!= '') {
            $and = "1";
            if(trim($and)!= ''&& trim($keywords)!= '') {$query .= " AND ";}
            $query .= "job_cat = '$category'";
            }

            if(trim($employer)!= '') {
            $and = "1";
            if(trim($and)!= ''&& trim($keywords)!= ''&& trim($category)!= '') {$query .= " AND ";}
            $query .= "job_employer LIKE '%$employer%'";
            }

            if(trim($location)!= '') {
            $and = "1";
            if(trim($and)!= ''&& trim($keywords)!= ''&& trim($category)!= ''&& trim($employer)!= '') {$query .= " AND ";}
            $query .= "job_location = '$location'";
            }
            echo 1;
            $_SESSION['indexQuery'] = $query;
            // $error = $query;  //传递query给joblist

            // if(trim($category)!= '' && trim($yoursafe_post_price2)!= '') {
            // $and = "1";
            // if(trim($and)!= '') {$query .= " AND ";}
            // $query .= "price BETWEEN $yoursafe_post_price1 AND $yoursafe_post_price2";
            // }
            // $query .= " ORDER BY price";


      }


      if ($error != "") {

          echo $error;
          exit();

      }

    }

?>
