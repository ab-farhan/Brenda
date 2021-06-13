<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

 if(!empty($_POST)){
   $name=$_POST['name'];
   $details=$_POST['details'];
   $c_name=$_POST['c_name'];
   $date=$_POST['date'];
   $image=$_FILES['image'];
   $imageName="";
   if(!empty($name)){
     if(!empty($details)){
                 if($image['name']!=""){
                     $imageName="Blog-".time()."-".rand(1000,10000000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
                   }else {
                     echo "<h4 class='text-center text-warning pt-3'>Upload Your Image Letter</h4>";
                   }
                     $insert="INSERT INTO blog(blog_name,blog_details,blog_creator_name,blog_date,blog_img)
                   VALUES('$name','$details','$c_name','$date','$imageName')";
                   if(mysqli_query($conn,$insert)){
                     move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed Include Blog</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
                   }


       }else{
         echo "<h4 class='text-center text-danger pt-3'>Please enter Blog Details</h4>";
       }
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please enter Blog Name </h4>";
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
														<h5 class="d-inline-block">ADD BLOG</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-blog.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-BLOG</a>
												</div>
											</div>
										</div>
										<div class="card-body">

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Blog Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right"> Blog  Details :</label>
												<div class="col-sm-7">
                          <textarea name="details" rows="6" class="form-control"></textarea>
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right"> Blog  Creator Name :</label>
												<div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="c_name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right"> Blog  Creating Date :</label>
												<div class="col-sm-7">
                          <input type="text" class="form-control" id="" name="date">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Blog Image :</label>
												<div class="col-sm-7">
													<input type="file" class="form-control" id="" name="image">
												</div>
											</div>

										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD BLOG</button>
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
