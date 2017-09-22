
<div class="container">
  <!--LOGO-->
      <div class="row justify-content-center">
              <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <img class="img-responsive rounded" id="logo" src="images/logo.svg" alt="logo">
              </div>
      </div>
  <!--search bar-->
      <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10 col-12">
                    <div class="input-group center-block" id="adv-search">
                        <input id="indexKeywords" type="text" class="form-control input-lg" name="keywords" placeholder="Search for Jobs" />
                        <div class="input-group-btn">
                          <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                              <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                  <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                      <label for="filter" class="col-lg-2 control-label">Filter by</label>
                                      <div class="col-lg-10">
                                        <select id="indexCategory" class="form-control" style="width:15rem" name="category">
                                          <option value="">Categroies</option>
                                          <option value="it">Cat 1</option>
                                          <option value="Cat 2">Cat 2</option>
                                          <option value="Cat 3">Cat 3</option>
                                          <option value="Cat 4">Cat 4</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="contain" class="col-lg-2 control-label">Employer</label>
                                      <div class="col-lg-10">
                                        <input id="indexEmployer"class="form-control" type="text" name="employer" value="" placeholder="hello world!" style="width:15rem"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="contain" class="col-lg-2 control-label">Location</label>
                                      <div class="col-lg-10">
                                        <input id="indexLocation"class="form-control" type="text" name="location" value="" placeholder="hello world!" style="width:15rem"/>
                                      </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true" style="width:15rem"></i></button> -->

                                </div>
                                </div>
                              <button id="submitSearch" type="submit" class="btn btn-success btn-lg" name="submit" value="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-sm-4 col-md-4 col-lg-4 col-4"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-4 alert alert-danger " type="hidden" id="loginAlert"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-4"></div>
        </div>

</div>
