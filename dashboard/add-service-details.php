<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

 if(!empty($_POST)){
   $name=$_POST['name'];
   $details=$_POST['details'];
   $image=$_FILES['image'];
   $imageName="";
   if(!empty($name)){
     if(!empty($details)){


                 if($image['name']!=""){
                     $imageName="Service-".time()."-".rand(1000,10000000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
                   }else {
                     echo "<h4 class='text-center text-warning pt-3'>Upload Your Image Letter</h4>";
                   }
                     $insertsd="INSERT INTO service_details(serd_name,serd_details,serd_img)
                   VALUES('$name','$details','$imageName')";
                   if(mysqli_query($conn,$insertsd)){
                     move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Include Service Details</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }


       }else{
         echo "<h4 class='text-center text-danger pt-3'>Please enter Details</h4>";
       }
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please enter Name </h4>";
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
														<h5 class="d-inline-block">ADD SERVICE</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-service-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-Service-Details</a>
												</div>
											</div>
										</div>
										<div class="card-body">

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Service Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right"> Service Details :</label>
												<div class="col-sm-7">
                          <textarea name="details" rows="5" class="form-control"></textarea>
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Service Image :</label>
												<div class="col-sm-7">
													<input type="file" class="form-control" id="" name="image">
												</div>
											</div>

										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD SERVICE</button>
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
