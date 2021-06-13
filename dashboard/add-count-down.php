<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

 if(!empty($_POST)){
   $one_name=$_POST['p_name'];
   $two_name=$_POST['c_name'];
   $three_name=$_POST['s_name'];
   $four_name=$_POST['a_name'];
   $one_value=$_POST['p_value'];
   $two_value=$_POST['c_value'];
   $three_value=$_POST['s_value'];
   $four_value=$_POST['a_value'];
 if((!empty($one_name) && !empty($one_value)) || (!empty($two_name) && !empty($two_value)) || (!empty($three_name) && !empty($three_value)) || (!empty($four_name) && !empty($four_value))){
    $insert_cd="INSERT INTO count_down(count_1st_name,count_2nd_name,count_3rd_name,count_4th_name,count_1st_value,count_2nd_value,count_3rd_value,count_4th_value)
    VALUES('$one_name','$two_name','$three_name','$four_name','$one_value','$two_value','$three_value','$four_value')";
     if(mysqli_query($conn,$insert_cd)){
       echo "<h4 class='text-center text-success pt-3'>Successfully Completed Include Count Content</h4>";
     }else {
       echo "<h4 class='text-center text-danger pt-3'>Opps!! Failed.</h4>";
     }
   }else {
     echo "<h4 class='text-center text-danger pt-3'>Please Enter a Count-Down Name And Vlue </h4>";
   }

}
 ?>
							<div class="main_content_part">
								<form action="" method="post" enctype="multipart/form-data" id="">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">ADD COUNTER</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-count-down.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-COUNT-DOWN</a>
												</div>
											</div>
										</div>
										<div class="card-body">
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">First Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">First Value :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="p_value">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Secound Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="c_name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Secound Vlue :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="c_value">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Third Name:</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="s_name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Third Value :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="s_value">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Fourth Name :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="a_name">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">Fourth Value :</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="" name="a_value">
												</div>
											</div>

										</div>
										<div class="card-footer text-muted text-center">
											<button type="submit" class="btn btn-sm btn-dark submit_btn">ADD COUNT-DOWN</button>
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
