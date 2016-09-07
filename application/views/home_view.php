



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
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#"><?php echo MY_CONSTANT; ?></a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-earth"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $allhost; ?></span>
                                        Total Website
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-link"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $alllink; ?></span>
                                        URL Founded
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-cube"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $allpotprod; ?></span>
                                        Potential Product URL
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-pricetags"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $allprod; ?></span>
                                        Product Data
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->


                        <div class="row">
                            <div class="col-lg-8">
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
                                                    <div id="website-stats" style="position: relative;height: 320px;"></div>
                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">86,956</h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">86,69</h4>
                                                            <small class="text-muted">Monthly Report</small>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <h4 class="counter">948,16</h4>
                                                            <small class="text-muted">Yearly Report</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Portlet -->
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="portlet"><!-- /portlet heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            URL composition
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet2" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="pie-chart">
                                                        <div id="pie-chart-container" class="flot-chart" style="height: 320px;">
                                                        </div>
                                                    </div>

                                                    <div class="row text-center m-t-30">
                                                        <div class="col-sm-6">
                                                            <h4 class="counter">86,956</h4>
                                                            <small class="text-muted"> Weekly Report</small>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4 class="counter">86,69</h4>
                                                            <small class="text-muted">Monthly Report</small>
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/assets/chat/moment-2.2.1.js"></script>
        <script src="assets/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/assets/fastclick/fastclick.js"></script>
        <script src="assets/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="assets/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="assets/assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="assets/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>


        <!-- CUSTOM JS -->
        <script src="assets/js/jquery.app.js"></script>

        <!--Morris Chart-->
        <script src="assets/assets/morris/morris.min.js"></script>
        <script src="assets/assets/morris/raphael.min.js"></script>
        <script src="assets/assets/morris/morris.init.js"></script>


        <!-- Dashboard -->
        <script src="assets/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="assets/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="assets/js/jquery.todo.js"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
<script type="text/javascript">

        !function($) {
            "use strict";

            var Dashboard = function() {
                this.$body = $("body")
                this.$realData = []
            };

            //creates plot graph
            Dashboard.prototype.createPlotGraph = function(selector, data1, data2, labels, colors, borderColor, bgColor) {
              //shows tooltip
              function showTooltip(x, y, contents) {
                $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
                  position: 'absolute',
                  top: y + 5,
                  left: x + 5
                }).appendTo("body").fadeIn(200);
              }

              $.plot($(selector),
                  [ { data: data1,
                    label: labels[0],
                    color: colors[0]
                  },
                  { data: data2,
                    label: labels[1],
                    color: colors[1]
                  }
                ],
                {
                    series: {
                       lines: {
                      show: true,
                      fill: true,
                      lineWidth: 1,
                      fillColor: {
                        colors: [ { opacity: 0.0 },
                                  { opacity: 0.7 }
                                ]
                      }
                    },
                    points: {
                      show: true
                    },
                    shadowSize: 0
                    },
                    legend: {
                    position: 'nw'
                  },
                  grid: {
                    hoverable: true,
                    clickable: true,
                    borderColor: borderColor,
                    borderWidth: 0,
                    labelMargin: 10,
                    backgroundColor: bgColor
                  },
                  yaxis: {
                    min: 0,
                    max: 15,
                    color: 'rgba(0,0,0,0)'
                  },
                  xaxis: {
                    color: 'rgba(0,0,0,0)'
                  },
                  tooltip: true,
                  tooltipOpts: {
                      content: '%s: Value of %x is %y',
                      shifts: {
                          x: -60,
                          y: 25
                      },
                      defaultTheme: false
                  }
              });
            },
            //end plot graph

            //creates Pie Chart
            Dashboard.prototype.createPieGraph = function(selector, labels, datas, colors) {
                var data = [{
                    label: labels[0],
                    data: datas[0]
                }, {
                    label: labels[1],
                    data: datas[1]
                }, {
                    label: labels[2],
                    data: datas[2]
                }];
                var options = {
                    series: {
                        pie: {
                            show: true
                        }
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        hoverable: true,
                        clickable: true
                    },
                    colors: colors,
                    tooltip: true,
                    tooltipOpts: {
                        defaultTheme: false
                    }
                };

                $.plot($(selector), data, options);
            },



                //initializing various charts and components
                Dashboard.prototype.init = function() {
                  //plot graph data
                  var uploads = [[0, 325], [1, 340], [2, 360], [3, 370], [4, 390], [5, 400], [6, 460]];
                  var downloads = [[0, 425], [1, 440], [2, 460], [3, 470], [4, 490], [5, 500], [6, 560]];
                  var plabels = ["Visits", "Pages/Visit"];
                  var pcolors = ['#317eeb', '#29b6f6'];
                  var borderColor = '#fff';
                  var bgColor = '#fff';
                  this.createPlotGraph("#website-stats", uploads, downloads, plabels, pcolors, borderColor, bgColor);

                    //Pie graph data
                    var pielabels = ["Url Collected","Product url","Data Extracted"];
                    var datas = [<?php echo $alllink.','.$allpotprod.','.$allprod; ?>];
                    var colors = ["rgba(30, 136, 229, 0.7)", "rgba(41, 182, 246, 0.7)", "rgba(126, 87, 194, 0.7)"];
                    this.createPieGraph("#pie-chart #pie-chart-container", pielabels , datas, colors);

                },

            //init Dashboard
            $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard

        }(window.jQuery),

        //initializing Dashboard
        function($) {
            "use strict";
            $.Dashboard.init()
        }(window.jQuery);


</script>

    </body>
</html>
