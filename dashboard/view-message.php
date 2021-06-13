<?php
require_once('functions/function.php');
Needlogged();
$vid=$_GET['vm'];
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2 || $_SESSION['user_role_id']==3){
get_header();
get_sidebar();

$sel="SELECT * FROM contact_info  WHERE con_id='$vid'";
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
													<h5 class="d-inline-block">VIEW DATA</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">

												<a href="all-message.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-Message</a>

											</div>
										</div>
									</div>
									<div class="card-body">

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">

													<tr>
														<td>Name</td>
														<td>:</td>
														<td><?=$data['con_name']?></td>
													</tr>

													<tr>
														<td>Email</td>
														<td>:</td>
														<td><?=$data['con_email']?></td>
													</tr>
													<tr>
														<td>Message</td>
														<td>:</td>
														<td><?=$data['con_message']?></td>
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
