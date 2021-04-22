<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $icon = $_POST['icon'];
   $summery = $_POST['summery'];
  
   $insert = "INSERT INTO `services`(`name`, `icon`, `summery`) VALUES ('$name','$icon','$summery')";
   $insert_q = mysqli_query($db, $insert);
   header('location:services.php');

}

?>