<?php
  require "database.php";
  require_once "session.php";
if ($_SERVER['REQUEST_METHOD'] = 'POST') {

   $name = $_POST['name'];
   $email = $_POST['email'];
   $id= $_SESSION['id'];
   $image = $_FILES['profile_image']['name'];
   $exploid = explode('.', $image);
   $extension = end($exploid);
   $allow_formate = ['jpeg','png','jpg'];
   if (in_array($extension, $allow_formate)) {
    if ($_FILES['profile_image']['size'] < 5000000) {
      $new_extension = $id .'.'. $extension; //new name
      $new_location = 'upload/'. $new_extension; //new location

      $prof_select = "SELECT * FROM users WHERE id = $id";
      $prof_q = mysqli_query($db,  $prof_select);
      $prof_assoc = mysqli_fetch_assoc($prof_q);
      $old_location = 'upload/' .  $prof_assoc['image'];
     if ($prof_assoc['image'] != 'default.jpg') {
        if (file_exists($old_location)) {
         unlink($old_location);
        }
     }

      move_uploaded_file($_FILES['profile_image']['tmp_name'], $new_location);
      $update_user = "UPDATE `users` SET `name`='$name',`email`='$email' , image = '$new_extension' WHERE id = $id";
      $q = mysqli_query($db, $update_user);
      if ($q) {
       $_SESSION['name'] = $name;
       header('location:dashboard.php');
      }   
    }
   }
   else{
    echo "not allow";
   }
   
  
   
 }
  
 
?>