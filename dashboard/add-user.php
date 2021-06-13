<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
get_header();
get_sidebar();
function validation($dataa){
  $dataa=trim($dataa);
  $dataa=stripslashes($dataa);
  $dataa=htmlspecialchars($dataa);
  return $dataa;
}
 if(!empty($_POST)){
   $name=validation($_POST['name']);
   $phone=validation($_POST['phone']);
   $email=validation($_POST['email']);
   $username=validation($_POST['username']);
   $pass=md5(validation($_POST['pass']));
   $cpass=md5(validation($_POST['cpass']));
   $role=$_POST['role'];
   $image=$_FILES['image'];
   $imageName="";
   if(!empty($name)){
     if(!empty($phone)){
       if(!empty($email)){
         if(!empty($username)){
           if(!empty($pass)){
             if(!empty($cpass)){
               if($pass===$cpass){
                 if(empty($role)){
                   $role=5;
                   echo "<h4 class='text-center text-danger pt-3'>role auto selected</h4>";
                   }if($image['name']!=""){
                     $imageName="user-".time()."-".rand(1000,10000000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
                   }else {
                     echo "<h4 class='text-center text-warning pt-3'>Upload Your Image Letter</h4>";
                   }
                     $insert="INSERT INTO user_info(user_name,user_phone,user_email,user_username,user_pass,role_id,user_img)
                   VALUES('$name','$phone','$email','$username','$pass','$role','$imageName')";
                   if(mysqli_query($conn,$insert)){
                     move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
                     echo "<h4 class='text-center text-success pt-3'>Successfully Completed User Registration</h4>";
                   }else {
                     echo "<h4 class='text-center text-danger pt-3'>Opps!! User Registration Failed.</h4>";
                   }
                 }else {
                   echo "<h4 class='text-center text-danger pt-3'>Password did't match!</h4>";
                 }
               }else {
                 echo "<h4 class='text-center text-danger pt-3'>Please re-type your password!</h4>";
               }
             }else {
               echo "<h4 class='text-center text-danger pt-3'>Please enter your password";
             }
           }else {
             echo "<h4 class='text-center text-danger pt-3'>Please enter your username</h4>";
           }
         }else {
           echo "<h4 class='text-center text-danger pt-3'>Please enter your email address</h4>";
         }
       }else{
         echo "<h4 class='text-center text-danger pt-3'>Please enter your phone number</h4>";
       }
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Please enter your name</h4>";
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
														<h5 class="d-inline-block">USER REGISTRATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-user.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-USER</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Name <span class="f_require">*</span>  :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Phone <span class="f_require">*</span> :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="phone">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Email <span class="f_require">*</span> :</label>
												<div class="col-sm-7">
													<input type="email" class="form-control" id="" name="email">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">User Name <span class="f_require">*</span> :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="username">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Password <span class="f_require">*</span> :</label>
												<div class="col-sm-7">
													<input type="password" class="form-control" id="u_pass" name="pass">
												</div>
											</div>
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Confirm Password <span class="f_require">*</span> :</label>
												<div class="col-sm-7">
													<input type="password" class="form-control" id="" name="cpass">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Image &nbsp; :</label>
												<div class="col-sm-7">
													<input type="file" class="form-control" id="" name="image">
												</div>
											</div>
                      <div class="form-group row custom_form">
                        <label class="col-sm-3 col-form-label text-right">User Role &nbsp; :</label>
                        <div class="col-sm-7">
                          <select class="form-control" name="role">
                            <option value="">Select Option</option>

                            <?php
                            $Rsel="SELECT * FROM user_role ORDER BY role_id ASC";
                            $Q=mysqli_query($conn,$Rsel);
                            while($Rdata=mysqli_fetch_assoc($Q)){
                             ?>
                             <option value="<?=$Rdata['role_id']?>"><?=$Rdata['role_name']?></option>
                           <?php } ?>
                          </select>
                        </div>
                      </div>
										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
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
