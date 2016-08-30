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

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="assets/form-wizard/jquery.steps.css" />

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
                                <h4 class="pull-left page-title">Form Wizard</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Form Wizard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Basic Form Wizard</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>Account</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="userName">User name *</label>
                                                        <div class="col-lg-10">
                                                            <input class="form-control required" id="userName" name="userName" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="password"> Password *</label>
                                                        <div class="col-lg-10">
                                                            <input id="password" name="password" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="confirm">Confirm Password *</label>
                                                        <div class="col-lg-10">
                                                            <input id="confirm" name="confirm" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                                    </div>
                                                </section>
                                                <h3>Profile</h3>
                                                <section>
                                                    <div class="form-group clearfix">

                                                        <label class="col-lg-2 control-label" for="name"> First name *</label>
                                                        <div class="col-lg-10">
                                                            <input id="name" name="name" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="surname"> Last name *</label>
                                                        <div class="col-lg-10">
                                                            <input id="surname" name="surname" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="email">Email *</label>
                                                        <div class="col-lg-10">
                                                            <input id="email" name="email" type="text" class="required email form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="address">Address *</label>
                                                        <div class="col-lg-10">
                                                            <input id="address" name="address" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                                    </div>

                                                </section>
                                                <h3>Hints</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <ul>
                                                                <li>Jonathan Smith </li>
                                                                <li>Lab</li>
                                                                <li>jonathan@smith.com</li>
                                                                <li>Your city, Cityname</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Finish</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox-h" type="checkbox">
                                                                <label for="checkbox-h">
                                                                    I agree with the Terms and Conditions.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form> 
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->




                        <!-- Vertical Steps Example -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Vertical Steps Example</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div id="wizard-vertical">
                                            <h3>Account</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="userName1">User name *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control required" id="userName1" name="userName" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="password1"> Password *</label>
                                                    <div class="col-lg-10">
                                                        <input id="password1" name="password" type="text" class="required form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="confirm1">Confirm Password *</label>
                                                    <div class="col-lg-10">
                                                        <input id="confirm1" name="confirm" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                                </div>
                                            </section>
                                            <h3>Profile</h3>
                                            <section>
                                                <div class="form-group clearfix">

                                                    <label class="col-lg-2 control-label" for="name1"> First name *</label>
                                                    <div class="col-lg-10">
                                                        <input id="name1" name="name" type="text" class="required form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="surname1"> Last name *</label>
                                                    <div class="col-lg-10">
                                                        <input id="surname1" name="surname" type="text" class="required form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="email1">Email *</label>
                                                    <div class="col-lg-10">
                                                        <input id="email1" name="email" type="text" class="required email form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="address1">Address *</label>
                                                    <div class="col-lg-10">
                                                        <input id="address1" name="address" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                                </div>

                                            </section>
                                            <h3>Hints</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <div class="col-lg-12">
                                                        <ul>
                                                            <li>Jonathan Smith </li>
                                                            <li>Lab</li>
                                                            <li>jonathan@smith.com</li>
                                                            <li>Your city, Cityname</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Finish</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <div class="col-lg-12">
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox-v" type="checkbox">
                                                            <label for="checkbox-v">
                                                                I agree with the Terms and Conditions.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div> <!-- End #wizard-vertical -->
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->



                        <!-- Wizard with Validation -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Wizard with Validation</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="wizard-validation-form" action="#">
                                            <div>
                                                <h3>Step 1</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="userName2">User name </label>
                                                        <div class="col-lg-10">
                                                            <input class="form-control" id="userName2" name="userName" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="password2"> Password *</label>
                                                        <div class="col-lg-10">
                                                            <input id="password2" name="password" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="confirm2">Confirm Password *</label>
                                                        <div class="col-lg-10">
                                                            <input id="confirm2" name="confirm" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                                    </div>
                                                </section>
                                                <h3>Step 2</h3>
                                                <section>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label" for="name2"> First name *</label>
                                                        <div class="col-lg-10">
                                                            <input id="name2" name="name" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="surname2"> Last name *</label>
                                                        <div class="col-lg-10">
                                                            <input id="surname2" name="surname" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="email2">Email *</label>
                                                        <div class="col-lg-10">
                                                            <input id="email2" name="email" type="text" class="required email form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="address2">Address </label>
                                                        <div class="col-lg-10">
                                                            <input id="address2" name="address" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                                    </div>

                                                </section>
                                                <h3>Step 3</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <ul class="list-unstyled w-list">
                                                                <li>First Name : Jonathan </li>
                                                                <li>Last Name : Smith </li>
                                                                <li>Emial: jonathan@smith.com</li>
                                                                <li>Address: 123 Your City, Cityname. </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Step Final</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                                            <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                                        </div>
                                                    </div>

                                                </section>
                                            </div>
                                        </form>
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

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
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <!--Form Validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/form-wizard/wizard-init.js" type="text/javascript"></script>

	
	</body>
</html>