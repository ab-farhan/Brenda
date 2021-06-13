<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$tesid=$_GET['tesv'];
$sel_tes="SELECT * FROM testimonial  WHERE tes_id='$tesid'";
$Q_tes=mysqli_query($conn,$sel_tes);
$tes=mysqli_fetch_assoc($Q_tes);
 ?>
							<div class="main_content_part">
								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW Testimonial</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="all-testimonial.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-Testimonial</a>
											</div>
										</div>
									</div>
									<div class="card-body">

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">

													<tr>
														<td>Writer Name</td>
														<td>:</td>
														<td><?=$tes['tes_name']?></td>
													</tr>

													<tr>
														<td>Writer Designation</td>
														<td>:</td>
														<td><?=$tes['tes_designation']?></td>
													</tr>

													<tr>
														<td>Testimonial Details</td>
														<td>:</td>
														<td> <textarea class="form-control" rows="5"> <?=$tes['tes_details']?> </textarea> </td>
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
