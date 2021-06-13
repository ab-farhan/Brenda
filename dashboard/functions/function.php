<?php session_start();
require_once("../config.php");
function get_header(){
  require_once('includes/header.php');
}
function get_sidebar(){
  require_once("includes/sidebar.php");
}
function get_footer(){
  require_once("includes/footer.php");
}
function getloggedID(){
  return !empty($_SESSION['user_id']) ? true : false;
}
function Needlogged(){
  $check=getloggedID();
  if(!$check){
    header('Location:login.php');
    exit();
  }
}
 ?>
