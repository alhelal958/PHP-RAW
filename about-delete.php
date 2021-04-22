<?php  
 require_once "database.php";
 $id = $_GET['id'];
 $delete = "DELETE FROM `about` WHERE id = $id";
 if (mysqli_query($db, $delete)) {
 	header('location:about.php');
 }

?>