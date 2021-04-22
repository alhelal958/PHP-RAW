<?php
  require "database.php";
  

  
   $id= $_GET['id'];
   $delete_users = "UPDATE `socials` SET `status`= 'deactive' WHERE id = $id";
   $delete_user_querys = mysqli_query($db, $delete_users);
  
  if ($delete_user_querys) {
  
  	header('location:socials.php');
  }
 
?>