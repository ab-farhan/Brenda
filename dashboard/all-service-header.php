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
													<h5 class="d-inline-block">ALL SERVICE HEADER INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-service-header.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-SERVICE-HEADER</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Service Title</th>
															<th scope="col">Service Sub Title</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sels="SELECT * FROM service ORDER BY ser_id DESC";
                              $Qs=mysqli_query($conn,$sels);
                              while($datas=mysqli_fetch_assoc($Qs)){
                             ?>
														<tr>
															<td><?=$datas['ser_title']?></td>
															<td><?=substr($datas['ser_subtitle'],0,80)?>...</td>

															<td>
																<a href="view-service-header.php?sv=<?=$datas['ser_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-service-header.php?se=<?=$datas['ser_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-service-header.php?sd=<?=$datas['ser_id']?>"><i class="fas fa-trash "></i></a>
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
