<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$pdid=$_GET['pde'];
$selpd="SELECT * FROM project_details WHERE p_id='$pdid'";
$Qpd=mysqli_query($conn,$selpd);
$project=mysqli_fetch_assoc($Qpd);
if(!empty($_POST)){
  $id=$_POST['id'];
  $p_name=$_POST['p_name'];
  $p_details=$_POST['p_details'];
  $p_client=$_POST['p_client'];
  $p_location=$_POST['p_location'];
  $p_area=$_POST['p_area'];
  $p_year=$_POST['p_year'];
  $p_buject=$_POST['p_buject'];
  $p_architect=$_POST['p_architect'];
  $p_sector=$_POST['p_sector'];
  $image=$_FILES['image'];
  $imageName=$project['p_img'];
  if($image['name']!=''){
    $imageName='Project-'.time()."-".rand(100,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
  }
  $updateph="UPDATE project_details SET p_name='$p_name',p_details='$p_details',p_client='$p_client',p_location='$p_location',p_area='$p_area',p_year='$p_year',p_buject='$p_buject',p_architect='$p_architect',p_sector='$p_sector',p_img='$imageName' WHERE p_id='$id'";
  if(mysqli_query($conn,$updateph)){
    move_uploaded_file($image['tmp_name'],"uploads/".$imageName);
    echo "<h4 class='text-center text-success pt-3'>Successfully Update User Information</h4>";
    header('Location:view-project-details.php?pdv='.$id);
  }else {
    echo "<h4 class='text-center text-danger pt-3'>Opps!! User Upadate Failed.</h4>";
  }
}
 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data" id="user_from">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">EDIT PROJECT DETAILS INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-project-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-PROJECT-DETAILS</a>
												</div>
											</div>
										</div>
										<div class="card-body">
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Name :</label>
                        <div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$project['p_id']?>">
                          <input type="text" class="form-control" id="" name="p_name" value="<?=$project['p_name']?>">
                        </div>
                      </div>

                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Client :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_client" value="<?=$project['p_client']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Location :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_location" value="<?=$project['p_location']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Area :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_area" value="<?=$project['p_area']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Year :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_year" value="<?=$project['p_year']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Buject :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_buject" value="<?=$project['p_buject']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Architect :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_architect" value="<?=$project['p_architect']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Sector :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="p_sector" value="<?=$project['p_sector']?>">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Details :</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" id="" rows="8" name="p_details"><?=$project['p_details']?></textarea>
                        </div>
                      </div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Project Image :</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control" id="" name="image">
                        </div>
                      </div>

										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">UPDATE</button>
										</div>
									</div>
								</form>
							</div>
<?php
get_footer();
}else {
  header('Location:index.php');
}
 ?>
