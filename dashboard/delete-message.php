<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1){
$did=$_GET['dm'];
$delete="DELETE FROM contact_info WHERE con_id='$did'";

if(mysqli_query($conn,$delete)){
  header('Location:all-message.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-message.php');
}
 ?>
