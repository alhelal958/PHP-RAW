<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
   $summery = mysqli_real_escape_string($db, $_POST['summery']);

  
  
   $insert = "INSERT INTO `about`(`summery`) VALUES ('$summery')";
  if (mysqli_query($db, $insert)) {
  	header('location:about.php');
  }

}

?>