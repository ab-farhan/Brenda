<?php
require_once('functions/function.php');
get_header();
 ?>
    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Blog</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.php">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  blog area ====================-->
    <div class="blog-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                      <?php
                      $limit=4;
                      if(isset($_GET['blog-page'])){
                        $page=$_GET['blog-page'];
                      }else {
                        $page=1;
                      }
                      $offset=($page-1) * $limit;

                      $sel_blog="SELECT * FROM blog ORDER BY blog_id DESC LIMIT {$offset},{$limit}";
                      $Q_blog=mysqli_query($conn,$sel_blog);
                      while ($blog=mysqli_fetch_assoc($Q_blog)) {
                       ?>
                        <div class="col-sm-6 col-12">
                            <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                <div class="blog-post-slider__image space__bottom--30">
                                    <a href="blog-details.php?blog=<?=$blog['blog_id']?>"><img src="dashboard/uploads/<?=$blog['blog_img']?>" class="img-fluid" alt=""></a>
                                </div>
                                <div class="blog-post-slider__content">
                                    <p class="post-date"> <?=$blog['blog_date']?></p>
                                    <h3 class="post-title">
                                        <a href="blog-details.php?blog=<?=$blog['blog_id']?>"><?=$blog['blog_name']?></a>
                                    </h3>
                                    <p class="post-excerpt"><?=substr($blog['blog_details'],0,150)?>…</p>
                                    <a href="blog-details.php?blog=<?=$blog['blog_id']?>" class="see-more-link">READ MORE</a>
                                </div>
                            </div>
                        </div>
                      <?php } ?>

                    </div>
                    <div class="row ">
                      <div class="col">
                      <?php

                        $sel1="SELECT * FROM blog";
                        $Q1=mysqli_query($conn,$sel1);
                        $data1=mysqli_num_rows($Q1);
                        $totalPage= ceil($data1 / $limit);

                          echo' <ul class="page-pagination space__top--30">';
                          if($page > 1){
                            echo '<li><a href="blog.php?blog-page='.($page - 1).'"><i class="fa fa-angle-left"></i> Prev</a></li>';
                          }
                                for ($i=1; $i <= $totalPage; $i++) {
                                  if ($i == $page) {
                                    $active="active";
                                  }else {
                                    $active="";
                                  }
                                echo'<li class="'.$active.'"><a href="blog.php?blog-page='.$i.'">'.$i.'</a></li>';
                                }

                                //
                                // <li class="active"><a href="#">01</a></li>
                                // <li><a href="#">02</a></li>
                                // <li><a href="#">03</a></li>
                                //
                                if($totalPage > $page){
                                  echo '<li><a href="blog.php?blog-page='.($page + 1).'"><i class="fa fa-angle-right"></i> Next</a></li>';
                                }
                            echo '</ul>';
                             ?>
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
    <!--====================  End of blog area  ====================-->
    <?php
      get_footer();
     ?>
