<?php
require_once('config.php');
function get_header(){
  require_once('includes/header.php');
}
function get_footer(){
  require_once('includes/footer.php');
}
function validation($datta){
  $datta=trim($datta);
  $datta=htmlspecialchars($datta);
  //$datta=stripslashes($datta);
  $datta=htmlentities($datta,ENT_QUOTES);
  return $datta;
}
 ?>
