<?php
require_once "database.php";
require "session.php";

// first if start here
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $confirm_password = $_POST['confirm_password'];
 $hash_password = password_hash($password, PASSWORD_DEFAULT);

 $uppercase = preg_match('@[A-Z]@', $password);
 $lowercase = preg_match('@[a-z]@', $password);
 $number    = preg_match('@[0-9]@', $password);
 $specialChars = preg_match('@[^\w]@', $password);

 $count = "SELECT COUNT(*) AS total FROM users WHERE email = '$email'";
 $query = mysqli_query($db, $count);
 $divide_query = mysqli_fetch_assoc($query);


 
 
 if (empty($name)) {
    $_SESSION['Nameerr'] = 'please enter your name';
 	header('location:sign-up.php');
 }
 elseif (empty($email)) {
 	$_SESSION['emailerr'] = 'please enter your email';
 	header('location:sign-up.php');
 }
 elseif ($divide_query['total'] > 0) {
 	$_SESSION['emailfound'] = 'Email already exist';
 	header('location:sign-up.php');
 }
 elseif (empty($password)) {
 	$_SESSION['passworderr'] = 'please enter your password';
 	header('location:sign-up.php');
 }
 elseif (empty($confirm_password)) {
 	$_SESSION['confirmpassworderr'] = 'please enter your confirm password';
 	header('location:sign-up.php');
 }
 elseif ($password != $confirm_password) {
 	$_SESSION['confirmpasswordmatcherr'] = 'Your password dose not match';
 	header('location:sign-up.php');
 }
 elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
	$_SESSION['passvalidation'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
 	header('location:sign-up.php');
 }
 elseif (!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z]{2,15})$/",$email)) {
 	$_SESSION['emailvaliderr'] = 'please enter valid email';
 	header('location:sign-up.php');
 }
 else{
 	$insert = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$hash_password')";
    $query = mysqli_query($db, $insert);
 	$_SESSION['registersuccessful'] = 'Successfully Registerd';
 	header('location:sign-up.php');
 }

}// first if close here


// first else start here
else{
	echo "no";
}// first else close here


?>