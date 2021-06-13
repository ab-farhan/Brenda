<?php
require_once('functions/function.php');
Needlogged();
if($_SESSION['user_role_id']==1 || $_SESSION['user_role_id']==2){
$bl_id=$_GET['bld'];
$delete="DELETE FROM blog WHERE blog_id='$bl_id'";

if(mysqli_query($conn,$delete)){
  header('Location:all-blog.php');
}else {
  echo "<h4 class='text-center text-danger pt-3'>Opps!! Delete Failed.</h4>";
}
}else {
  header('Location:all-blog.php');
}
 ?>
