<?php
session_start();


    $link = mysqli_connect("localhost", "root", "", "joblet");

   if (mysqli_connect_errno()) {

       print_r(mysqli_connect_error());
       exit();
    }

    if (isset($_GET['function']) == "logout") {

        session_unset();

    }

    function displayIndexSearch(){
      global $link;

      // echo $_SESSION['indexQuery'];
      if (isset($_SESSION['indexQuery'])) {


      $indexQuery = $_SESSION['indexQuery'];

      // $query = "SELECT * FROM job WHERE job_name LIKE '%java%'";

      $result = mysqli_query($link, $indexQuery);
      $count = mysqli_num_rows($result);
      echo "<div class='col-md-8 col-sm-8'>
        <div class='section job-list-item'>
          <div class='featured-top'>
            <h5>Showing <b>".$count."</b> of <b>".$count."</b> jobs</h5>
            <div class='dropdown pull-right'>
              <div class='dropdown category-dropdown'>
                <h5>Sort by:</h5>
                <a href='#' data-toggle='dropdown'><h5><span class='change-text'>Most Relevant</span><i class='fa fa-caret-square-o-down'></i></h5></a>
                <ul class='dropdown-menu category-change'>
                  <li><a href='#'>Most Relevant</a></li>
                  <li><a href='#'>Most Popular</a></li>
                  <li><a href='#'>Highest Pay</a></li>
                </ul>
              </div>
            </div>
          </div> ";

      if($result)
        {
          if ($count == 0) {
            echo "<div class='alert alert-danger'>Sorry! Coudn't Find Any Result! Please Try Again</div>";
          }else {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<div class='job-ad-item'>
                    <div class='item-info'>
                      <div class='item-image-box'>
                        <div class='item-image'>
                          <a href='#'> <img class='img-responsive' src='images/job/1.png' alt='joblogo'></a>
                        </div>
                      </div>
                      <div class='ad-info'>
                        <span><a href='#' class='title'>".$row['job_name']."</a> @ <a href='#'>".$row['job_employer']."</a></span>
                        <div class='ad-meta'>
                          <ul>
                            <li><a href='#'><i class='fa fa-map-marker' aria-hidden='true'></i>".$row['job_location']."</a></li>
                            <li><a href='#'><i class='fa fa-clock-o' aria-hidden='true'></i>Full Time</a></li>
                            <li><a href='#'><i class='fa fa-money' aria-hidden='true'></i>$50000</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>";
            }
          }
        } else {
            echo 'Invalid query: ' . mysql_error() . "\n";
            echo 'Whole query: ' . $query;
        }
      }
    }
?>
