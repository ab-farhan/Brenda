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
													<h5 class="d-inline-block">ALL COUNT-DOWN INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-count-down.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-COUNT-DOWN</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">
													<thead class="thead-dark">
														<tr>
															<th scope="col">1st Name</th>
															<th scope="col">1s Value</th>
                              <th scope="col">2nd Name</th>
                              <th scope="col">2nd Value</th>
                              <th scope="col">3rd Name</th>
                              <th scope="col">3rd Value</th>
                              <th scope="col">4th Name</th>
                              <th scope="col">4th Value</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel_cd="SELECT * FROM count_down ORDER BY count_id DESC";
                              $Q_cd=mysqli_query($conn,$sel_cd);
                              while($count=mysqli_fetch_assoc($Q_cd)){
                             ?>
														<tr>
															<td><?=$count['count_1st_name']?></td>
                              <td><?=$count['count_1st_value']?></td>
															<td><?=$count['count_2nd_name']?></td>
                              <td><?=$count['count_2nd_value']?></td>
															<td><?=$count['count_3rd_name']?></td>
                              <td><?=$count['count_3rd_value']?></td>
															<td><?=$count['count_4th_name']?></td>
															<td><?=$count['count_4th_value']?></td>

															<td>
																<a href="view-count-down.php?cdv=<?=$count['count_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-count-down.php?cde=<?=$count['count_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-count-down.php?cdd=<?=$count['count_id']?>"><i class="fas fa-trash "></i></a>
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
