<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$sdid=$_GET['sdd'];
$delete="DELETE FROM service_details WHERE serd_id='$sdid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-service-details.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-service-details.php');
}
 ?>
