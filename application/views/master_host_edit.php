



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
                                <h4 class="pull-left page-title">Website Edit</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>host">Master Website</a></li>
                                    <li class="active">Edit Website</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Edit Website</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>host/update_host" method="post">
                                          <div class="form-group">

                                              <label class="col-md-2 control-label"></label>
                                              <div class="col-md-10">
                                                <div class="text-danger"><?php echo validation_errors();?></div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-2 control-label">id</label>
                                              <div class="col-sm-10">
                                                <p class="form-control-static"><?php echo $details[0]->id; ?></p>
                                                <input type="hidden" name="id" value="<?php echo $details[0]->id; ?>">
                                              </div>
                                          </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Website Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="name" placeholder="Example: Lazada Product" value="<?php echo $details[0]->host_name; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Example URL</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="url" placeholder="Example: Http://lazada.com/product/1234" value="<?php echo $details[0]->example_url; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Starter URL</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="starturl" placeholder="Example: Http://lazada.com/product/1234" value="<?php echo $details[0]->starter_url; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="namepath" placeholder="Example: //*[@id='our_name_display']" value='<?php echo $details[0]->name_xpath; ?>' required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Price Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="pricepath" placeholder="Example: //*[@id='our_price_display']" value='<?php echo $details[0]->price_xpath; ?>' required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Brand Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="brandpath" value='<?php echo $details[0]->brand_xpath; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Category Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="catpath" value='<?php echo $details[0]->category_xpath; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Seller Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="sellerpath" value='<?php echo $details[0]->seller_xpath; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">SKU Xpath</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="skupath" value='<?php echo $details[0]->sku_xpath; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product URL Regex</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="regex"  value='<?php echo $details[0]->prod_regex; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Category URL Regex</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="iscat" value='<?php echo $details[0]->cat_regex; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Blacklist URL Regex</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="blacklistregex" value='<?php echo $details[0]->blacklist_regex; ?>'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Search URL Pattern</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="searchpat" placeholder="example: http://tokopedia.com/search={{namaproduk}}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Has been Crawled</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="iscrawled">
                                                          <option value="1" <?php if($details[0]->is_crawled==1) {echo "selected";} ?>>Yes</option>
                                                          <option value="0" <?php if($details[0]->is_crawled==0) {echo "selected";} ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                  <div class="col-md-10">
                                                 <textarea class="form-control" rows="5" name="desc"><?php echo $details[0]->remarks; ?></textarea>
                                             </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                                <div class="col-md-2">

                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Submit</button>

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
