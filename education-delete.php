<?php
  require "database.php";
  

  
   $id= $_GET['id'];
   $delete_users = "UPDATE `educations` SET `status`= 2 WHERE id = $id";
   $delete_user_querys = mysqli_query($db, $delete_users);
  
  if ($delete_user_querys) {
  
  	header('location:educations.php');
  }
 
?>