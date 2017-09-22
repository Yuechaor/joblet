<header id="header" class="clearfix">
  <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="search.html" class="navbar-brand"><img class="img-responsive" src="images/logomd.png" alt="logo"></a>
        </div> <!-- nav-header -->

          <div class="navbar-left">
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="joblist.html">Job List</a></li>
                <li><a href="/jobDetails.html">Job details</a></li>
                <li><a href="events.php">Job Events</a></li>
                <li><a href="/profile.html">Profile</a></li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Others<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="#">links</a></li>
                      <li><a href="#">links</a></li>
                      <li><a href="#">links</a></li>
                      <li><a href="#">links</a></li>
                  </ul>
                </li>



              </ul>
            </div>
          </div><!-- nav-left -->

          <div class="nav-right">
            <a href="#" class="btn">Post Your Job</a>
            <?php include "includes/login.php" ?>

          </div><!-- nav-right end-->

    </div><!-- container end-->
  </nav><!--navigation end-->
</header><!-- header end-->
