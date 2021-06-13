<?php
require_once('functions/function.php');
Needlogged();
$vid=$_GET['v'];
if($_SESSION['user_id']==$vid || $_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2 || $_SESSION['user_role_id']==3){
get_header();
get_sidebar();

$sel="SELECT * FROM user_info NATURAL JOIN user_role WHERE user_id='$vid'";
$Q=mysqli_query($conn,$sel);
$data=mysqli_fetch_assoc($Q);
 ?>
							<div class="main_content_part">

								<div class="card text-center">
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">VIEW DATA</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
                        <?php if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2 ||$_SESSION['user_role_id']==3){ ?>
												<a href="all-user.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-USER</a>
                      <?php } ?>
											</div>
										</div>
									</div>
									<div class="card-body">

										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<table class="table table-hover table-bordered table-striped viwe_table">

													<tr>
														<td>Name</td>
														<td>:</td>
														<td><?=$data['user_name']?></td>

													</tr>
													<tr>
														<td>Phone</td>
														<td>:</td>
														<td><?=$data['user_phone']?></td>
													</tr>
													<tr>
														<td>Email</td>
														<td>:</td>
														<td><?=$data['user_email']?></td>
													</tr>
													<tr>
														<td>Username</td>
														<td>:</td>
														<td><?=$data['user_username']?></td>
													</tr>
                          <tr>
														<td>User Role</td>
														<td>:</td>
														<td><?=$data['role_name']?></td>
													</tr>
                          <tr>
														<td>User Image</td>
														<td>:</td>
														<td>
                              <?php
                                if($data['user_img']!=""){
                               ?>
                               <img src="uploads/<?=$data['user_img']?>" alt="" class="img-thumbnail" style="max-height:200px;">
                             <?php }else{ ?>
                               <img src="images/profile.png" alt="" class="img-thumbnail" style="max-height:200px;">
                               <?php } ?>
                            </td>
													</tr>

												</table>
											</div>
											<div class="col-md-2"></div>
										</div>
									</div>
									<div class="card-footer text-muted">
										<a href="edit-user.php?e=<?=$data['user_id']?>" class="btn btn-sm btn-dark submit_btn">EDIT</a>
									</div>
								</div>
							</div>
<?php
 get_footer();
}else {
  header('Location:index.php');
}
 ?>
