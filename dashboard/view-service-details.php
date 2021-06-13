<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$sdid=$_GET['sdv'];
$selsd="SELECT * FROM service_details  WHERE serd_id='$sdid'";
$Qsd=mysqli_query($conn,$selsd);
$datasd=mysqli_fetch_assoc($Qsd);
 ?>
							<div class="main_content_part">
								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW SERVICE DETAILS</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="all-service-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-SERVICE-DETAILS</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">
													<tr>
														<td>Service Name</td>
														<td>:</td>
														<td><?=$datasd['serd_name']?></td>
													</tr>
													<tr>
														<td>Service Details</td>
														<td>:</td>
														<td><?=$datasd['serd_details']?></td>
													</tr>
													<tr>
														<td>Service Image</td>
														<td>:</td>
														<td> <img src="uploads/<?=$datasd['serd_img']?>" alt="" style="max-height:200px;"> </td>
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
