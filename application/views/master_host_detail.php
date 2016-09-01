<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.bundle.min.js"></script>
<style>
canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}
</style>



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
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Website Stats
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div id="portlet1" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <canvas id="canvas"></canvas>
                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-4">
                                                            <h4 class="counter"><?php echo $alllink; ?></h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter"><?php echo $allpotprod; ?></h4>
                                                            <small class="text-muted">Monthly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter"><?php echo $allproduct; ?></h4>
                                                            <small class="text-muted">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->
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
        <script>
        var data = {
            labels: ["Link Collected", "Product Page", "Product"],
            datasets: [
                {
                    label: "<?php echo $details[0]->host_name; ?>",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: [<?php echo $alllink.','.$allpotprod.','.$allproduct; ?>],
                }
            ]
        };
            window.onload = function() {
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar= new Chart(ctx, {
                      type: 'horizontalBar',
                      data: data
                  });
            };
        </script>
	</body>
</html>
