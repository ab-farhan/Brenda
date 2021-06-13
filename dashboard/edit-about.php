<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$aid=$_GET['ae'];
$sel="SELECT * FROM about WHERE about_id='$aid'";
$Q=mysqli_query($conn,$sel);
$data=mysqli_fetch_assoc($Q);
if(!empty($_POST)){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $subtitle=$_POST['subtitle'];
  $details=$_POST['details'];
  $update="UPDATE about SET about_title='$title', about_subtitle='$subtitle', about_details='$details' WHERE about_id='$id'";
  if(mysqli_query($conn,$update)){
    echo "<h4 class='text-center text-success pt-3'>Successfully Update User Information</h4>";
    header('Location:view-about.php?av='.$id);
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
														<h5 class="d-inline-block">EDIT ABOUT INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-about.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-ABOUT</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">About Title :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$data['about_id']?>">
													<input type="text" class="form-control" id="" name="title" value="<?=$data['about_title']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">About SubTitle :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="subtitle" value="<?=$data['about_subtitle']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">About Details :</label>
												<div class="col-sm-7">
													<textarea type="text" class="form-control" id="" name="details" rows="3"> <?=$data['about_details']?></textarea>
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
