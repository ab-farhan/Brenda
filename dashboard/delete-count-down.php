<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==2 || $_SESSION['user_role_id']==1){
$cdid=$_GET['cdd'];
$delete="DELETE FROM count_down WHERE count_id='$cdid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-count-down.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-count-down.php');
}
 ?>
