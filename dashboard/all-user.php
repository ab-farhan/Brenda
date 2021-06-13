<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2 || $_SESSION['user_role_id']==3 ){
get_header();
get_sidebar();
 ?>
							<div class="main_content_part">
								<div class="card text-center mb-3" >
									<div class="card-header">
										<div class="row">
											<div class="col-md-8">
												<div class="card_header_title text-left">
													<i class="fab fa-gg-circle"></i>
													<h5 class="d-inline-block">USERS DATA INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-user.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-USER</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Name</th>
															<th scope="col">Phone</th>
															<th scope="col">Email</th>
															<th scope="col">Username</th>
															<th scope="col">Role</th>
															<th scope="col">Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                            $limit=10;
                            if(isset($_GET['all-user'])){
                              $page=$_GET['all-user'];
                            }else {
                              $page=1;
                            }
                            $offset=($page-1) * $limit;
                              $sel="SELECT * FROM user_info NATURAL JOIN user_role ORDER BY user_id ASC LIMIT {$offset},{$limit}";
                              $Q=mysqli_query($conn,$sel);
                              while($data=mysqli_fetch_assoc($Q)){

                             ?>
														<tr>
															<td><?=$data['user_name']?></td>
															<td><?=$data['user_phone']?></td>
															<td><?=$data['user_email']?></td>
															<td><?=$data['user_username']?></td>
                              <td><?=$data['role_name']?></td>
                              <td>
                              <?php
                                if($data['user_img']!=""){
                               ?>
                               <img src="uploads/<?=$data['user_img']?>" alt="" style="max-height:50px;" class="img-thumbnail">
                             <?php }else{ ?>
                               <img src="images/profile.png" alt="" style="max-height:50px;" class="img-thumbnail">
                             <?php } ?>
                             </td>
															<td>
																<a href="view-user.php?v=<?=$data['user_id']?>"><i class="fas fa-plus-square "></i></a>
																<a href="edit-user.php?e=<?=$data['user_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-user.php?d=<?=$data['user_id']?>"><i class="fas fa-trash "></i></a>
															</td>
														</tr>
                            <?Php } ?>

													</tbody>


												</table>
											</div>

										</div>
									</div>
									<div class="card-footer text-muted">
                    <?php
                    $sel1="SELECT * FROM user_info";
                    $Q1=mysqli_query($conn,$sel1);
                    $data1=mysqli_num_rows($Q1);
                    $totalPage=ceil($data1 / $limit);
                     ?>
                    <nav aria-label="" class=" d-flex justify-content-center">
                      <ul class="pagination">

                        <?php
                        if($totalPage > 1){
                        if($page > 1){
                          echo '<li class="page-item">
                            <a class="page-link" href="all-user.php?all-user='.($page-1).'" tabindex="-1">Previous</a>
                          </li>';
                        }
                        for ($i=1; $i <= $totalPage ; $i++) {
                          if($i == $page){
                            $active= "active";
                          }else {
                            $active="";
                          }
                          echo '<li class="page-item '.$active.'">
                            <a class="page-link" href="all-user.php?all-user='.$i.'" >'.$i.'</a>
                          </li>';
                        }
                        if($totalPage > $page ){
                          echo '<li class="page-item">
                            <a class="page-link" href="all-user.php?all-user='.($page+1).'" >Next</a>
                          </li>';
                        }
                      }else {
                        echo "&nbsp;";
                      }
                        ?>

                      </ul>
                  </nav>
									</div>
								</div>
							</div>
<?php
get_footer();
}else {
  header('Location:index.php');
}
?>
