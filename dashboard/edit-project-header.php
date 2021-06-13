<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$phid=$_GET['phe'];
$selph="SELECT * FROM project_header WHERE pro_id='$phid'";
$Qph=mysqli_query($conn,$selph);
$dataph=mysqli_fetch_assoc($Qph);
if(!empty($_POST)){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $subtitle=$_POST['subtitle'];
  $updateph="UPDATE project_header SET pro_title='$title', pro_subtitle='$subtitle' WHERE pro_id='$id'";
  if(mysqli_query($conn,$updateph)){
    echo "<h4 class='text-center text-success pt-3'>Successfully Update User Information</h4>";
    header('Location:view-project-header.php?phv='.$id);
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
														<h5 class="d-inline-block">EDIT PROJECT HEADER INFORMATION</h5>
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
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$dataph['pro_id']?>">
													<input type="text" class="form-control" id="" name="title" value="<?=$dataph['pro_title']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Project SubTitle :</label>
												<div class="col-sm-7">
                          <textarea name="subtitle" rows="3" class="form-control"><?=$dataph['pro_subtitle']?></textarea>
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
