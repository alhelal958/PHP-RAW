<?php  
 require_once "database.php";
 $id = $_GET['id'];
 $delete = "DELETE FROM `contact` WHERE id = $id";
 if (mysqli_query($db, $delete)) {
 	header('location:contact.php');
 }

?>