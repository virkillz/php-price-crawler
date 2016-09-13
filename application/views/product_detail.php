
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
                                <h4 class="pull-left page-title">Product Detail</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>host">Product</a></li>
                                    <li class="active">Product Detail</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <a href="<?php echo base_url();?>scrap"><button class="btn btn-success waves-effect waves-light m-b-5"> <i class="fa fa-chevron-left"></i> <span> Back</span></button></a>
                                      <a href="#"><button class="btn btn-warning waves-effect waves-light m-b-5"> <i class="fa fa-edit"></i> <span> Edit</span></button></a>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>host/update_host" method="post">
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">id</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->id ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Product Name</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->name ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Product Price</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->price ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Website</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->host_id; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Seller</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->seller ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">URL</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->url ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Brand</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->brand ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">SKU</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->sku ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Category</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->category ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Non Discount Price</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->price_non_discount ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Discount Percentage</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->discount ; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Last Update</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->last_update; ?></p>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">Broadcastable</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $detail[0]->is_qc ; ?></p>
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
