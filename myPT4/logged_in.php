<?php 
  if(empty($_SESSION)) {
  	session_start();
  }

  if(!isset($_SESSION['role'])) {
  	header("Location: index.php");
  	exit();
  }
?>