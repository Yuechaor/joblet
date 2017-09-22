<!-- header -->
<?php include "includes/header.php" ?>

<!-- navigation bar -->
<?php include "includes/navigationBar.php" ?>

    <!--main content-->
    <section class="job-bg page ad-profile-page">
      <div class="container">
          <!--breadcrumb-->
        <?php include "includes/breadcrumb.php" ?>

        <!-- job-profile-->
        <div class="section job-profile">
          <div class="user-profile">
            <div class="user-images">
              <img src="images/user.jpg" alt="user images" class="img-responsive">
            </div>
            <div class="user">
              <h2>Hello, <a href="#">Jhon Snow</a></h2>
              <h5>You last logged in at: 15-08-2017 6:40 AM</h5>
            </div>
            <div class="favorites-user">
              <div class="my-ads">
                <a href="applied-job.html">30 <small>Applied Job</small></a>
              </div>
              <div class="favorites">
                <a href="bookmark.html">20 <small>Favorites</small></a>
              </div>
            </div>
          </div><!--end of user-profile-->
          <ul class="user-menu">
            <li class="active"><a href="profile.html">Account Info </a></li>
  					<li><a href="#">View Resume</a></li>
  					<li><a href="#">Edit Resume</a></li>
  					<li><a href="#">Profile Details</a></li>
  					<li><a href="bookmark.html">Bookmark</a></li>
  					<li><a href="applied-job.html">applied job</a></li>
  					<li><a href="#">Close account</a></li>
          </ul><!--end of user-management-->
        </div><!--end of job-profile-->


        <div class="section applied-job-list">





        </div>

      </div><!--end of container-->
    </section><!--end of main content part-->

<!-- footer -->
<?php include "includes/footer.php" ?>
