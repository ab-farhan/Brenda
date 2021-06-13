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
													<h5 class="d-inline-block">ALL PROJECT HEADER INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-project-header.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-PROJECT-HEADER</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">
													<thead class="thead-dark">
														<tr>
															<th scope="col">Project Title</th>
															<th scope="col">Project Sub Title</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel="SELECT * FROM project_header ORDER BY pro_id DESC";
                              $Q=mysqli_query($conn,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                             ?>
														<tr>
															<td><?=$data['pro_title']?></td>
															<td><?=substr($data['pro_subtitle'],0,80)?>...</td>

															<td>
																<a href="view-project-header.php?phv=<?=$data['pro_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-project-header.php?phe=<?=$data['pro_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-project-header.php?phd=<?=$data['pro_id']?>"><i class="fas fa-trash "></i></a>
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
