<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = mysqli_real_escape_string($db, $_POST['address']);

   $insert = "INSERT INTO `contact`(`address`, `phone`, `email`) VALUES ('$address','$phone','$email')";
  if (mysqli_query($db, $insert)) {
  	header('location:contact.php');
  }

}

?>