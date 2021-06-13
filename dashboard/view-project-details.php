<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();
$pdid=$_GET['pdv'];
$selpd="SELECT * FROM project_details  WHERE p_id='$pdid'";
$Qpd=mysqli_query($conn,$selpd);
$project=mysqli_fetch_assoc($Qpd);
 ?>
							<div class="main_content_part">
								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW PROJECT DETAILS </h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="all-project-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-PROJECT-DETAILS</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-1"></div>
											<div class="col-md-10">
												<table class="table table-hover table-bordered table-striped viwe_table">
													<tr>
														<td>Project Name</td>
														<td>:</td>
														<td><?=$project['p_name']?></td>
													</tr>

													<tr>
														<td>Client Name</td>
														<td>:</td>
														<td><?=$project['p_client']?></td>
													</tr>
                          <tr>
														<td>Location</td>
														<td>:</td>
														<td><?=$project['p_location']?></td>
													</tr>
                          <tr>
														<td>Area/Country</td>
														<td>:</td>
														<td><?=$project['p_area']?></td>
													</tr>
                          <tr>
														<td>Project Year</td>
														<td>:</td>
														<td><?=$project['p_year']?></td>
													</tr>
                          <tr>
														<td>Project Buject</td>
														<td>:</td>
														<td><?=$project['p_buject']?></td>
													</tr>
                          <tr>
														<td>Archtect Name</td>
														<td>:</td>
														<td><?=$project['p_architect']?></td>
													</tr>
                          <tr>
														<td>Archtect Name</td>
														<td>:</td>
														<td><?=$project['p_architect']?></td>
													</tr>
                          <tr>
														<td>Project Sector</td>
														<td>:</td>
														<td><?=$project['p_sector']?></td>
													</tr>
                          <tr>
														<td>Project Image</td>
														<td>:</td>
														<td>
                              <img src="uploads/<?=$project['p_img']?>" alt="" class="img-thumbnail" style="max-width:350px;max-height:250px;">
                            </td>
													</tr>
                          <tr>
														<td>Project Details</td>
														<td>:</td>
														<td>
                            <textarea name="name" rows="13" class="form-control"><?=$project['p_details']?></textarea>
                            </td>
													</tr>

												</table>
											</div>
                      <div class="col-md-1"></div>
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
