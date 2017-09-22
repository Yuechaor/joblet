<!-- header -->
<?php include "includes/header.php" ?>

<!-- navigation bar -->
<?php include "includes/navigationBar.php" ?>


    <!--main content-->
    <section>
      <div class="container">
          <!--breadcrumb-->
        <?php include "includes/breadcrumb.php" ?>

        <!-- advance search form-->
        <div class="search-form search-form-full job-list-form">
          <form class="" action="#" method="post">
            <!--sub category-dropdown-->
            <div class="dropdown category-dropdown">
              <a href="#" data-toggle="dropdown"><span class="change-text">Sub Category</span><i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu category-change">
                  <li><a href="#">All Categories</a></li>
                  <li><a href="#">Senior java developer</a></li>
                  <li><a href="#">junior iOS developer</a></li>
                  <li><a href="#">Senior Andriod developer</a></li>
                  <li><a href="#">Senior C++ developer</a></li>
                  <li><a href="#">Senior web developer</a></li>
              </ul>
            </div><!--end of sub category-dropdown-->
            <!--location-dropdown-->
            <div class="dropdown category-dropdown states-dropdown"> <!--language-dropdown-->
              <a href="#" data-toggle="dropdown"><span class="change-text">Job Location</span><i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu category-change states-change"><!--language-change-->
                  <li><a href="#">All States</a></li>
                  <li><a href="#">NSW</a></li>
                  <li><a href="#">VIC</a></li>
                  <li><a href="#">QLD</a></li>
                  <li><a href="#">SA</a></li>
                  <li><a href="#">WA</a></li>
                  <li><a href="#">NT</a></li>
                  <li><a href="#">TAS</a></li>
              </ul>
            </div><!--end of location-dropdown-->
            <input type="text" class="form-control" placeholder="Type your key word"name="" value="">
            <button type="submit" class="btn btn-primary" name="button" value="Search">Search</button>
          </form>
        </div>
        <!-- end of advance search form-->
        <!-- job details section-->
        <div class="job-details">
          <div class="section job-ad-item">
            <div class="item-info">
              <div class="item-image-box">
                <div class="item-image">
                  <img src="images/job/1.png" alt="company-logo" class="img-responsive">
                </div>
              </div>
              <div class="ad-info">
                <span><span><a href="#" class="title">iOS Developer</a></span> @ <a href="#">Apple.com</a></span>
                <div class="ad-meta">
                  <ul>
                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, NSW, AU</a></li>
  									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
  									<li><i class="fa fa-money" aria-hidden="true"></i>$50,000</li>
  									<li><a href="#"><i class="fa fa-tag" aria-hidden="true"></i>iOS Development</a></li>
  									<li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Close on : Jan 10, 2017</li>
                  </ul>
                </div> <!--end of ad meta-->
              </div><!--end of ad info-->
            </div><!--end of item info-->
            <div class="job-action">
              <div class="button">
                <a href="#" class="btn btn-primary "><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Apply For This Job</a>
							  <a href="#" class="btn btn-primary bookmark btn-lg"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Bookmark</a>
              </div>
            </div><!--end of job action-->
          </div><!--end of job-ad-item-->
          <div class="job-details-info">
            <div class="row">
              <div class="col-sm-8">
                <div class="section job-description">
                  <div class="description-info">
                    <h1>Description</h1>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend aliquet posuere. Nam sit amet nisl id eros facilisis mollis. Aliquam tempus feugiat sodales. Morbi porttitor scelerisque est at aliquam. Quisque scelerisque pellentesque gravida. Quisque erat mauris, sagittis a finibus a, gravida eu massa. Morbi tincidunt lorem at sem rhoncus dapibus.</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend aliquet posuere. Nam sit amet nisl id eros facilisis mollis. Aliquam tempus feugiat sodales. Morbi porttitor scelerisque est at aliquam. Quisque scelerisque pellentesque gravida. Quisque erat mauris, sagittis a finibus a, gravida eu massa. Morbi tincidunt lorem at sem rhoncus dapibus.</p>
                  </div>
                  <div class="responsibilities">
                    <h1>Responsibilities</h1>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend aliquet posuere. Nam sit amet nisl id eros facilisis mollis. Aliquam tempus feugiat sodales. Morbi porttitor scelerisque est at aliquam. Quisque scelerisque pellentesque gravida. Quisque erat mauris, sagittis a finibus a, gravida eu massa. Morbi tincidunt lorem at sem rhoncus dapibus.</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend aliquet posuere. Nam sit amet nisl id eros facilisis mollis. Aliquam tempus feugiat sodales. Morbi porttitor scelerisque est at aliquam. Quisque scelerisque pellentesque gravida. Quisque erat mauris, sagittis a finibus a, gravida eu massa. Morbi tincidunt lorem at sem rhoncus dapibus.</p>
                  </div>
                  <div class="requirements">
                    <h1>Requirements</h1>
                    <ul>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Proin eleifend aliquet posuere</li>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Proin eleifend aliquet posuere</li>
                      <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                  </div>
                </div>
              </div> <!--end of left column-->
              <div class="col-sm-4">
                <div class="section job-key-info">
                  <h1>Key Info :</h1>
                  <ul>
                    <li><span class="icon"><i class="fa fa-vcard-o" aria-hidden="true"></i></span>Posted: 1 day ago</li>
                    <li><span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span> Job poster: <a href="#">Benshan Zhao</a></li>
                    <li><span class="icon"><i class="fa fa-industry" aria-hidden="true"></i></span>Industry: <a href="#">Information Technology</a></li>
                    <li><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Experience: <a href="#">Entry level</a></li>
                    <li><span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>Job required: iOS,swift,object C</li>
                  </ul>
                </div>

                <div class="section company-info">
                  <h1>About this Compnay</h1>
                  <ul>
                    <li>Compnay Name: <a href="#">Apple Inc</a></li>
  									<li>Address: boxhill, Australia</li>
  									<li>Compnay Size:  2k Employee</li>
  									<li>Industry: <a href="#">Technology</a></li>
  									<li>Phone: +1234 567 8910</li>
  									<li>Email: <a href="#">info@apple.com</a></li>
  									<li>Website: <a href="#">www.apple.com</a></li>
                  </ul>
                </div><!--end of company-info-->

              </div><!--end of right-top column-->

            </div>
          </div>
        </div>


      </div><!--end of container-->
    </section><!--end of main content part-->

<!-- footer -->
<?php include "includes/footer.php" ?>
