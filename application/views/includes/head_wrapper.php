<!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
    	<div class="row"><!-- row -->
        
            <nav class="k-functional-navig"><!-- functional navig -->
                <?php $e=$this->session->userdata('is_logged_in_member');
                                    $f = $this->session->userdata('is_logged_in_admin');
                                    //echo $e;
                                    if((!isset($e) || $e != true) && (!isset($f) || $f != true)) { ?>
                <ul class="list-inline pull-right">
                    <li><a data-toggle="modal" href="#myModal">Log In</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/registration">Join Now</a></li>
                </ul>
                <?php } else { ?>

                <ul>
                    <li class="dropdown">
                                            
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 
                        
                                             <?php echo $this->session->userdata('user_name'); ?>

                        
                                            <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url(); ?>index.php/profile/view_profile">Profile</a></li>
                                                <li><a href="<?php echo base_url(); ?>index.php/profile/view_history">History</a></li>
                                                <li><a href="<?php echo base_url(); ?>index.php/login/check_admin">Settings</a></li>
                                                <li><a href="<?php echo base_url(); ?>index.php/login/logout?uri=<?php echo urlencode($var); ?>">Sign Out</a></li>
                                              </ul>
                                        </li>
                </ul>

                <?php } ?>
        
            </nav><!-- functional navig end -->
        
        	<div class="col-lg-12">
        
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="<?php echo base_url(); ?>" title="Home Page">
                            <img src="<?php echo base_url(); ?>img/site-logo.png" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

            	<nav id="k-menu" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="news.html" title="Our School News">News</a>
                        </li>
                        <li>
                            <a href="events.html" title="Upcoming Events">Events</a>
                        </li>
                        <li>
                            <a href="courses.html" title="Available Courses">Courses</a>
                        </li>
                        <li>
                            <a href="#" class="Pages Collection" title="More Templates">Inner Pages</a>
                            <ul class="sub-menu">
                                <li><a href="news-single.html">News Single Page</a></li>
                                <li><a href="events-single.html">Events Single Page</a></li>
                                <li><a href="courses-single.html">Course Single Page</a></li>
                                <li><a href="gallery-single.html">Gallery Single Page</a></li>
                                <li><a href="news-stacked.html">News Stacked Page</a></li>
                                <li><a href="search-results.html">Search Results Page</a></li>
                                <li>
                                    <a href="#">Menu Test</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Second Level 01</a></li>
                                        <li>
                                            <a href="#">Second Level 02</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Third Level 01</a></li>
                                                <li><a href="#">Third Level 02</a></li>
                                                <li><a href="#">Third Level 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Second Level 03</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html" title="How things work">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="full-width.html">Full Width Page</a></li>
                                <li><a href="sidebar-left.html">Sidebar on Left</a></li>
                                <li><a href="formatting.html">Formatting</a></li>
                                <li><a href="school-leadership.html">School Leadership</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html" title="School Contacts">Contact Us</a>
                        </li>
                    </ul>
        
            	</nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->