<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $message = $_POST['message'];
   $realescp = mysqli_real_escape_string($db, $_POST['message']);
   $id = $_GET['id'];
  
  
   $insert = "UPDATE `hello_message` SET `name` ='$name',`message` ='$realescp' WHERE id = $id";
  if (mysqli_query($db, $insert)) {
  	header('location:hello_message.php');
  }

}

?>