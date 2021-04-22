<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $icon = $_POST['icon'];
   $link = $_POST['link'];
  
   $insert = "INSERT INTO `socials`(`name`, `icon`, `link`) VALUES ('$name','$icon','$link')";
   $insert_q = mysqli_query($db, $insert);
   header('location:socials.php');

}

?>