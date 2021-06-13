<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5 ){
get_header();
get_sidebar();
 ?>
							<div class="main_content_part">
								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">ALL PROJECT DETAILS INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-project-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-PROJECT-DETAILS</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">
													<thead class="thead-dark">
														<tr>
															<th scope="col">Project Nmae</th>
															<th scope="col">Project Details</th>
															<th scope="col">Client Name</th>
															<th scope="col">Location</th>
															<th scope="col">Area</th>
															<th scope="col">Year</th>
															<th scope="col">Buject</th>
															<th scope="col">Archtect</th>
															<th scope="col">Sector</th>
															<th scope="col">Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel="SELECT * FROM project_details ORDER BY p_id DESC";
                              $Q=mysqli_query($conn,$sel);
                              while($project=mysqli_fetch_assoc($Q)){
                             ?>
														<tr>
															<td><?=substr($project['p_name'],0,10)?>...</td>
															<td><?=substr($project['p_details'],0,20)?>...</td>
															<td><?=substr($project['p_client'],0,20)?>...</td>
															<td><?=substr($project['p_location'],0,20)?>...</td>
															<td><?=substr($project['p_area'],0,20)?>...</td>
															<td><?=substr($project['p_year'],0,10)?>...</td>
															<td><?=substr($project['p_buject'],0,8)?>...</td>
															<td><?=substr($project['p_architect'],0,20)?>...</td>
															<td><?=substr($project['p_sector'],0,10)?>...</td>
															<td><img src="uploads/<?=$project['p_img']?>" alt=""style="max-height:40px; max-width:40px;" class="img-thumbnail"></td>

															<td>
																<a href="view-project-details.php?pdv=<?=$project['p_id']?>"><i class="fas fa-plus-square"></i></a>
																<a href="edit-project-details.php?pde=<?=$project['p_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-project-details.php?pdd=<?=$project['p_id']?>"><i class="fas fa-trash "></i></a>
															</td>
														</tr>
                            <?Php } ?>
													</tbody>
												</table>
											</div>
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
