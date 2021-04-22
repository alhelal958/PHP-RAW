<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $review = mysqli_real_escape_string($db, $_POST['review']);

  

   $image = $_FILES['image'];
   $explode = explode('.', $_FILES['image']['name']);
   $end = end($explode);
   $allow_formate = ['jpg','png','jpeg'];
   $new_extension = rand().'.'.$end;

   $select = "SELECT * FROM testimonial";
   $qu = mysqli_query($db, $select);
   $q_assoc = mysqli_fetch_assoc($qu);

   $insert = "INSERT INTO `testimonial`(`review`,`name`,`image`) VALUES ('$review','$name','$new_extension')";


   
   // if (in_array($end, $allow_formate)) {
   // 	   if ($q_assoc['image'] != 'default.jpg') {
   // 	   	 $old_img = 'upload/testimonial/'.$q_assoc['image'];
   //         if (file_exists($old_img)) {

   //             unlink($old_img);
   //         }
   // 	   } 
   // }
   if (mysqli_query($db, $insert)) {
           $new_location = 'upload/testimonial/' . $new_extension;
           move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
           header('location:testimonial.php');
   }
}

?>