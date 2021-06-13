<!--content part start here  -->
<section>
  <div class="container-fluid content_part bg-white">
    <div class="row">
      <div class="col-md-2 sidebar_part">
        <div class="user_part text-center">
          <?php if($_SESSION['user_img']!=''){ ?>
          <img src="uploads/<?=$_SESSION['user_img']?>" alt="profile" class="img-fluid">
        <?php }else{ ?>
          <img src="images/profile.png" alt="profile" class="img-fluid">
        <?php } ?>
          <h5><?= $_SESSION['user_name']?></h5>
          <p><i class="fas fa-circle"></i> Online</p>
        </div>
        <div class="menu_bar">
          <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="view-user.php?v=<?=$_SESSION['user_id']?>"><i class="fas fa-user-circle pr-2"></i>My Profile</a></li>
            <?php if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){ ?>
            <li><a href="all-user.php"><i class="fas fa-user pr-2 mr-1"></i>All User </a></li>
          <?php }
                if($_SESSION['user_role_id']!=5){
          ?>
            <li><a href="all-banner.php"><i class="fab fa-bandcamp"></i> Banner</a></li>
            <li id="about_hvr"><a href="javaScript:void(0)" ><i class="fas fa-comment-alt"></i> About <i class="fas fa-angle-down float-right p-2 pr-3"></i></a>
              <ul class="feature">
                <li><a href="all-about.php" class=" pl-5">About Details</a></li>
                <li><a href="all-feature.php" class=" pl-5">About Feature</a></li>
              </ul>
            </li>
            <li id="service_hvr"><a href="javaScript:void(0)" ><i class="fas fa-cogs"></i> Service <i class="fas fa-angle-down float-right p-2 pr-3"></i></a>
              <ul class="service">
                <li><a href="all-service-header.php" class=" pl-5"> Service Header </a></li>
                <li><a href="all-service-details.php" class=" pl-5">Service Details</a></li>
              </ul>
            </li>
            <li><a href="all-count-down.php"><i class="fab fa-bandcamp"></i> Count Down</a></li>
            <li id="project_hvr"><a href="javaScript:void(0)" ><i class="fas fa-folder"></i> Project <i class="fas fa-angle-down float-right p-2 pr-3"></i></a>
              <ul class="project">
                <li><a href="all-project-header.php" class=" pl-5"> Project Header </a></li>
                <li><a href="all-project-details.php" class=" pl-5">Project Details</a></li>
              </ul>
            </li>
              <li><a href="all-team-member.php"><i class="fas fa-users"></i> Team Member</a></li>
              <li><a href="all-testimonial.php"><i class="fas fa-star"></i> Testimonial</a></li>
              <li><a href="all-blog.php"><i class="fas fa-blog"></i> Blog</a></li>
              <li><a href="all-brand.php"><i class="fas fa-blog"></i> Brand</a></li>
          <?php } ?>
            <?php if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){ ?>
            <li><a href="all-message.php"><i class="fas fa-comments"></i> Contact Message </a></li>
          <?php } ?>
            <li><a href="logout.php"><i class="fas fa-power-off"></i> Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-10">
        <!--		bread_cum part start here   -->
        <div class="row bread_cum">
          <div class=" col-12 bread_menu">
            <ul>
              <li><a href=""><i class="fas fa-home"></i> Home</a></li>
              <li><a href=""><i class="fas fa-angle-double-right"></i> Dashboard</a></li>
            </ul>
          </div>
        </div>
        <!--		bread_cum part end here  -->
        <!--	main_content_part start here   -->
        <div class="row">
          <div class="col-12">
