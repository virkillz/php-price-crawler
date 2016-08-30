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
                                <h4 class="pull-left page-title">General elements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">General elements</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Basic example</h3></div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                            
                            <!-- Horizontal form -->
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Horizontal form</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword4" class="col-sm-3 control-label">Re Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">
                                                            Check me out !
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->



                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Inline Form</h3></div>
                                    <div class="panel-body">
                                    
                                        <form class="form-inline" role="form">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                            </div>
                                              
                                            <div class="form-group m-l-10">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                            </div>
                                            <div class="form-group m-l-10">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox3" type="checkbox">
                                                    <label for="checkbox3">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">Sign in</button>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                             
                        </div> <!-- End row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form elements</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form">                                    
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Text</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="Some text value...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Password</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Readonly</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                                </div>
                                            </div>                                    
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Disabled</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" disabled="" value="Disabled value">
                                                </div>
                                            </div>                                    
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Placeholder</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="placeholder">
                                                </div>
                                            </div>                                                                        
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Text area</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Static control</label>
                                                <div class="col-sm-10">
                                                  <p class="form-control-static">email@example.com</p>
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Helping text</label>
                                                <div class="col-sm-7">
                                                  <input type="text" class="form-control" placeholder="Helping text">
                                                  <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Input Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <h6>Multiple select</h6>
                                                    <select multiple="" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                           
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->




                        <div class="row">

                            <!-- Input States -->
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Input States</h3></div>
                                    <div class="panel-body">
                                    
                                        <form class="form-horizontal" role="form">
                                          
                                            <div class="form-group has-success">
                                                <label class="col-md-3 control-label" for="state-success">Success</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="state-success" name="state-success" class="form-control" placeholder="...">
                                                </div>
                                            </div>


                                            <div class="form-group has-warning">
                                                <label class="col-md-3 control-label" for="state-warning">Warning</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="state-warning" name="state-warning" class="form-control" placeholder="...">
                                                </div>
                                            </div>

                                            <div class="form-group has-error">
                                                <label class="col-md-3 control-label" for="state-danger">Danger</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="state-danger" name="state-danger" class="form-control" placeholder="...">
                                                </div>
                                            </div>

                                            <div class="form-group has-success has-feedback">
                                                <label class="col-sm-3 control-label">Input with success </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control">
                                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group has-warning has-feedback">
                                                <label class="col-sm-3 control-label">Input with warning </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control inputmask">
                                                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group has-error has-feedback">
                                                <label class="col-sm-3 control-label">Input with error </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control inputmask">
                                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                                </div>
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label class="col-sm-3 control-label">Custom Icons</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Custom icons">
                                                    <i class="fa fa-envelope form-control-feedback l-h-34"></i>
                                                </div>
                                            </div>
                                        </form>
                                    
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Input Sizes</h3></div>
                                    <div class="panel-body">
                                    
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="example-input-small">Small</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="example-input-normal">Normal</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="example-input-large">Large</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Grid Sizes</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-5 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder=".col-sm-5">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder=".col-sm-6">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-9 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder=".col-sm-9">
                                                </div>
                                            </div>
                                        </form>
                                    
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->

                        <!-- Input groups -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Input groups</h3></div>
                                    <div class="panel-body">
                                    
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">

                                                <label class="col-md-2 control-label" for="example-input1-group1">Static</label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>

                                                <div class="col-md-7 col-md-offset-2">
                                                    <div class="input-group m-t-10">
                                                        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-md-offset-2">
                                                    <div class="input-group m-t-10">
                                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                        <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                </div>
                                            </div> <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-input1-group2">Buttons</label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                                                        </span>
                                                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-md-offset-2">
                                                    <div class="input-group m-t-10">
                                                        <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Submit</button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-md-offset-2">
                                                    <div class="input-group m-t-10">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-facebook"></i></button>
                                                        </span>
                                                        <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-twitter"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div> <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-input1-group3">Dropdowns</label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0)">Action</a></li>
                                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                        <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-md-offset-2">
                                                    <div class="input-group m-t-10">
                                                        <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="javascript:void(0)">Action</a></li>
                                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-md-offset-2">
                                                    <div class="input-group m-t-10">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn waves-effect waves-light btn-primary" style="overflow: hidden; position: relative;">Action</button>
                                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0)">Action</a></li>
                                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                        <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="javascript:void(0)">Action</a></li>
                                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- form-group -->
                                          
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
	
	</body>
</html>