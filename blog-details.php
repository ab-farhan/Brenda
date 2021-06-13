<?php
require_once('functions/function.php');
get_header();
$id=$_GET['blog'];
$sel="SELECT * FROM blog WHERE blog_id='$id'";
$Q=mysqli_query($conn,$sel);
$blog=mysqli_fetch_assoc($Q);
 ?>
    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Blog Post</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.php">Home</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  blog details ====================-->
    <div class="blog-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="blog-details col-12">
                            <div class="blog-inner">
                                <div class="media">
                                    <div class="image"><img src="dashboard/uploads/<?=$blog['blog_img']?>" alt=""></div>
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li>By <a href="#"><?=$blog['blog_creator_name']?></a></li>
                                        <li><?=$blog['blog_date']?></li>
                                        <li><a href="#">3 Comment</a></li>
                                    </ul>
                                    <h2 class="title"><?=$blog['blog_name']?></h2>
                                    <div class="desc space__bottom--30">
                                        <p><?=$blog['blog_details']?></p>
                                        <blockquote class="blockquote space__bottom--30 space__top--30">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ad totam est optio mollitia dolores rem ducimus. Odio assumenda distinctio adipisci! Consequuntur excepturi eos nulla.</p>
                                            <span class="author">__Denise Miller</span>
                                        </blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam explicabo iusto suscipit dolore repellendus odit laborum, cupiditate unde nesciunt eveniet temporibus autem adipisci earum at error aspernatur neque minima doloribus?</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis voluptate repellat quam exercitationem excepturi enim et blanditiis amet minima itaque, doloribus cumque labore. Asperiores nemo odio sed molestias harum laborum quia enim, delectus repellendus consequuntur unde magnam, ipsam possimus vero, quam dolore adipisci. Rerum, vitae!</p>
                                    </div>
                                    <ul class="tags">
                                        <li><i class="fa fa-tags"></i></li>
                                        <li><a href="#">Consulting</a></li>
                                        <li><a href="#">Planning</a></li>
                                        <li><a href="#">Renovation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 space__top--60">
                            <div class="comment-wrapper">
                                <h3>Leave Your Comment</h3>
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row row-10">
                                            <div class="col-md-6 col-12 space__bottom--20"><input type="text" placeholder="Your Name"></div>
                                            <div class="col-md-6 col-12 space__bottom--20"><input type="email" placeholder="Your Email"></div>
                                            <div class="col-12"><textarea placeholder="Your Message"></textarea></div>
                                            <div class="col-12"><input type="submit" value="Send Comment"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 space__top__md--50 space__top__lm--50">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="sidebar-list">
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Concrete Supply</a></li>
                            <li><a href="#">Laminate Flooring</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Project Planning</a></li>
                        </ul>
                    </div>
                    <div class="sidebar">
                        <h3 class="sidebar-title">Popular Post</h3>
                        <div class="sidebar-blog">
                            <a href="blog-details-left-sidebar.html" class="image"><img src="assets/img/blog/sidebar-blog-1.jpg" alt=""></a>
                            <div class="content">
                                <h5><a href="blog-details-left-sidebar.html">What are Groundworkers and what do they do?</a></h5>
                                <span>30 October 2019</span>
                            </div>
                        </div>
                        <div class="sidebar-blog">
                            <a href="blog-details-left-sidebar.html" class="image"><img src="assets/img/blog/sidebar-blog-2.jpg" alt=""></a>
                            <div class="content">
                                <h5><a href="blog-details-left-sidebar.html">What's really delaying the £15.4bn mega-project</a></h5>
                                <span>30 October 2019</span>
                            </div>
                        </div>
                        <div class="sidebar-blog">
                            <a href="blog-details-left-sidebar.html" class="image"><img src="assets/img/blog/sidebar-blog-3.jpg" alt=""></a>
                            <div class="content">
                                <h5><a href="blog-details-left-sidebar.html">How much space does a house wall take up in sq ft?</a></h5>
                                <span>30 October 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <h3 class="sidebar-title">Popular Tags</h3>
                        <ul class="sidebar-tag">
                            <li><a href="#">Renovation</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Concrete</a></li>
                            <li><a href="#">Flooring</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Interior</a></li>
                            <li><a href="#">Planning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of blog details  ====================-->
  <?php
  get_footer();
  ?>
