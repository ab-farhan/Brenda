<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$fid=$_GET['fv'];
$self="SELECT * FROM about_feature  WHERE feat_id='$fid'";
$Qf=mysqli_query($conn,$self);
$data=mysqli_fetch_assoc($Qf);
 ?>
							<div class="main_content_part">

								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW FEATURE</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">

												<a href="all-feature.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-FEATURE</a>

											</div>
										</div>
									</div>
									<div class="card-body">

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">

													<tr>
														<td>Feature Title</td>
														<td>:</td>
														<td><?=$data['feat_title']?></td>
													</tr>

													<tr>
														<td>Feature Details</td>
														<td>:</td>
														<td><?=$data['feat_details']?></td>
													</tr>
													<tr>
														<td>Feature Image</td>
														<td>:</td>
														<td> <img src="uploads/<?=$data['feat_img']?>" alt="" style="max-height:200px;"> </td>
													</tr>


												</table>
											</div>
											<div class="col-md-2"></div>
										</div>
									</div>
									<div class="card-footer text-muted">
										&nbsp;
									</div>
								</div>
							</div>
<?php
 get_footer();
}else {
  header('Location:index.php');
}
 ?>
