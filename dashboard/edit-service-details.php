<?php
require_once('functions/function.php');
Needlogged();
$sdid=$_GET['sde'];
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

$selsd="SELECT * FROM service_details WHERE serd_id='$sdid'";
$Qsd=mysqli_query($conn,$selsd);
$datasd=mysqli_fetch_assoc($Qsd);
if(!empty($_POST)){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $details=$_POST['details'];
  $image=$_FILES['image'];
  $imageName=$datasd['serd_img'];
  if($image['name']!=""){
    $imageName="service-details-".time()."-".rand(100,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

  $updatesd="UPDATE service_details SET serd_name='$name',serd_details='$details',serd_img='$imageName' WHERE serd_id='$id'";
  if(mysqli_query($conn,$updatesd)){
    move_uploaded_file($image['tmp_name'],"uploads/".$imageName);
    echo "<h4 class='text-center text-success pt-3'>Successfully Update Feature Information</h4>";
    header('Location:view-service-details.php?sdv='.$id);
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
														<h5 class="d-inline-block">EDIT SERVICE DETAILS INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-service-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-SERVICE-DETAILS</a>

												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Service Name :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$datasd['serd_id']?>">
													<input type="text" class="form-control" id="" name="name" value="<?=$datasd['serd_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Service Details :</label>
												<div class="col-sm-7">

                          <textarea name="details" rows="5" class="form-control"><?=$datasd['serd_details']?></textarea>
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Service Image :</label>
												<div class="col-sm-4">
													<input type="file" class="form-control" id="" name="image">
												</div>
                        <div class="col-sm-3">
                           <img src="uploads/<?=$datasd['serd_img'];?>" alt="" style="max-height:200px;">
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
