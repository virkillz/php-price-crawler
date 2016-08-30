



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
                                <h4 class="pull-left page-title">Website Add</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>masterdata/branch">Master Website</a></li>
                                    <li class="active">Add Website</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add New Website</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>host/insert_host" method="post">
                                          <div class="form-group">

                                              <label class="col-md-2 control-label"></label>
                                              <div class="col-md-10">
                                                <div class="text-danger"><?php echo validation_errors();?></div>
                                              </div>
                                          </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Website Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" placeholder="Example: Lazada Product" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Example URL</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="url" placeholder="Example: Http://lazada.com/product/1234" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Starter URL</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="starturl" placeholder="Example: Http://lazada.com/product/1234" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="namepath" placeholder="Example: //*[@id='our_name_display']" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Price Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="pricepath" placeholder="Example: //*[@id='our_price_display']" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product URL Pattern</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="regex" placeholder="Regex example: /https?:\/\/.[^\/]*\/[^\/]+(.html)/">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                  <div class="col-md-10">
                                                 <textarea class="form-control" rows="5" name="desc"></textarea>
                                             </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                                <div class="col-md-2">

                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Add</button>

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
                    2015 © Moltran.
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
