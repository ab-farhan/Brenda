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
													<h5 class="d-inline-block">ALL SERVICE DETAILS INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-service-details.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-SERVICE DETAILS</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Service Name</th>
															<th scope="col">Service Details</th>
                              <th scope="col">Service Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $selsd="SELECT * FROM service_details ORDER BY serd_id ASC";
                              $Qsd=mysqli_query($conn,$selsd);
                              while($datasd=mysqli_fetch_assoc($Qsd)){
                             ?>
														<tr>
															<td><?=$datasd['serd_name']?></td>
															<td><?=substr($datasd['serd_details'],0,80)?>...</td>
                              <td> <img src="uploads/<?= $datasd["serd_img"] ?>" alt="" class="image-thumbnail" style="max-height:50px;"> </td>
															<td>
																<a href="view-service-details.php?sdv=<?=$datasd['serd_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-service-details.php?sde=<?=$datasd['serd_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-service-details.php?sdd=<?=$datasd['serd_id']?>"><i class="fas fa-trash "></i></a>
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
