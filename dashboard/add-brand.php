<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

 if(!empty($_POST)){
   $name=$_POST['name'];
   $image=$_FILES['image'];
   $imageName="";

   if(!empty($name)){
     if($image['name']!=""){
         $imageName="Brand-".time()."-".rand(1000,10000000).".".pathinfo($image['name'],PATHINFO_EXTENSION);

                     $insert="INSERT INTO brand(brand_name,brand_img)VALUES('$name','$imageName')";
                   if(mysqli_query($conn,$insert)){
                     move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Include Brand Logo</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }

     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please enter Image. </h4>";
     }
   }else {
     echo "<h4 class='text-center text-danger pt-3'>Please enter Brand Name. </h4>";
   }
 }
 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data" >
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">ADD BRAND</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-brand.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-BRAND</a>
												</div>
											</div>
										</div>
										<div class="card-body">
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">Brand Name :</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="name">
                        </div>
                      </div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Brand Image :</label>
												<div class="col-sm-7">
													<input type="file" class="form-control" id="" name="image">
												</div>
											</div>


										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD BRAND</button>
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
