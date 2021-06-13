<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1){
$tesid=$_GET['tesd'];
$delete="DELETE FROM testimonial WHERE tes_id='$tesid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-testimonial.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-testimonial.php');
}
 ?>
