<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$phid=$_GET['phv'];
$selph="SELECT * FROM project_header  WHERE pro_id='$phid'";
$Qph=mysqli_query($conn,$selph);
$dataph=mysqli_fetch_assoc($Qph);
 ?>
							<div class="main_content_part">

								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW PROJECT HEADER</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="all-project-header.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-PROJECT-HEADER</a>
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
														<td><?=$dataph['pro_title']?></td>
													</tr>

													<tr>
														<td>Sub Title</td>
														<td>:</td>
														<td><?=$dataph['pro_subtitle']?></td>
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
