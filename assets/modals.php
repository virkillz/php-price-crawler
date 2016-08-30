<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- Plugins css -->
        <link href="assets/modal-effect/css/component.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.html" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="email-compose.html">Compose Mail</a></li>
                                    <li><a href="email-read.html">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect active"><i class="md md-palette"></i> <span> Elements </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li class="active"><a href="modals.html">Modals</a></li>
                                    <li><a href="bootstrap-ui.html">BS Elements</a></li>
                                    <li><a href="progressbars.html">Progress Bars</a></li>
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Components </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="portlets.html">Portlets</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Icons </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="material-icon.html">Material Design</a></li>
                                    <li><a href="ion-icons.html">Ion Icons</a></li>
                                    <li><a href="font-awesome.html">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Forms </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                                    <li><a href="code-editor.html">Code Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Data Tables </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables.html">Basic Tables</a></li>
                                    <li><a href="table-datatable.html">Data Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="responsive-table.html">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-poll"></i><span> Charts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chartjs.html">Chartjs</a></li>
                                    <li><a href="flot-chart.html">Flot Chart</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="chart-radial.html">Radial charts</a></li>
                                    <li><a href="other-chart.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="gmap.html"> Google Map</a></li>
                                    <li><a href="vector-map.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-pages"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="email-template.html">Email template</a></li>
                                    <li><a href="contact.html">Contact-list</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="recoverpw.html">Recover Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming-soon</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="404_alt.html">404 alt</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="md md-share"></i><span>Multi Level </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.2</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Level 2.3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



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
                                <h4 class="pull-left page-title">Modals</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Elements</a></li>
                                    <li class="active">Modals</li>
                                </ol>
                            </div>
                        </div>


                        <!-- Bootstrap Modals -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Bootstrap Modals (default)</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Text in a modal</h4>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        <hr>
                                                        <h4>Overflowing text to show scroll behavior</h4>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                        <!-- Large modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <!-- Small modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

                                    </div>
                                </div>
                            </div>

                        </div> <!-- End of row -->


                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Custom Modals</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <!-- sample modal content -->

                                        <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Modal Heading</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Text in a modal</h4>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        <hr>
                                                        <h4>Overflowing text to show scroll behavior</h4>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-full">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="full-width-modalLabel">Modal Heading</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Text in a modal</h4>
                                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                        <hr>
                                                        <h4>Overflowing text to show scroll behavior</h4>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title">Modal Content is Responsive</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Name</label> 
                                                                    <input type="text" class="form-control" id="field-1" placeholder="John"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-2" class="control-label">Surname</label> 
                                                                    <input type="text" class="form-control" id="field-2" placeholder="Doe"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label">Address</label> 
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Address"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-4"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-4" class="control-label">City</label> 
                                                                    <input type="text" class="form-control" id="field-4" placeholder="Boston"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-4"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-5" class="control-label">Country</label> 
                                                                    <input type="text" class="form-control" id="field-5" placeholder="United States"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-4"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-6" class="control-label">Zip</label> 
                                                                    <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group no-margin"> 
                                                                    <label for="field-7" class="control-label">Personal Info</label> 
                                                                    <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;">                                                        </textarea> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

                                        <div id="tabs-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <ul class="nav nav-tabs navtab-bg nav-justified">
                                                        <li class="">
                                                            <a href="#home-2" data-toggle="tab" aria-expanded="false"> 
                                                                <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                                                <span class="hidden-xs">Home</span> 
                                                            </a> 
                                                        </li> 
                                                        <li class=""> 
                                                            <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                                                <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                                <span class="hidden-xs">Profile</span> 
                                                            </a> 
                                                        </li> 
                                                        <li class="active"> 
                                                            <a href="#messages-2" data-toggle="tab" aria-expanded="true"> 
                                                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                                                <span class="hidden-xs">Messages</span> 
                                                            </a> 
                                                        </li> 
                                                        <li class=""> 
                                                            <a href="#settings-2" data-toggle="tab" aria-expanded="false"> 
                                                                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                                                <span class="hidden-xs">Settings</span> 
                                                            </a> 
                                                        </li> 
                                                    </ul> 
                                                    <div class="tab-content"> 
                                                        <div class="tab-pane" id="home-2"> 
                                                            <div> 
                                                                <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p> 
                                                                <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p> 
                                                            </div> 
                                                        </div> 
                                                        <div class="tab-pane" id="profile-2">
                                                            <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p> 
                                                            <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p> 
                                                        </div> 
                                                        <div class="tab-pane active" id="messages-2">
                                                            <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p> 
                                                            <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p> 
                                                        </div> 
                                                        <div class="tab-pane" id="settings-2">
                                                            <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p> 
                                                            <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p> 
                                                        </div> 
                                                    </div> 
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <div class="panel-group panel-group-joined" id="accordion-test"> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                                        Collapsible Group Item #1
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseOne" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                                        Collapsible Group Item #2
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseTwo" class="panel-collapse collapse in"> 
                                                                <div class="panel-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                                                        Collapsible Group Item #3
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseThree" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0 b-0">
                                                    <div class="panel panel-color panel-primary">
                                                        <div class="panel-heading"> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                            <h3 class="panel-title">Panel Primary</h3> 
                                                        </div> 
                                                        <div class="panel-body"> 
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                                                        </div> 
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Custom width modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">Custom width Modal</button>
                                        <!-- Full width modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#full-width-modal">Full width Modal</button>
                                        <!-- Full width modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
                                        <!-- Full width modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tabs-modal">Tabs in Modal</button>
                                        <!-- Full width modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#accordion-modal">Accordion in Modal</button>
                                        <!-- Full width modal -->
                                        <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal">Panel in Modal</button>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row -->



                        <!-- Modals Examples -->
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> Modals Examples (Animations) </h3>
                                    </div> 
                                    <div class="panel-body">
                                        <table class="table"> 
                                            <thead> 
                                                <tr> 
                                                    <th style="width:30%;">Modal Type</th> 
                                                    <th>Example</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <td class="middle-align">Fade in &amp; Scale</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-1">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Slide in (right)</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-2">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Slide in (bottom)</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-3">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Newspaper</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-4">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Fall</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-5">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Side Fall</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-6">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Sticky Up</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-7">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3D Flip (horizontal)</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-8">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3D Flip (vertical)</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-9">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3D Sign</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-10">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Super Scaled</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-11">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Just Me</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-12">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3D Slit</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-13">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3D Rotate Bottom</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-14">Show Me
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">3D Rotate In Left</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-15">Show Me 
                                                    </a></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="middle-align">Blur</td> 
                                                    <td> 
                                                        <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-16">Show Me
                                                    </a></td> 
                                                </tr> 
                                            </tbody> 
                                        </table> 
                                    </div>



                                    <div class="md-modal md-effect-1" id="modal-1">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="md-modal md-effect-2" id="modal-2">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="md-modal md-effect-3" id="modal-3">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-4" id="modal-4">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-5" id="modal-5">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-6" id="modal-6">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-7" id="modal-7">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-8" id="modal-8">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-9" id="modal-9">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-10" id="modal-10">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-11" id="modal-11">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-12" id="modal-12">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-13" id="modal-13">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-14" id="modal-14">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-15" id="modal-15">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md-modal md-effect-16" id="modal-16">
                                        <div class="md-content">
                                            <h3>Modal Dialog</h3>
                                            <div>
                                                <p>This is a modal window. You can do the following things with it:</p>
                                                <ul>
                                                    <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                    <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                    <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="md-overlay"></div><!-- the overlay element -->


                                </div> <!-- Panel -->
                            </div> <!-- Col -->
                        </div> <!-- Row -->

                   </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>

        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>
	
	</body>
</html>