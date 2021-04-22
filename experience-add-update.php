<?php  
 require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
   $FEATURE_ITEM = $_POST['FEATURE_ITEM'];
   $ACTIVE_PRODUCTS = $_POST['ACTIVE_PRODUCTS'];
   $YEAR_EXPERIENCE = $_POST['YEAR_EXPERIENCE'];
   $OUR_CLIENTS = $_POST['OUR_CLIENTS'];
  
   $insert = "INSERT INTO `experience`(`FEATURE_ITEM`, `ACTIVE_PRODUCTS`, `YEAR_EXPERIENCE`, `OUR_CLIENTS`) VALUES ('$FEATURE_ITEM','$ACTIVE_PRODUCTS','$YEAR_EXPERIENCE','$OUR_CLIENTS')";
	  if (mysqli_query($db, $insert)) {
	  	header('location:experience.php');
	  }

}

?>