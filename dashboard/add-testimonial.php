<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

 if(!empty($_POST)){
   $title=$_POST['title'];
   $subtitle=$_POST['subtitle'];
   $name=$_POST['name'];
   $designation=$_POST['designation'];
   $details=$_POST['details'];
   if(!empty($name)){
     if(!empty($details)){
                     $insert="INSERT INTO testimonial(tes_title,tes_subtitle,tes_name,tes_details,tes_designation)
                   VALUES('$title','$subtitle','$name','$details','$designation')";
                   if(mysqli_query($conn,$insert)){
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Include Testimonial.</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }
       }else{
         echo "<h4 class='text-center text-danger pt-3'>Please enter Details.</h4>";
       }
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please enter Writer Name. </h4>";
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
														<h5 class="d-inline-block">ADD TESTIMONIAL</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-testimonial.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-TESTIMONIAL</a>
												</div>
											</div>
										</div>
										<div class="card-body">
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Testimonial Title :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="title">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Testimonial Sub-Title :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="subtitle">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Writer Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Writer Designation :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="designation">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Testimonial :</label>
												<div class="col-sm-7">
                          <textarea name="details" type="text" rows="4" class="form-control"></textarea>
												</div>
											</div>

										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD TESTIMONIAL</button>
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
