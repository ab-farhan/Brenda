<?php
require_once('functions/function.php');
Needlogged();

if($_SESSION['user_role_id']!=5){
$tid=$_GET['te'];
get_header();
get_sidebar();

$sel_team="SELECT * FROM team_member WHERE team_id='$tid'";
$Q_team=mysqli_query($conn,$sel_team);
$team=mysqli_fetch_assoc($Q_team);
if(!empty($_POST)){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $title=$_POST['title'];
  $image=$_FILES['image'];
  $imageName=$team['team_img'];
  if($image['name']!=""){
    $imageName="Team-Member-".time()."-".rand(100,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

  $update_team="UPDATE team_member SET team_name='$name',team_title='$title',team_img='$imageName' WHERE team_id='$id'";
  if(mysqli_query($conn,$update_team)){
    move_uploaded_file($image['tmp_name'],"uploads/".$imageName);
    echo "<h4 class='text-center text-success pt-3'>Successfully Update Team Member Information</h4>";
    header('Location:all-team-member.php');
  }else {
    echo "<h4 class='text-center text-danger pt-3'>Opps!! Upadate Failed.</h4>";
  }
}
 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">EDIT TEAM MEMBER INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-team-member.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-TEAM-MEMBER</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Team Member Name :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$team['team_id']?>">
													<input type="text" class="form-control" id="" name="name" value="<?=$team['team_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Team Member Title :</label>
												<div class="col-sm-7">

                          <input type="text" name="title"  class="form-control" value="<?=$team['team_title']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Team Member Image :</label>
												<div class="col-sm-4">
													<input type="file" class="form-control" id="" name="image">
												</div>
                        <div class="col-sm-3">
                           <img src="uploads/<?=$team['team_img'];?>" alt="" style="max-height:200px;">
                        </div>
											</div>
										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">UPDATE</button>
										</div>
									</div>
								</form>
							</div>
<?php
get_footer();
}else {
  header('Location:index.php');
}
 ?>
