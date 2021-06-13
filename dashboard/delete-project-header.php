<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$cdid=$_GET['cdd'];
$delete="DELETE FROM project_header WHERE pro_id='$cdid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-service-header.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-service-header.php');
}
 ?>
