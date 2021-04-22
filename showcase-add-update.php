<?php 
 require "database.php";
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$work_name= $_POST['work_name'];
    $title= $_POST['title'];
    $main_title= $_POST['main_title'];
    $main_summery = nl2br(mysqli_real_escape_string($db, $_POST['main_summery']));
    

    $thumbnail = $_FILES['thumbnail'];
    $exploid = explode('.', $_FILES['thumbnail']['name']);
    $en = end($exploid);
    $im_name = rand().'.'.$en;
    $location = 'upload/thumbnail/' . $im_name;


    $main_image = $_FILES['main_image'];
    $explode = explode('.', $_FILES['main_image']['name']);
    $end = end($explode);
    $img_name = rand().'.'.$end;
    $location1 = 'upload/main_image/' . $img_name;
    
    $insert = "INSERT INTO `showcase`(`thumbnail`, `work_name`, `title`, `main_image`, `main_title`, `main_summery`) VALUES ('$im_name','$work_name','$title','$img_name','$main_title','$main_summery')";
    
    if (mysqli_query($db, $insert)) {
    	move_uploaded_file($_FILES['thumbnail']['tmp_name'], $location);
    	move_uploaded_file($_FILES['main_image']['tmp_name'], $location1);
    	header('location:showcase.php');
    }

 }
 else{
 	echo "no";
 }





?>