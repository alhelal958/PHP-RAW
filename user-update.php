<?php
  require "database.php";
  require_once "session.php";

   $name = $_POST['name'];
   $email = $_POST['email'];
   $id= $_SESSION['id'];
   $update_user = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE id = $id";
   $update_user_query = mysqli_query($db, $update_user);
  
  if ($update_user_query) {
  	$_SESSION['userupdated'] = 'User successfully updated';
  	header('location:users.php');
  }
 
?>