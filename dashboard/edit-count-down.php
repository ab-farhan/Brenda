<?php
require_once('functions/function.php');
Needlogged();
$cdid=$_GET['cde'];
if($_SESSION['user_role_id']!=5){
get_header();
get_sidebar();

$selcd="SELECT * FROM count_down WHERE count_id='$cdid'";
$Qcd=mysqli_query($conn,$selcd);
$count=mysqli_fetch_assoc($Qcd);
if(!empty($_POST)){
  $id=$_POST['id'];
  $one_name=$_POST['1st_name'];
  $one_value=$_POST['1st_value'];
  $two_name=$_POST['2nd_name'];
  $two_value=$_POST['2nd_value'];
  $three_name=$_POST['3rd_name'];
  $three_value=$_POST['3rd_value'];
  $four_name=$_POST['4th_name'];
  $four_value=$_POST['4th_value'];

  $updatecd="UPDATE count_down SET count_1st_name='$one_name',count_1st_value='$one_value',count_2nd_name='$two_name',count_2nd_value='$two_value',count_3rd_name='$three_name',count_3rd_value='$three_value',count_4th_name='$four_name',count_4th_value='$four_value' WHERE count_id='$id'";
  if(mysqli_query($conn,$updatecd)){
    echo "<h4 class='text-center text-success pt-3'>Successfully Update Count Down Information</h4>";
    header('Location:view-count-down.php?cdv='.$id);
  }else {
    echo "<h4 class='text-center text-danger pt-3'>Opps!! Upadate Failed.</h4>";
  }
}

 ?>
							<div class="main_content_part">
								<form action="" method="post">
									<div class="card">
										<div class="card-header">
											<div class="row">
												<div class="col-md-8">
													<div class="card_header_title text-left">
														<i class="fab fa-gg-circle"></i>
														<h5 class="d-inline-block">EDIT COUNT DOWN INFORMATION</h5>
													</div>
												</div>
												<div class="col-md-4 text-right">
													<a href="all-count-down.php" class="btn text-white btn-dark"><i class="fas fa-th "></i> ALL-COUNT-DOWN</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">1st Count Name :</label>
												<div class="col-sm-7">
                          <input type="hidden" class="form-control" id="" name="id" value="<?=$count['count_id']?>">
													<input type="text" class="form-control" id="" name="1st_name" value="<?=$count['count_1st_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">1st Count Value :</label>
												<div class="col-sm-7">
                          <input type="text" name="1st_value" class="form-control" value="<?=$count['count_1st_value']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">2nd Count Name :</label>
												<div class="col-sm-7">
                          <input type="text" name="2nd_name" class="form-control" value="<?=$count['count_2nd_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">2nd Count Value :</label>
												<div class="col-sm-7">
                          <input type="text" name="2nd_value" class="form-control" value="<?=$count['count_2nd_value']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">3rd Count Name :</label>
												<div class="col-sm-7">
                          <input type="text" name="3rd_name" class="form-control" value="<?=$count['count_3rd_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">3rd Count Value :</label>
												<div class="col-sm-7">
                          <input type="text" name="3rd_value" class="form-control" value="<?=$count['count_3rd_value']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">4th Count Name :</label>
												<div class="col-sm-7">
                          <input type="text" name="4th_name" class="form-control" value="<?=$count['count_4th_name']?>">
												</div>
											</div>
                      <div class="form-group row custom_form">
												<label class="col-sm-3 col-form-label text-right">4th Count Value :</label>
												<div class="col-sm-7">
                          <input type="text" name="4th_value" class="form-control" value="<?=$count['count_4th_value']?>">
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
