<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $year= $_POST['year'];
   $title = $_POST['title'];
   $progress = $_POST['progress'];
  
   $insert = "INSERT INTO `educations`(`year`, `title`, `progress`) VALUES ('$year','$title','$progress')";
   $insert_q = mysqli_query($db, $insert);
   header('location:educations.php');

}