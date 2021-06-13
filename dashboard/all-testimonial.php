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
													<h5 class="d-inline-block">ALL TESTIMONIAL INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-testimonial.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-TESTIMONIAL</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Testimonial Title</th>
															<th scope="col">Testimonial Sub-Title</th>
															<th scope="col">Writer Name</th>
															<th scope="col">Writer Designation</th>
                              <th scope="col">Testimonial</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel_tes="SELECT * FROM testimonial ORDER BY tes_id DESC";
                              $Q_tes=mysqli_query($conn,$sel_tes);
                              while($tes=mysqli_fetch_assoc($Q_tes)){
                             ?>
														<tr>
															<td><?=$tes['tes_title']?>...</td>
															<td><?=substr($tes['tes_subtitle'],0,20)?>...</td>
															<td><?=$tes['tes_name']?></td>
															<td><?=substr($tes['tes_designation'],0,15)?>...</td>
															<td><?=substr($tes['tes_details'],0,40)?>...</td>
															<td>
																<a href="view-testimonial.php?tesv=<?=$tes['tes_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="delete-testimonial.php?tesd=<?=$tes['tes_id']?>"><i class="fas fa-trash "></i></a>
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
