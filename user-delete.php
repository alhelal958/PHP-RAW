<?php
  require "database.php";
  require_once "session.php";

  
   $id= $_GET['id'];
   $delete_user = "UPDATE `users` SET `status`= '2' WHERE id = $id";
   $delete_user_query = mysqli_query($db, $delete_user);
  
  if ($delete_user_query) {
  	$_SESSION['delete'] = 'User successfully moved to trash';
  	header('location:users.php');
  }
 
?>