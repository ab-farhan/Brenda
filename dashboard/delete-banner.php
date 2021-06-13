<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$bid=$_GET['b'];
$delete="DELETE FROM banner WHERE ban_id='$bid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-banner.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-banner.php');
}
 ?>
