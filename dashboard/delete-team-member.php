<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1){
$tid=$_GET['td'];
$delete="DELETE FROM team_member WHERE team_id='$tid'";

if(mysqli_query($conn,$delete)){
  header('Location:all-team-member.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-team-member.php');
}
 ?>
