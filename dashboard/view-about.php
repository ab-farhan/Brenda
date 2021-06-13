<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2 || $_SESSION['user_role_id']==3){
get_header();
get_sidebar();
$aid=$_GET['av'];
$sel="SELECT * FROM about  WHERE about_id='$aid'";
$Q=mysqli_query($conn,$sel);
$data=mysqli_fetch_assoc($Q);
 ?>
							<div class="main_content_part">

								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW ABOUT</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">

												<a href="all-about.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-ABOUT</a>

											</div>
										</div>
									</div>
									<div class="card-body">

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">

													<tr>
														<td>Title</td>
														<td>:</td>
														<td><?=$data['about_title']?></td>
													</tr>

													<tr>
														<td>Sub Title</td>
														<td>:</td>
														<td><?=$data['about_subtitle']?></td>
													</tr>
													<tr>
														<td>About Details</td>
														<td>:</td>
														<td><?=$data['about_details']?></td>
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
