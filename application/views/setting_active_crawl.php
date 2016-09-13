
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
                                <h4 class="pull-left page-title">Setting Active Crawl</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li><a href="<?php echo base_url(); ?>">Action</a></li>
                                    <li class="active">Setting Active Crawl</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Setting Active Crawl</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>matahari/update_setting" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">URL</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $url;?>" name="url" required>
                                                    <span class="help-block"><small><?php echo $url.$pagenumber; ?></small></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Starting Number</label>
                                                <div class="col-md-2">
                                                    <input type="number" class="form-control" name="number" value="<?php echo $pagenumber;?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Website</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="hostid">
                                                                <?php
                                                                    foreach($hasil  as $r):
                                                                      if ($r->id==$hostid) {$default='selected';} else {$default='';}
                                                                       echo '<option value="'.$r->id.'" '.$default.'>'.$r->host_name.'</option>';
                                                                    endforeach;
                                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Keyword</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="keyword" placeholder="Example: smartphone" value="<?php echo $keyword;?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Active</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="isactive">
                                                        <option value="1" <?php if ($isactive==1) {echo 'selected';} ?>>Yes</option>
                                                        <option value="2" <?php if ($isactive==0) {echo 'selected';} ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label class="col-md-2 control-label"></label>
                                                <div class="col-md-2">

                                                    <button type="submit" id="subbut" onclick="changeLabel()" class="btn btn-primary waves-effect waves-light m-b-5">Save</button>

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
        <script type="text/Javascript">
            function changeLabel()
            {
                document.getElementById('subbut').innerHTML = 'Processing <i class="ion-loading-a"></i>';
            }
        </script>
	</body>
</html>
