

            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo base_url().$avatar;?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php  echo $fullname;?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="lockscreen"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="logout"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><?php  echo $role;?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>home" class="waves-effect <?php if ($this->uri->segment(1)=='home') {echo "active";} ?>"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>host" class="waves-effect <?php if ($this->uri->segment(1)=='host') {echo "active";} ?>"><i class="md md-dashboard"></i><span> Manage Website </span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>managesearch" class="waves-effect <?php if ($this->uri->segment(1)=='managesearch') {echo "active";} ?>"><i class="md md-search"></i><span> Manage Search </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='test' or $this->uri->segment(1)=='testcrawl') {echo "active";} ?>"><i class="md md-polymer"></i> <span> Test </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>test">Scraping Test</a></li>
                                    <li><a href="<?php echo base_url(); ?>testcrawl">Crawling Test</a></li>
                                    <li><a href="<?php echo base_url(); ?>test_search">Search Test</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='special') {echo "active";} ?>"><i class="md md-link"></i> <span> Action</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>special">Crawl a URL</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='scrap' or $this->uri->segment(1)=='links') {echo "active";} ?>"><i class="md md-link"></i> <span> Result</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>scrap">Scrapping Result</a></li>
                                    <li><a href="<?php echo base_url(); ?>links/all">Crawling Result</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='crawlsummary' or $this->uri->segment(1)=='scrapsummary') {echo "active";} ?>"><i class="md md-view-list"></i> <span> Summary </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>crawlsummary">Scrapping Summary</a></li>
                                    <li><a href="<?php echo base_url(); ?>scrapsummary">Crawling Summary</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='export') {echo "active";} ?>"><i class="md md-file-download"></i> <span> Export </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>export/scrapexport">Scrapping Data</a></li>
                                    <li><a href="<?php echo base_url(); ?>export/crawlexport">Crawling Data</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect <?php if ($this->uri->segment(1)=='setting') {echo "active";} ?>"><i class="md md-settings"></i> <span> Setting </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url(); ?>settings/blacklist">Setting Blacklist</a></li>
                                </ul>
                            </li>
                            <!-- <li class="has_sub">
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
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Elements </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
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
                            </li> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
