<?php  
 require_once "session.php";
 require_once "database.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$oldpassword = $_POST['oldpassword'];
 	$newpassword = $_POST['newpassword'];
 	$confirmpassword = $_POST['confirmpassword'];
 	$encrypt_pass = password_hash($confirmpassword, PASSWORD_DEFAULT);
 	$id = $_SESSION['id'];

 	$select_for_pass = "SELECT * FROM users WHERE id = $id";
 	$password_q = mysqli_query($db, $select_for_pass);
 	$pass_assoc = mysqli_fetch_assoc($password_q);
    $hash = $pass_assoc['password'];
    
    if ($newpassword == $confirmpassword) {
    	password_verify($oldpassword, $hash);
    	$update_pass = "UPDATE users SET password = '$encrypt_pass' WHERE id = $id";
    	$pass_update_query = mysqli_query($db, $update_pass);
    	header('location:dashboard.php');
    }
 	
 	
 }



?>