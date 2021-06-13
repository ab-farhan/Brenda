<?php
require_once('functions/function.php');
get_header();
$pid=$_GET['project'];
$sel_project="SELECT * FROM project_details WHERE p_id='$pid'";
$Q_pd=mysqli_query($conn,$sel_project);
$project=mysqli_fetch_assoc($Q_pd);
 ?>
    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Project Details</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.php">Home</a></li>
                            <li>Project Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  project details area ====================-->
    <div class="project-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-12 space__bottom--40">
                    <div class="project-image"><img src="dashboard/uploads/<?=$project['p_img']?>" class="img-fluid" alt=""></div>
                </div>

                <div class="col-lg-4 col-12 space__bottom--30">
                    <div class="project-information">
                        <h4 class="space__bottom--15">Project Information</h4>
                        <ul>
                            <li><strong>Client:</strong> <a href="#"><?=$project['p_client']?></a></li>
                            <li><strong>Location:</strong> <?=$project['p_location']?></li>
                            <li><strong>Area(sf):</strong> <?=$project['p_area']?></li>
                            <li><strong>Year:</strong> <?=$project['p_year']?></li>
                            <li><strong>Budget:</strong> <?=$project['p_buject']?></li>
                            <li><strong>Architect:</strong> <?=$project['p_architect']?></li>
                            <li><strong>Sector:</strong> <a href="project.php"><?=$project['p_sector']?></a>, <a href="project.php">Transport</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12 space__bottom--30">
                    <div class="project-details">
                        <h3 class="space__bottom--15"><?=$project['p_name']?></h3>
                        <p><?=$project['p_details']?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-5 image-popup">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 space__top--10">
                            <a href="assets/img/projects/project1-m.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project1-m.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 space__top--10">
                            <a href="assets/img/projects/project2-m.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project2-m.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 space__top--10">
                            <a href="assets/img/projects/project3-m.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project3-m.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 space__top--10">
                            <a href="assets/img/projects/project4-m.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project4-m.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 space__top--10">
                            <a href="assets/img/projects/project5-m.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project5-m.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 space__top--10">
                            <a href="assets/img/projects/project6-m.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project6-m.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of project details area  ====================-->
<?php
get_footer();
 ?>
