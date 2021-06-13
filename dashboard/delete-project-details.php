<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$pdid=$_GET['pdd'];
$delete="DELETE FROM project_details WHERE p_id='$pdid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-project-details.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-project-details.php');
}
 ?>
