<?php
require_once('functions/function.php');
Needlogged();
$fid=$_GET['fe'];
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

$self="SELECT * FROM about_feature WHERE feat_id='$fid'";
$Qf=mysqli_query($conn,$self);
$dataf=mysqli_fetch_assoc($Qf);
if(!empty($_POST)){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $details=$_POST['details'];
  $image=$_FILES['image'];
  $imageName=$dataf['feat_img'];
  if($image['name']!=""){
    $imageName="user-".time()."-".rand(100,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

  $updatef="UPDATE about_feature SET feat_title='$title',feat_details='$details',feat_img='$imageName' WHERE feat_id='$id'";
  if(mysqli_query($conn,$updatef)){
    move_uploaded_file($image['tmp_name'],"uploads/".$imageName);
    echo "<h4 class='text-center text-success pt-3'>Successfully Update Feature Information</h4>";
    header('Location:view-feature.php?fv='.$id);
  }else {
    echo "<h4 class='text-center text-danger pt-3'>Opps!! Upadate Failed.</h4>";
  }
}

 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data" id="">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">EDIT FEATURE INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-feature.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-FEATURE</a>

												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Feature Title :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$dataf['feat_id']?>">
													<input type="text" class="form-control" id="" name="title" value="<?=$dataf['feat_title']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Feature Details :</label>
												<div class="col-sm-7">

                          <textarea name="details" rows="3" class="form-control"><?=$dataf['feat_details']?></textarea>
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Feature Image :</label>
												<div class="col-sm-4">
													<input type="file" class="form-control" id="" name="image">
												</div>
                        <div class="col-sm-3">
                           <img src="uploads/<?=$dataf['feat_img'];?>" alt="" style="max-height:200px;">
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
