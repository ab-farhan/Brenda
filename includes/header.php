
<?php
//print_r($_SERVER);
//echo $_SERVER['PHP_SELF'];
$link=explode('/',$_SERVER['PHP_SELF']);
//print_r($link);
$page=$link[2];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php
    if($page=='index.php'){echo "Brenda :: Home Page";}
    elseif($page=='about.php'){echo "Brenda :: About Page";}
    elseif($page=='service.php'){echo "Brenda :: Service Page";}
    elseif($page=='service-details.php'){echo "Brenda :: Service Details";}
    elseif($page=='project.php'){echo "Brenda :: Project Page";}
    elseif($page=='project-details.php'){echo "Brenda :: Project Details";}
    elseif($page=='blog.php'){echo "Brenda :: Blog Page";}
    elseif($page=='blog-detail.php'){echo "Brenda :: Blog Details";}
    elseif($page=='contact.php'){echo "Brenda :: Contact Page";} 
     ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">
    <!-- CSS
		============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- CSS Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/cssanimation.min.css">
    <!-- Justified Gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/justifiedGallery.min.css">
    <!-- Light Gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/light-gallery.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!--====================  header area ====================-->
    <div class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block" data-bg="assets/img/icons/ruler.png">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header-top-info">
                            <span class="header-top-info__image pr-1"><img src="assets/img/icons/phone.png" alt=""></span>
                            <span class="header-top-info__text">01225 265 847</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-center">
                            <span class="header-top-info__image pr-1"><img src="assets/img/icons/clock.png" alt=""></span>
                            <span class="header-top-info__text">9.00 am - 11.00 pm</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-info text-right">
                            <a class="header-top-info__link" href="login-register.php"><span>Login</span></a> / <a class="header-top-info__link" href="login-register.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu bar -->
        <div class="menu-bar position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-bar-wrapper background-color--default space__inner--x35">
                            <div class="menu-bar-wrapper-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <div class="brand-logo">
                                            <a href="index.php">
                                                <img src="assets/img/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="navigation-area d-flex justify-content-end align-items-center">
                                            <!-- navigation menu -->
                                            <nav class="main-nav-menu">
                                                <ul class="d-flex justify-content-end">
                                                    <li>
                                                      <a <?php if($page=='index.php'){echo "class='active'";} ?> href="index.php">Home</a>
                                                    </li>
                                                    <li><a <?php if($page=='about.php'){echo "class=active";} ?> href="about.php">About</a></li>
                                                    <li class="has-sub-menu">
                                                        <a <?php if($page=="service.php" || $page=="service-details.php"){echo "class='active'";} ?> href="service.php">Service</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="service-details.php">Service Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub-menu">
                                                        <a <?php if($page=='project.php' || $page=='project-details.php'){echo "class='active'";} ?> href="project.php">Project</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="project-details.php">Project Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub-menu">
                                                        <a <?php if($page=='blog.php' || $page=='blog-details.php'){echo "class='active'";} ?> href="blog.php">Blog</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="blog-details.php">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a <?php if($page=='contact.php'){echo "class='active'";} ?> href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <!-- search icon nav menu -->
                                            <div class="nav-search-icon">
                                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                                <div class="header-search-form">
                                                    <form action="#">
                                                        <input type="text" placeholder="Type and hit enter">
                                                        <button><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <!--====================  mobile header ====================-->
    <div class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--dark d-block d-lg-none" data-bg="assets/img/icons/ruler.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="assets/img/logo-white.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile-menu-trigger-wrapper text-right" id="mobile-menu-trigger">
                        <span class="mobile-menu-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of mobile header  ====================-->
    <!--====================  offcanvas mobile menu ====================-->
    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <span class="menu-close"></span>
        </a>
        <div class="offcanvas-wrapper">
            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="index.html">Homepage One</a></li>
                                <li><a href="index-2.html">Homepage Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="service.html">Service</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="service.html">Service Page</a></li>
                                <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu-mobile">
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Project</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="project.html">Project Page</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu-mobile">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu-mobile">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="fa fa-phone"></i> 01225 265 847</li>
                                <li><i class="fa fa-clock-o"></i> 9.00 am - 11.00 pm</li>
                                <li><i class="fa fa-user"></i> <a href="login-register.html">Login / Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of offcanvas mobile menu  ====================-->
