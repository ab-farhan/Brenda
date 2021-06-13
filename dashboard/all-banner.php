<?php
require_once('functions/function.php');
Needlogged();

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
													<h5 class="d-inline-block">ALL BANNER INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-banner.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-BANNER</a>
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
															<th scope="col">Button Text</th>
															<th scope="col">Button Url</th>
															<th scope="col">Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel="SELECT * FROM banner ORDER BY ban_id DESC";
                              $Q=mysqli_query($conn,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                             ?>
														<tr>
															<td><?=$data['ban_title']?></td>
															<td><?=substr($data['ban_subtitle'],0,20)?>...</td>
															<td><?=$data['ban_btntext']?></td>
															<td><?=$data['ban_btnurl']?></td>
                              <td>
                               <img src="uploads/<?=$data['ban_img']?>" alt="" style="max-height:50px;" class="img-thumbnail">
                             </td>
															<td>
																<a href="view-banner.php?b=<?=$data['ban_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="delete-banner.php?b=<?=$data['ban_id']?>"><i class="fas fa-trash "></i></a>
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

?>
