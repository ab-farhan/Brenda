<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
function validation($dataa){
  $dataa=trim($dataa);
  $dataa=stripslashes($dataa);
  $dataa=htmlspecialchars($dataa);
  return $dataa;
}
 if(!empty($_POST)){
   $title=validation($_POST['title']);
   $subtitle=validation($_POST['subtitle']);

   if(!empty($title)){
     if(!empty($subtitle)){
                     $insert="INSERT INTO project_header(pro_title,pro_subtitle)
                   VALUES('$title','$subtitle')";
                   if(mysqli_query($conn,$insert)){
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Including Project Header Information</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }
       }else{
         echo "<h4 class='text-center text-danger pt-3'>Please enter Sub title</h4>";
       }
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please enter Title </h4>";
     }
 }
 ?>
							<div class="main_content_part">
								<form action="" method="post">
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
													<a href="all-project-header.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-PROJECT-HEADER</a>
												</div>
											</div>
										</div>
										<div class="card-body">

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Title :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="title">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project Sub-Title :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="subtitle">
												</div>
											</div>
										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD PROJECT HEADER</button>
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
