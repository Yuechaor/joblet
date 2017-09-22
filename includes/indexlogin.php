    <div class="container-fluid">
      <!--login buttons-->
          <div class="row nav-right justify-content-end no-gutters">
              <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
            <div id="log-infor" class="log-in col-2 col-sm-2 col-md-2 col-lg-2">
              <li><i class="fa fa-user" aria-hidden="true"></i></li>
              <li>
                <?php if (isset($_SESSION['id']) == true) {
                echo "<b>&nbsp;".$_SESSION['username']."</b>";
                ?>

                  <li><a href="?function=logout">&nbsp;<b>Logout</b></a></li>

                <?php } else { ?>
                  <a href="#" id="loginText" data-toggle="modal" data-target="#loginModal">Login</a>

                <?php } ?>
              </li>

              <!-- <i class="fa fa-user" aria-hidden="true"></i>
              <a href="#" id="loginText"data-toggle="modal" data-target="#loginModal">&nbsp;Login</a> -->
            </div>
          </div>
          <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true" style="display:none">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header align-top">
                    <img class="rounded mx-auto d-block" src="images/logo.svg" alt="logo">
                    <button type="button" class="close fa fa-times fa-2x" data-dismiss="modal" aria-label="Close">
          					</button>
                  </div>
    <!--FORMS-->
    <!--loging FORMS-->
                  <div id="forms">
                     <form id="loginForm"> <!--php------------------------------------------------------------------->
                       <div class="modal-body">
                           <div id="loginMSG">
                               <div id="loginMSGImg" class="fa fa-chevron-right"></div>
                               <span id="loginMSGText">Type your Email and password.</span>
                           </div>
                           <input id="loginEmail" class="form-control" type="text" placeholder="Your Email" name="loginEmail" value="">
                           <input id="logingPassword" class="form-control" type="password" placeholder="Your Password" name="logingPassword" value="">
                           <div class="checkbox">
                              <label>
                                  <input type="checkbox"> Remember me
                              </label>
                           </div>
                       </div>
                       <div class="modal-footer">
                          <div>
                              <button type="submit" id="loginbtn" class="btn btn-primary btn-block" value="0">Login</button>
                          </div>
    	    	              <div>
                              <button id="loginLostBtn" type="button" class="btn btn-link">Lost Password?</button>
                              <button id="logingRegBtn" type="button" class="btn btn-link">Register</button>
                          </div>
    				           </div>
                     </form>
    <!--end of login form-->
    <!--begin with lost password form-->
                      <form id="lostPassword" class="" action="" method="post" style="display:none">
                        <div class="modal-body">
                            <div id="lostPasswordMSG">
                              <div id="lostPasswordImg" class="fa fa-chevron-right"></div>
                                <span id="lostPasswordText">Type your email address.</span>

                            </div>
                            <input id="getEmail" class="form-control" type="text" name="" value="" placeholder="Your Email Address" required>
                        </div>
                        <div class="modal-footer">
                           <div>
                               <button type="submit" class="btn btn-primary btn-block">Send</button>
                           </div>
     	    	              <div>
                               <button id="lostLoginBtn" type="button" class="btn btn-link">Log In</button>
                               <button id="lostRegBtn" type="button" class="btn btn-link">Register</button>
                           </div>
     				           </div>
                      </form>
    <!--end of lost password form-->
    <!--begin with register form-->
                      <form id="regForm" style="display:none;">
                          <div class="modal-body">
                            <div id="registerMSG">
                              <div id="registerImg" class="fa fa-chevron-right"></div>
                                <span id="registerText">Register an account.</span>
                              </div>
                              <input id="regUsername" class="form-control" type="text" placeholder="Type your Username">
                              <input id="regEmail" class="form-control" type="text" placeholder="Type your E-Mail">
                              <input id="regPassword" class="form-control" type="password" placeholder="Type your Password">
                              <label>
                                  <ul>
                                    <li><h5>Register as A </h5></li>
                                    <li><input type="radio" name="privilege" value="jobseeker"> Jobseeker</li>
                                    <li><input type="radio" name="privilege" value="employer"> Employer</li>
                                  </ul>
                              </label>
                            </div>
                          <div class="modal-footer">
                            <div>
                                <button type="submit" id="signUp" class="btn btn-primary btn-lg btn-block" value="1">Register</button>
                            </div>
                            <div>
                                <button id="regLoginBtn" type="button" class="btn btn-link">Log In</button>
                                <button id="regLostBtn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                          </div>
                        </form>
                  </div>
                </div>

              </div>
          </div>
    </div>
