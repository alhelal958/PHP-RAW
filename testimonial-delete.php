<?php  
 require_once "database.php";
 $id = $_GET['id'];
 $delete = "DELETE FROM `testimonial` WHERE id = $id";
 if (mysqli_query($db, $delete)) {
 	header('location:testimonial.php');
 }

?>