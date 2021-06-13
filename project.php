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
                        <h1>Project</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.html">Home</a></li>
                            <li>Project</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="project-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-item-wrapper ">
                        <div class="row">
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

                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row space__top--50">
                <div class="col">
                    <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Next</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>
