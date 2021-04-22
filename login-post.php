<?php 
session_start();
  require 'database.php';
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$select = "SELECT COUNT(*) as total, id, name, email, password FROM `users` WHERE email = '$email'";
    $query = mysqli_query($db, $select);
    $assoc = mysqli_fetch_assoc($query);

    if ($assoc['total'] == 1) {
    	$hash = $assoc['password'];
      if (password_verify($password, $hash)) {
        $_SESSION['email'] = $assoc['email'];
        $_SESSION['id'] = $assoc['id'];
        $_SESSION['name'] = $assoc['name'];
        
        header('location:dashboard.php');
      }
      else{
        echo "milenai";
      }
    }
    else{
    	echo "not found";
    }

  }

?>