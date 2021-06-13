<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2 || $_SESSION['user_role_id']==3 ){
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
													<h5 class="d-inline-block">CONTACT MESSAGES</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">

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
															<th scope="col">Email</th>
															<th scope="col">Message</th>
															<th scope="col">Manage</th>

														</tr>
													</thead>
													<tbody>
                            <?php
                            $limit=20;
                            if(isset($_GET['all-contact'])){
                              $page=$_GET['all-contact'];
                            }else {
                              $page=1;
                            }
                            $offset=($page - 1) * $limit;

                              $sel="SELECT * FROM contact_info  ORDER BY con_id DESC LIMIT {$offset},{$limit}";
                              $Q=mysqli_query($conn,$sel);
                              while($data=mysqli_fetch_assoc($Q)){
                             ?>
														<tr>

															<td><?=$data['con_name']?></td>
															<td><?=$data['con_email']?></td>
															<td><?= substr($data['con_message'],0,20);?>...</td>

															<td>
																<a href="view-message.php?vm=<?=$data['con_id']?>" title="View Message" style="font-size:20px; color:#FABC3D;"><i class="fas fa-plus-square "></i></a>
																<a href="delete-message.php?dm=<?=$data['con_id']?>" title="Delete Message" style="font-size:20px; color:#DC143C;" class="pl-2"><i class="fas fa-trash "></i></a>
															</td>
														</tr>
                            <?Php } ?>

													</tbody>


												</table>
											</div>

										</div>
									</div>
									<div class="card-footer text-muted">

                    <nav aria-label="">
                      <ul class="pagination d-flex justify-content-center">
                        <?php
                        $sel1="SELECT * FROM contact_info";
                        $Q1=mysqli_query($conn,$sel1);
                        $rows=mysqli_num_rows($Q1);
                        $totalPage=ceil($rows / $limit);
                        if($totalPage > 1){
                        if($page>1){
                          echo '<li class="page-item">
                          <a class="page-link" href="all-message.php?all-contact='.($page-1).'">Previous</a>
                          </li>';
                        }

                        for ($i=1; $i<=$totalPage; $i++) {
                          if($i == $page){
                            $active="active";
                          }else {
                            $active="";
                          }
                          echo '<li class="page-item '.$active.'"><a class="page-link" href="all-message.php?all-contact='.$i.'">'.$i.'</a></li>';
                        }
                        if($totalPage > $page){
                          echo '<li class="page-item">
                          <a class="page-link" href="all-message.php?all-contact='.($page+1).'">Previous</a>
                          </li>';
                        }
                      }else {
                        echo '&nbsp;';
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
