<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

 if(!empty($_POST)){
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
   $imageName='';
   if($image['name']!=''){
     $imageName='Project-'.time()."-".rand(100,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   }

   if(!empty($p_name)){
     if(!empty($p_details)){
                     $insert="INSERT INTO project_details(p_name,p_details,p_client,p_location,p_area,p_year,p_buject,p_architect,p_sector,p_img)
                   VALUES('$p_name','$p_details','$p_client','$p_location','$p_area','$p_year','$p_buject','$p_architect','$p_sector','$imageName')";
                   if(mysqli_query($conn,$insert)){
                     move_uploaded_file($image['tmp_name'],"uploads/".$imageName);
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Including Project Details Information</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }
       }else{
         echo "<h4 class='text-center text-danger pt-3'>Please Enter Project Details</h4>";
       }
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please Enter Project Name </h4>";
     }
 }
 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">ADD PROJECT HEADER</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-project-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-PROJECT-HEADER</a>
												</div>
											</div>
										</div>
										<div class="card-body">

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_name">
												</div>
											</div>

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Client :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_client">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Location :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_location">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Area :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_area">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Year :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_year">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Buject :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_buject">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Architect :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_architect">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Sector :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_sector">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Details :</label>
												<div class="col-sm-7">
													<textarea class="form-control" id="" rows="8" name="p_details"></textarea>
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
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD PROJECT DETAILS</button>
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
