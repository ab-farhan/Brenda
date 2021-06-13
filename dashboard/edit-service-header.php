<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$sid=$_GET['se'];
$sels="SELECT * FROM service WHERE ser_id='$sid'";
$Qs=mysqli_query($conn,$sels);
$datas=mysqli_fetch_assoc($Qs);
if(!empty($_POST)){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $subtitle=$_POST['subtitle'];
  $updates="UPDATE service SET ser_title='$title', ser_subtitle='$subtitle' WHERE ser_id='$id'";
  if(mysqli_query($conn,$updates)){
    echo "<h4 class='text-center text-success pt-3'>Successfully Update User Information</h4>";
    header('Location:view-service-header.php?sv='.$id);
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
														<h5 class="d-inline-block">EDIT SERVICE HEADER INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-service-header.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-SERVICE-HEADER</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Service Title :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$datas['ser_id']?>">
													<input type="text" class="form-control" id="" name="title" value="<?=$datas['ser_title']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">service SubTitle :</label>
												<div class="col-sm-7">
                          <textarea name="subtitle" rows="3" class="form-control"><?=$datas['ser_subtitle']?></textarea>
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
