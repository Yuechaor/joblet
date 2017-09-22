<?php include "includes/functions.php" ?>
<!-- header -->
<?php include "includes/header.php" ?>

<!-- navigation bar -->
<?php include "includes/navigationBar.php" ?>

    <!--main content-->
    <section>
      <div class="container">
          <!--breadcrumb-->
          <?php include "includes/breadcrumb.php";?>

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
        <!-- category form-->
        <div class="category-details">
          <div class="row">
            <div id="left-col" class="col-md-3 col-sm-4">
                <!-- <h5 id="advSearchText">Advance Search</h5> -->
                <div class="accordion">
                  <div id="accordion" role="tablist" >

                  <div class="card">
                      <div class="card-header" role="tab" id="headingOne">
                        <div id="One" class="card-title">

                          <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h4>Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
                          </a>

                        </div>
                      </div>
                      <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <h5><a href="#"><i class="fa fa-caret-down"></i> All Categories</a></h5>
    											<a href="#"><i class="icofont icofont-man-in-glasses"></i>Engineer/Architects</a>
    											<ul>
    												<li><a href="#">cat1 <span>(12)</span></a></li>
    												<li><a href="#">cat2 <span>(83)</span></a></li>
    												<li><a href="#">cat3 <span>(79)</span></a></li>
    												<li><a href="#">cat4 <span>(74)</span></a></li>
    												<li><a href="#">cat5 <span>(14)</span></a></li>
                            <li><a href="#">cat6 <span>(12)</span></a></li>
    												<li><a href="#">cat7 <span>(83)</span></a></li>
    												<li><a href="#">cat8 <span>(79)</span></a></li>
    												<li><a href="#">cat9 <span>(74)</span></a></li>
    												<li><a href="#">cat10 <span>(14)</span></a></li>
    											</ul>
    											<div class="see-more">
    												<button type="button" class="show-more one"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
    												<ul class="more-category one">
                              <li><a href="#">cat11 <span>(12)</span></a></li>
      												<li><a href="#">cat12 <span>(83)</span></a></li>
      												<li><a href="#">cat13 <span>(79)</span></a></li>
      												<li><a href="#">cat14 <span>(74)</span></a></li>
      												<li><a href="#">cat15 <span>(14)</span></a></li>
    												</ul>
                        </div>
                      </div>
                      </div>
                    </div> <!-- end of accordion-one -->

                  <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                      <div id="Two" class="card-title">

                        <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4>Date Posted<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                        </a>

                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <label for="today"><input type="checkbox" name="today" id="today"> Today</label>
      									<label for="7-days"><input type="checkbox" name="7-days" id="7-days"> 7 days</label>
      									<label for="30-days"><input type="checkbox" name="30-days" id="30-days"> 30 days</label>
                      </div>
                    </div>
                  </div> <!-- end of accordion-two -->

                  <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                      <div id="Three" class="card-title">

                        <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <h4>Employment Type<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                        </a>

                      </div>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <label for="full-time"><input type="checkbox" name="full-time" id="full-time"> Full Time</label>
      									<label for="part-time"><input type="checkbox" name="part-time" id="part-time"> Part Time</label>
      									<label for="contractor"><input type="checkbox" name="contractor" id="contractor"> Contractor</label>
      									<label for="intern"><input type="checkbox" name="intern" id="intern"> Intern</label>
      									<label for="seasonal"><input type="checkbox" name="seasonal" id="seasonal"> Seasonal / Temp</label>
                      </div>
                    </div>
                  </div> <!-- end of accordion-three -->

                  <div class="card">
                    <div class="card-header" role="tab" id="headingFour">
                      <div id="Four" class="card-title">

                        <a data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h4>Experience Level<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                        </a>

                      </div>
                    </div>
                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body">
                        <label for="training"><input type="checkbox" name="training" id="training"> Training</label>
        								<label for="entry-level"><input type="checkbox" name="entry-level" id="entry-level"> Entry Level</label>
        								<label for="mid-senior"><input type="checkbox" name="mid-senior" id="mid-senior"> Mid-Senior Level</label>
        								<label for="top-level"><input type="checkbox" name="top-level" id="top-level"> Top Level</label>
                      </div>
                    </div>
                  </div> <!-- end of accordion-four -->

                  <div class="card">
                    <div class="card-header" role="tab" id="headingFive">
                      <div id="Five" class="card-title">

                          <a data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h4>Company Name<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                          </a>

                      </div>
                    </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            <input type="text" placeholder="Search Company" class="form-control">
              											<label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
              											<label for="dropbox"><input type="checkbox" name="dropbox" id="dropbox"> Dropbox</label>
              											<label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
              											<label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
              											<label for="microsoft"><input type="checkbox" name="microsoft" id="microsoft"> Microsoft</label>
              											<label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
              											<div class="see-more">
              												<button type="button" class="show-more two"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
              												<div class="more-category two">
              													<label for="blackBerry"><input type="checkbox" name="blackBerry" id="blackBerry">BlackBerry</label>
              													<label for="motorola"><input type="checkbox" name="motorola" id="motorola">Motorola</label>
              													<label for="lenovo"><input type="checkbox" name="lenovo" id="lenovo">Lenovo</label>
              												</div>
              											</div>
                          </div>
                      </div>
                  </div> <!-- end of accordion-Five -->

                  <div class="card">
                    <div class="card-header" role="tab" id="headingSix">
                      <div id="Six" class="card-title">

                        <a data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <h4>Location<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                        </a>

                    </div>
                    </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                          <div class="card-body">
                            <input type="text" placeholder="Search Location" class="form-control">
              											<label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
              											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
                                    <label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
              											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
                                    <label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
              											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
                                    <label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
              											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
              											<div class="see-more">
              												<button type="button" class="show-more three"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
              												<div class="more-category three">
                                        <label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
                  											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
                                        <label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
                  											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
                                        <label for="NSW"><input type="checkbox" name="NSW" id="NSW"> NSW</label>
                  											<label for="VIC"><input type="checkbox" name="VIC" id="VIC"> VIC</label>
              												</div>
              											</div>
                          </div>
                        </div>
                  </div> <!-- end of accordion-SIX -->


                  </div>
                 <!-- end of card-group-->
                </div>
            </div><!-- end of accordion -->



            <!-- <div class="col-md-8 col-sm-8">
              <div class="section job-list-item">
                <div class="featured-top">
                  <h5>Showing  of  jobs</h5>
                  <div class="dropdown pull-right">
                    <div class="dropdown category-dropdown">
                      <h5>Sort by:</h5>
                      <a href="#" data-toggle="dropdown"><h5><span class="change-text">Most Relevant</span><i class="fa fa-caret-square-o-down"></i></h5></a>
                      <ul class="dropdown-menu category-change">
                        <li><a href="#">Most Relevant</a></li>
                        <li><a href="#">Most Popular</a></li>
                        <li><a href="#">Highest Pay</a></li>
                      </ul>
                    </div>
                  </div>
                </div>  -->

                <!--job list-->
                <?php
                    // $query = $_SESSION['indexQuery'];
                    displayIndexSearch();

                 ?>

                <!--Pagination-->
                <div class="text-center">
                  <ul class="pagination ">
  									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
  									<li class="active"><a href="#">1</a></li>
  									<li><a href="#">2</a></li>
  									<li><a href="#">3</a></li>
  									<li><a href="#">4</a></li>
  									<li><a href="#">5</a></li>
  									<li><a>...</a></li>
  									<li><a href="#">10</a></li>
  									<li><a href="#">11</a></li>
  									<li><a href="#">12</a></li>
  									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
								  </ul>
                </div><!--end of Pagination-->
              </div><!--end of job-list-item-->
            </div><!--end of rightside col-->
          </div><!--end of row-->
        </div><!--end of category details-->
      </div><!--end of container-->
    </section><!--end of main content part-->

<!-- footer -->
<?php include "includes/footer.php" ?>
