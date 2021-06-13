<?php
require_once('functions/function.php');
Needlogged();
$eid=$_GET['e'];
if($_SESSION['user_id']==$eid || $_SESSION['user_id']==1){
get_header();
get_sidebar();

$sel="SELECT * FROM user_info WHERE user_id='$eid'";
$Q=mysqli_query($conn,$sel);
$data=mysqli_fetch_assoc($Q);
if(!empty($_POST)){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $image=$_FILES['image'];
  $imageName=$data['user_img'];
  $role=$_POST['role'];
  $roleName=$data['role_id'];
  if(!empty($role)){
    $roleName=$role;
  }
  if($image['name']!=""){
    $imageName="user-".time()."-".rand(100,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

  $update="UPDATE user_info SET user_name='$name', user_phone='$phone', user_email='$email', user_img='$imageName',role_id='$roleName' WHERE user_id='$id'";
  if(mysqli_query($conn,$update)){
    move_uploaded_file($image['tmp_name'],"uploads/".$imageName);
    echo "<h4 class='text-center text-success pt-3'>Successfully Update User Information</h4>";
    header('Location:view-user.php?v='.$id);
  }else {
    echo "<h4 class='text-center text-danger pt-3'>Opps!! User Upadate Failed.</h4>";
  }
}

 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data" id="user_from">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">EDIT USER INFORMATION</h5>
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
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Name :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$data['user_id']?>">
													<input type="text" class="form-control" id="" name="name" value="<?=$data['user_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Phone :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="phone" value="<?=$data['user_phone']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Email :</label>
												<div class="col-sm-7">
													<input type="email" class="form-control" id="" name="email" value="<?=$data['user_email']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">User Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="username" value="<?=$data['user_username']?>" disabled>
												</div>
											</div>
                      <?php if($_SESSION['user_role_id']==1){ ?>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">User Role &nbsp; :</label>
                        <div class="col-sm-7">
                          <select class="form-control" name="role">
                            <option value="">Select Option</option>

                            <?php
                            $Rsel="SELECT * FROM user_role ORDER BY role_id ASC";
                            $RQ=mysqli_query($conn,$Rsel);
                            while($Rdata=mysqli_fetch_assoc($RQ)){
                             ?>
                             <option value="<?=$Rdata['role_id']?>"><?=$Rdata['role_name']?></option>
                           <?php } ?>
                          </select>
                        </div>
                      </div>
                    <?php } ?>

                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Image &nbsp; :</label>
												<div class="col-sm-4">
													<input type="file" class="form-control" id="" name="image">
												</div>
                        <div class="col-sm-3">
                          <?php
                          if($data['user_img']!=''){
                           ?>
                           <img src="uploads/<?=$data['user_img'];?>" alt="" style="max-height:200px;">
                           <?php
                         }else {
                            ?>
                            <img src="images/profile.png" alt="" style="max-height:200px;">
                          <?php } ?>
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
