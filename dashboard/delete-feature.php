<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$fid=$_GET['fd'];
$delete="DELETE FROM about_feature WHERE feat_id='$fid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-feature.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-feature.php');
}
 ?>
