



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Website Detail</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>host">Manage Website</a></li>
                                    <li class="active">Website Detail</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <a href="<?php echo base_url();?>host"><button class="btn btn-success waves-effect waves-light m-b-5"> <i class="fa fa-chevron-left"></i> <span> Back</span></button></a>
                                      <a href="<?php echo base_url()."host/edit/".$details[0]->id;?>"><button class="btn btn-warning waves-effect waves-light m-b-5"> <i class="fa fa-edit"></i> <span> Edit</span></button></a>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>host/update_host" method="post">
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">id</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->id; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Website Name</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->host_name; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Example Product URL</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->example_url; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Starter URL</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->starter_url; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Name X-path</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->name_xpath; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Price X-path</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->price_xpath; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Product URL Regex</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->prod_regex; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Category URL Regex</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->cat_regex; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Blacklist URL Regex</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->blacklist_regex; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Already Crawled</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php if ($details[0]->is_crawled==1) {echo "Yes";} else {echo "No";} ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Link Collected</label>
                                              <div class="col-sm-10">
                                                <a href="#"> <p class="form-control-static"><?php echo $alllink; ?> [detail]</p> </a>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Potential Product URL</label>
                                              <div class="col-sm-10">
                                                <a href="#"> <p class="form-control-static"><?php echo $allpotprod; ?> [detail]</p> </a>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Product Info Collected</label>
                                              <div class="col-sm-10">
                                                <a href="#"> <p class="form-control-static"><?php echo $allproduct; ?> [detail]</p> </a>
                                              </div>
                                          </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    Page rendered in <strong>{elapsed_time}</strong> seconds | 2015 © <?php echo MY_CONSTANT; ?>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

	</body>
</html>
