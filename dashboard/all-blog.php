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
													<h5 class="d-inline-block">ALL BLOG INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-blog.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-BLOG</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Blog Name</th>
															<th scope="col">Blog Creator Name</th>
															<th scope="col">Blog Details</th>
                              <th scope="col">Blog Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel_blog="SELECT * FROM blog ORDER BY blog_id DESC";
                              $Q_blog=mysqli_query($conn,$sel_blog);
                              while($blog=mysqli_fetch_assoc($Q_blog)){
                             ?>
														<tr>
															<td><?=substr($blog['blog_name'],0,20)?>...</td>
															<td><?=$blog['blog_creator_name']?></td>
															<td><?=substr($blog['blog_details'],0,50)?>...</td>
                              <td> <img src="uploads/<?= $blog["blog_img"] ?>" alt="" class="image-thumbnail" style="max-height:50px;"> </td>
															<td>
																<a href="view-blog.php?blv=<?=$blog['blog_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-blog.php?ble=<?=$blog['blog_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-blog.php?bld=<?=$blog['blog_id']?>"><i class="fas fa-trash "></i></a>
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
