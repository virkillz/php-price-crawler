<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>VK Framework</title>

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

        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

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
        
<?php include 'topbar.php'; ?>
<?php include 'sidebarmenu.php'; ?>



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
                                <h4 class="pull-left page-title">Widgets</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Components</a></li>
                                    <li class="active">Widgets</li>
                                </ol>
                            </div>
                        </div>


                        <!--Widget-4 -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="fa fa-usd"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">15852</span>
                                        Total Sales
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="fa fa-shopping-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">956</span>
                                        New Orders
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="fa fa-user"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">5210</span>
                                        New Users
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="fa fa-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">20544</span>
                                        Unique Visitors
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row-->


                        <!-- WEATHER -->
                        <div class="row">
                                    
                            <div class="col-lg-6">
                                
                                <!-- BEGIN WEATHER WIDGET 1 -->
                                <div class="panel bg-info">
                                    <div class="panel-body">
                                    
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="col-xs-6 text-center">
                                                        <canvas id="partly-cloudy-day" width="115" height="115"></canvas>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h2 class="m-t-0 text-white"><b>32°</b></h2>
                                                        <p class="text-white">Partly cloudy</p>
                                                        <p class="text-white">15km/h - 37%</p>
                                                    </div>
                                                </div><!-- End row -->
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row">
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SAT</h4>
                                                        <canvas id="cloudy" width="35" height="35"></canvas>
                                                        <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SUN</h4>
                                                        <canvas id="wind" width="35" height="35"></canvas>
                                                        <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">MON</h4>
                                                        <canvas id="clear-day" width="35" height="35"></canvas>
                                                        <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end row -->
                                    </div><!-- panel-body -->
                                </div><!-- panel-->
                                <!-- END Weather WIDGET 1 -->
                                
                            </div><!-- End col-md-6 -->

                            <div class="col-lg-6">
                                
                                <!-- WEATHER WIDGET 2 -->
                                <div class="panel bg-success">
                                    <div class="panel-body">
                                    
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-xs-6 text-center">
                                                            <canvas id="snow" width="115" height="115"></canvas>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <h2 class="m-t-0 text-white"><b> 23°</b></h2>
                                                            <p class="text-white">Partly cloudy</p>
                                                            <p class="text-white">15km/h - 37%</p>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- weather-widget -->
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row">
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SAT</h4>
                                                        <canvas id="sleet" width="35" height="35"></canvas>
                                                        <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SUN</h4>
                                                        <canvas id="fog" width="35" height="35"></canvas>
                                                        <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">MON</h4>
                                                        <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                                        <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                                    </div>
                                                </div><!-- End row -->
                                            </div> <!-- col-->
                                        </div><!-- End row -->
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                                <!-- END WEATHER WIDGET 2 -->
                                    
                            </div><!-- /.col-md-6 -->
                        </div> <!-- End row -->   


                        <!--Widget-4 -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon"><img src="images/users/avatar-1.jpg" alt="" class="img-circle img-responsive"></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="name">Chadengle</span>
                                        Web Designer
                                    </div>
                                    <br/>
                                    <hr class="m-t-10"/>
                                    <ul class="text-center social-links list-inline m-0">
                                        <li>
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon"><img src="images/users/avatar-9.jpg" alt="" class="img-circle img-responsive"></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="name">Joshaustin</span>
                                        Programmer
                                    </div>
                                    <br/>
                                    <hr class="m-t-10"/>
                                    <ul class="text-center social-links list-inline m-0">
                                        <li>
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon"><img src="images/users/avatar-6.jpg" alt="" class="img-circle img-responsive"></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="name">Olive Yew</span>
                                        UI/UX Designer
                                    </div>
                                    <br/>
                                    <hr class="m-t-10"/>
                                    <ul class="text-center social-links list-inline m-0">
                                        <li>
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon"><img src="images/users/avatar-4.jpg" alt="" class="img-circle img-responsive"></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="name">Allie Grater</span>
                                        Programmer
                                    </div>
                                    <br/>
                                    <hr class="m-t-10"/>
                                    <ul class="text-center social-links list-inline m-0">
                                        <li>
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End row-->


                        <div class="row text-center">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="panel panel-border panel-purple widget-s-1">
                                    <div class="panel-heading"> </div>
                                    <div class="panel-body">
                                    <div class="h2 text-purple">15852</div>
                                    <span class="text-muted">Sales</span>
                                    <div class="text-right">
                                      <i class="ion-social-usd fa-2x text-purple"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                                    
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="panel panel-border panel-pink widget-s-1">
                                    <div class="panel-heading"> </div>
                                    <div class="panel-body">
                                    <div class="h2 text-pink">956</div>
                                    <span class="text-muted">New Orders</span>
                                    <div class="text-right">
                                      <i class="ion-ios7-cart fa-2x text-pink"></i>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="panel panel-border panel-primary widget-s-1">
                                    <div class="panel-heading"> </div>
                                    <div class="panel-body">
                                    <div class="h2 text-primary">5210</div>
                                    <span class="text-muted">New Users</span>
                                    <div class="text-right">
                                      <i class="ion-android-contacts fa-2x text-primary"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                                    
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="panel panel-border panel-success widget-s-1">
                                    <div class="panel-heading"> </div>
                                    <div class="panel-body">
                                    <div class="h2 text-success">20544</div>
                                    <span class="text-muted">Visits</span>
                                    <div class="text-right">
                                      <i class="ion-eye fa-2x text-success"></i>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>

                        <!--Widget-4 -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">15852</span>
                                        Total Sales
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Target <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">956</span>
                                        New Orders
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Target <span class="pull-right">90%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">5210</span>
                                        New Users
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Target <span class="pull-right">57%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-pink" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                    <span class="sr-only">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Target <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row-->


                        <div class="row">
                            <!-- INBOX -->
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Inbox</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="inbox-widget nicescroll mx-box">
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Chadengle</p>
                                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                                    <p class="inbox-item-date">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Tomaslau</p>
                                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                                    <p class="inbox-item-date">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Stillnotdavid</p>
                                                    <p class="inbox-item-text">This theme is awesome!</p>
                                                    <p class="inbox-item-date">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Kurafire</p>
                                                    <p class="inbox-item-text">Nice to meet you</p>
                                                    <p class="inbox-item-date">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Shahedk</p>
                                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                                    <p class="inbox-item-date">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Adhamdannaway</p>
                                                    <p class="inbox-item-text">This theme is awesome!</p>
                                                    <p class="inbox-item-date">9:56 AM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-8.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Arashasghari</p>
                                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                                    <p class="inbox-item-date">10:15 AM</p>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img"><img src="images/users/avatar-9.jpg" class="img-circle" alt=""></div>
                                                    <p class="inbox-item-author">Joshaustin</p>
                                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                                    <p class="inbox-item-date">9:56 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Chat</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div class="chat-conversation">
                                                <ul class="conversation-list nicescroll">
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="images/avatar-1.jpg" alt="male">
                                                            <i>10:00</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>John Deo</i>
                                                                <p>
                                                                    Hello!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="images/users/avatar-5.jpg" alt="Female">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Smith</i>
                                                                <p>
                                                                    Hi, How are you? What about our next meeting?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="images/avatar-1.jpg" alt="male">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>John Deo</i>
                                                                <p>
                                                                    Yeah everything is fine
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="images/users/avatar-5.jpg" alt="male">
                                                            <i>10:02</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Smith</i>
                                                                <p>
                                                                    Wow that's great
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-xs-9 chat-inputbar">
                                                        <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                                    </div>
                                                    <div class="col-xs-3 chat-send">
                                                        <button type="submit" class="btn btn-info">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                
                            </div> <!-- end col-->

                            <div class="col-lg-4">

                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Todo</h3> 
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4> 
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="pull-right btn btn-primary btn-sm" id="btn-archive">Archive</a>
                                            </div>
                                        </div>

                                        <ul class="list-group no-margn nicescroll todo-list" style="max-height: 288px;" id="todo-list"></ul>

                                         <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                            <div class="row">
                                                <div class="col-sm-9 todo-inputbar">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                </div>
                                                <div class="col-sm-3 todo-send">
                                                    <button class="btn-info btn-block btn" type="button" id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>

                                
                            </div> <!-- end col -->

                        </div>




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

        <script src="assets/chat/moment-2.2.1.js"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- Counter-up -->
        <script src="assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- skycons -->
        <script src="js/skycons.min.js" type="text/javascript"></script>

        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <!-- Chat -->
        <script src="js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        </script>

	
	</body>
</html>