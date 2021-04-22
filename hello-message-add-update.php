<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $message = $_POST['message'];
   
  
   $insert = "INSERT INTO `hello_message`(`name`, `message`) VALUES ('$name','$message')";
   $insert_q = mysqli_query($db, $insert);
   header('location:hello_message.php');

}

?>