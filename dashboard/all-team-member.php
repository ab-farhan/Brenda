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
													<h5 class="d-inline-block">ALL TEAM MEMBER INFORMATION</h5>
												</div>
											</div>
											<div class="col-md-4 text-right">
												<a href="add-team-member.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ADD-TEAM-MEMBER</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover table-bordered table-striped table_data text-left">

													<thead class="thead-dark">
														<tr>
															<th scope="col">Team Member Name</th>
															<th scope="col">Team Member Title</th>
                              <th scope="col">Team Member Image</th>
															<th scope="col">Manage</th>
														</tr>
													</thead>
													<tbody>
                            <?php
                              $sel="SELECT * FROM team_member ORDER BY team_id";
                              $Q=mysqli_query($conn,$sel);
                              while($team=mysqli_fetch_assoc($Q)){
                             ?>
														<tr>
															<td><?=$team['team_name']?></td>
                              <td><?=$team['team_title']?></td>
                              <td> <img src="uploads/<?= $team["team_img"] ?>" alt="" class="image-thumbnail" style="max-height:80px;"> </td>
															<td>
																<a href="edit-team-member.php?te=<?=$team['team_id']?>"><i class="fas fa-pen-square"></i></a>
																<a href="delete-team-member.php?td=<?=$team['team_id']?>"><i class="fas fa-trash "></i></a>
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
