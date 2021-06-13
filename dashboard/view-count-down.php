<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$cdid=$_GET['cdv'];
$selcd="SELECT * FROM count_down WHERE count_id='$cdid'";
$Qcd=mysqli_query($conn,$selcd);
$count=mysqli_fetch_assoc($Qcd);
 ?>
							<div class="main_content_part">

								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW COUNT DOWN</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="all-count-down.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-COUNT-DOWN</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">
													<tr>
														<td>1st Count Name</td>
														<td>:</td>
														<td><?=$count['count_1st_name']?></td>
													</tr>

													<tr>
														<td>1st Count Value</td>
														<td>:</td>
														<td><?=$count['count_1st_value']?></td>
													</tr>
                          <tr>
														<td>2nd Count Name</td>
														<td>:</td>
														<td><?=$count['count_2nd_name']?></td>
													</tr>
                          <tr>
														<td>2nd Count Value</td>
														<td>:</td>
														<td><?=$count['count_2nd_value']?></td>
													</tr>
                          <tr>
														<td>3rd Count Name</td>
														<td>:</td>
														<td><?=$count['count_3rd_name']?></td>
													</tr>
                          <tr>
														<td>3rd Count Value</td>
														<td>:</td>
														<td><?=$count['count_3rd_value']?></td>
													</tr>
                          <tr>
														<td>4th Count Name</td>
														<td>:</td>
														<td><?=$count['count_4th_name']?></td>
													</tr>
                          <tr>
														<td>4th Count Value</td>
														<td>:</td>
														<td><?=$count['count_4th_value']?></td>
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
