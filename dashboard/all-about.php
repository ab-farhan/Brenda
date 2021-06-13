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
													<h5 class="d-inline-block">ALL ABOUT INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-about.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-ABOUT</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Title</th>
															<th scope="col">Sub Title</th>
															<th scope="col">About Details</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel="SELECT * FROM about ORDER BY about_id DESC";
                              $Q=mysqli_query($conn,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                             ?>
														<tr>
															<td><?=$data['about_title']?></td>
															<td><?=substr($data['about_subtitle'],0,20)?>...</td>
															<td><?=substr($data['about_details'],0,50)?>...</td>
															<td>
																<a href="view-about.php?av=<?=$data['about_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-about.php?ae=<?=$data['about_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-about.php?ad=<?=$data['about_id']?>"><i class="fas fa-trash "></i></a>
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
