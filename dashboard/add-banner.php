<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
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
   $btntext=validation($_POST['btntxt']);
   $btnurl=validation($_POST['btnurl']);
   $image=$_FILES['image'];
   $imageName="";
   if(!empty($title)){
     if(!empty($subtitle)){
       if(!empty($btntext)){
         if(!empty($btnurl)){

                 if($image['name']!=""){
                     $imageName="banner-".time()."-".rand(1000,10000000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
                   }else {
                     echo "<h4 class='text-center text-warning pt-3'>Upload Your Image Letter</h4>";
                   }
                     $insert="INSERT INTO banner(ban_title,ban_subtitle,ban_btntext,ban_btnurl,ban_img)
                   VALUES('$title','$subtitle','$btntext','$btnurl','$imageName')";
                   if(mysqli_query($conn,$insert)){
                     move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Include a Banner</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }



           }else {
             echo "<h4 class='text-center text-danger pt-3'>Please enter Button Url</h4>";
           }
         }else {
           echo "<h4 class='text-center text-danger pt-3'>Please enter Button text</h4>";
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
								<form action="" method="post" enctype="multipart/form-data" id="user_from">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">ADD BANNER</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-banner.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-BANNER</a>
												</div>
											</div>
										</div>
										<div class="card-body">

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Title :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="title">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Sub-Title :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="subtitle">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Button-Text :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="btntxt">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Button-Url :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="btnurl">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Image :</label>
												<div class="col-sm-7">
													<input type="file" class="form-control" id="" name="image">
												</div>
											</div>

										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD BANNER</button>
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
