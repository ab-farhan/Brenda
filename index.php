<?php
require_once("functions/function.php");
get_header();


 ?>

    <!--====================  hero slider area ====================-->
    <div class="hero-slider-area space__bottom--r120">
        <div class="hero-slick-slider-wrapper">
          <?php
          $bsel="SELECT * FROM banner ORDER BY ban_id DESC LIMIT 0,2";
          $bQ=mysqli_query($conn,$bsel);
          while($banner=mysqli_fetch_assoc($bQ)){
           ?>
            <div class="single-hero-slider single-hero-slider--background single-hero-slider--overlay position-relative bg-img" data-bg="dashboard/uploads/<?=$banner['ban_img']?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- hero slider content -->
                            <div class="hero-slider-content hero-slider-content--extra-space">
                                <h3 class="hero-slider-content__subtitle"><?=$banner['ban_title']?></h3>
                                <h2 class="hero-slider-content__title space__bottom--50"><?=$banner['ban_subtitle']?></h2>
                                <a href="<?=$banner['ban_btnurl']?>" class="default-btn default-btn--hero-slider"><?=$banner['ban_btntext']?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php } ?>

        </div>
    </div>
    <!--====================  End of hero slider area  ====================-->
    <!--====================  about area ====================-->
    <div class="about-area space__bottom--r120 ">
      <?php
      $sela="SELECT * FROM about ORDER BY about_id ASC";
      $Qa=mysqli_query($conn,$sela);
      $about=mysqli_fetch_assoc($Qa);
       ?>
        <div class="container">
            <div class="row align-items-center row-25">
                <div class="col-md-6">
                    <div class="about-image space__bottom__lm--30">
                        <img src="assets/img/about/about-section-1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <!-- section title -->
                        <div class="section-title space__bottom--25">
                            <h3 class="section-title__sub"><?= $about['about_title'] ?></h3>
                            <h2 class="section-title__title"><?= $about['about_subtitle'] ?></h2>
                        </div>
                        <p class="about-content__text space__bottom--40"><?= $about['about_details'] ?></p>
                        <a href="<?= $about['about_button_link']?>" class="default-btn"><?= $about['about_button'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of about area  ====================-->
    <!--====================  feature area ====================-->
    <div class="feature-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <!-- feature content wrapper -->
                    <div class="feature-content-wrapper space__bottom--m35">
                      <?php
                      $self="SELECT * FROM about_feature ORDER BY feat_id ASC LIMIT 0,3";
                      $Qf=mysqli_query($conn,$self);
                      while($feat=mysqli_fetch_assoc($Qf)){
                       ?>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img src="dashboard/uploads/<?=$feat['feat_img']?>" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title"><?= $feat['feat_title'] ?></h4>
                                <p class="single-feature__text"><?= substr($feat['feat_details'],0,200) ?></p>
                            </div>
                        </div>
                      <?php } ?>

                    </div>
                </div>
                <div class="col-lg-6 space__bottom__md--40 space__bottom__lm--40 order-1 order-lg-2">
                    <!-- feature content image -->
                    <div class="feature-content-image">
                        <img src="assets/img/feature/feature-banner-1.jpg" class="img-fluid" alt="">
                        <img src="assets/img/feature/feature-banner-2.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of feature area  ====================-->
    <!--====================  service area ====================-->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-5">
                    <!-- service banner -->
                    <div class="service-banner space__bottom__md--40 space__bottom__lm--40">
                        <img src="assets/img/service/service-man.png" class="float-none float-lg-right" alt="">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-7 mt-0 mt-lg-4">
                    <!-- section title -->
                    <?php
                    $selser="SELECT * FROM service ORDER BY ser_id";
                    $Qser=mysqli_query($conn,$selser);
                    $dataser=mysqli_fetch_assoc($Qser);
                     ?>
                    <div class="section-title space__bottom--40">
                        <h3 class="section-title__sub"><?=$dataser['ser_title']?></h3>
                        <h2 class="section-title__title"><?=$dataser['ser_subtitle']?></h2>
                    </div>
                    <!-- service slider -->
                    <div class="row service-slider-wrapper space__bottom__md--40 space__bottom__lm--40">
                      <?php
                      $selsd="SELECT * FROM service_details ORDER BY serd_id ASC";
                      $Qsd=mysqli_query($conn,$selsd);
                      while($datasd=mysqli_fetch_assoc($Qsd)){
                       ?>
                        <div class="col single-service text-center">
                            <div class="single-service__image space__bottom--15">
                                <a href="service.php"><img src="dashboard/uploads/<?=$datasd['serd_img']?>" class="img-fluid" alt=""></a>
                            </div>
                            <h4 class="single-service__content">
                                <a href="service.php"><?=$datasd['serd_name'] ?></a>
                            </h4>
                        </div>
                      <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of service area  ====================-->
    <!--====================  fun fact area ====================-->
    <div class="fun-fact-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- fun fact wrapper -->
                    <div class="fun-fact-wrapper fun-fact-wrapper-bg bg-img" data-bg="assets/img/backgrounds/funfact-bg.jpg">
                        <div class="fun-fact-inner background-color--default-overlay background-repeat--x-bottom space__inner--y30 bg-img" data-bg="assets/img/icons/ruler-black.png">
                            <div class="fun-fact-content-wrapper">
                              <?php
                              $sel_cd="SELECT * FROM count_down ORDER BY count_id DESC";
                              $Q_cd=mysqli_query($conn,$sel_cd);
                              $count=mysqli_fetch_assoc($Q_cd);
                               ?>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter"><?=$count['count_1st_value']?></h3>
                                    <h4 class="single-fun-fact__text"><?=$count['count_1st_name']?></h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter"><?=$count['count_2nd_value']?></h3>
                                    <h4 class="single-fun-fact__text"><?=$count['count_2nd_name']?></h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter"><?=$count['count_3rd_value']?></h3>
                                    <h4 class="single-fun-fact__text"><?=$count['count_3rd_name']?></h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter"><?=$count['count_4th_value']?></h3>
                                    <h4 class="single-fun-fact__text"><?=$count['count_4th_name']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of fun fact area  ====================-->
    <!--====================  project area ====================-->
    <div class="project-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                      <?php
                      $sel_ph="SELECT * FROM project_header ORDER BY pro_id ASC";
                      $Q_ph=mysqli_query($conn,$sel_ph);
                      $pro_hdr=mysqli_fetch_assoc($Q_ph);
                       ?>
                        <h3 class="section-title__sub"><?=$pro_hdr['pro_title']?></h3>
                        <h2 class="section-title__title"><?=$pro_hdr['pro_subtitle']?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-wrapper space__bottom--m5" >
          <?php
          $sel_project="SELECT * FROM project_details ORDER BY p_id ASC LIMIT 0,9";
          $Q_pd=mysqli_query($conn,$sel_project);
          while ($project=mysqli_fetch_assoc($Q_pd)) {
           ?>
            <div class="single-project-wrapper">
                <a class="single-project-item" href="project-details.php?project=<?=$project['p_id']?>">
                    <img src="dashboard/uploads/<?=$project['p_img']?>" class="img-fluid" alt="">
                    <span class="single-project-title"><?=$project['p_name']?></span>
                </a>
            </div>
          <?php } ?>
            <div class="clear-fix"></div>
        </div>
<div class="clear-fix"></div>
    </div>
    <!--====================  End of project area  ====================-->
    <!--====================  team area ====================-->
    <div class="team-area space__bottom--r120 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 space__bottom__md--40 space__bottom__lm--40">
                    <div class="team-member-title-wrapper">
                        <!-- section title -->
                        <div class="section-title space__bottom--30 space__bottom__md--30  space__bottom__lm--20">
                            <h3 class="section-title__sub">Our Team</h3>
                            <h2 class="section-title__title">Best & quality team member</h2>
                        </div>
                        <p class="team-text space__bottom--40 space__bottom__md--30 space__bottom__lm--20">Publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                        <a href="about.html" class="default-btn">View more</a>
                    </div>
                </div>
                <div class="col-lg-8 team-slider-column-wrapper">
                    <!-- team member slider -->
                    <div class="team-slider-wrapper row">
                      <?php
                        $sel_team="SELECT * FROM team_member ORDER BY team_id";
                        $Q_team=mysqli_query($conn,$sel_team);
                        while ($team=mysqli_fetch_assoc($Q_team)) {
                       ?>
                        <div class="single-team-member col text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img src="dashboard/uploads/<?=$team['team_img']?>" alt="">
                            </div>
                            <h5 class="single-team-member__name"><?=$team['team_name']?></h5>
                            <p class="single-team-member__des"><?=$team['team_title']?></p>
                        </div>
                      <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of team area  ====================-->
    <!--====================  testimonial cta area ====================-->
    <div class="testimonial-cta-area space__bottom--r120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 space__bottom__md--40 space__bottom__lm--40">
                    <!-- cta block -->
                    <div class="cta-block cta-block--shadow cta-block--bg bg-img" data-bg="assets/img/backgrounds/cta-bg.jpg">
                        <div class="cta-block__inner background-color--default-light-overlay space__inner--ry100">
                            <p class="cta-block__light-text text-center">More than <span>25</span> years</p>
                            <p class="cta-block__semi-bold-text text-center">Do you have project <br> Just dial (toll free)</p>
                                <p class="cta-block__bold-text text-center">+98565 569 874</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">

                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Testimonials</h3>
                        <h2 class="section-title__title">What client’s say</h2>
                    </div>
                    <!-- testimonial slider -->
                    <div class="testimonial-slider-wrapper space__inner__bottom__md--30  space__inner__bottom__lm--30">
                      <?php
                        $sel_tes="SELECT * FROM testimonial ORDER BY tes_id DESC LIMIT 0,4";
                        $Q_tes=mysqli_query($conn,$sel_tes);
                        while($tes=mysqli_fetch_assoc($Q_tes)){
                       ?>
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span> <?=$tes['tes_details']?> <span class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author"><?=$tes['tes_name']?></h5>
                            <p class="single-testimonial__author-des"><?=$tes['tes_designation']?></p>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial cta area  ====================-->
    <!--====================  blog grid slider area ====================-->
    <div class="blog-grid-slider-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Latest Post</h3>
                        <h2 class="section-title__title">Blog post about our various construction projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-wrapper space__bottom--m40">
                        <div class="row">
                          <?php
                          $sel_blog="SELECT * FROM blog ORDER BY blog_id DESC LIMIT 0,3";
                          $Q_blog=mysqli_query($conn,$sel_blog);
                          while ($blog=mysqli_fetch_assoc($Q_blog)) {

                           ?>
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details.php?blog=<?=$blog['blog_id']?>">
                                            <img src="dashboard/uploads/<?=$blog['blog_img']?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"> <a href="blog-details.php?blog=<?=$blog['blog_id']?>"> <?=$blog['blog_name']?></a></h4>
                                    <p class="single-blog-grid__text"><a href="blog-details.php?blog=<?=$blog['blog_id']?>"><?=substr($blog['blog_details'],0,100)?>...</a></p>
                                </div>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of blog grid slider area  ====================-->
<?php
  get_footer();
 ?>
