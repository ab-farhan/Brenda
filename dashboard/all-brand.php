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
													<h5 class="d-inline-block">ALL BRAND INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-brand.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-BRAND</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">
													<thead class="thead-dark">
														<tr>
                              <th scope="col">Brand Name</th>
                              <th scope="col">Brand Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel_bra="SELECT * FROM brand ORDER BY brand_id DESC";
                              $Q_bra=mysqli_query($conn,$sel_bra);
                              while($brand=mysqli_fetch_assoc($Q_bra)){
                             ?>
														<tr>
                              <td> <?=$brand['brand_name']?> </td>
                              <td> <img src="uploads/<?= $brand["brand_img"] ?>" alt="" class="image-thumbnail" style="max-height:150px;"> </td>
															<td>
																<a href="delete-brand.php?fd=<?=$brand['brand_id']?>"><i class="fas fa-trash "></i></a>
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
