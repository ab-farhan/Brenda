<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$sid=$_GET['sd'];
$delete="DELETE FROM service WHERE ser_id='$sid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-service-header.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-service-header.php');
}
 ?>
