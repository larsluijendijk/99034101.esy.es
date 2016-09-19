<?php 
  
require_once 'inc/dbconnection.php';

if ( isset($_POST['submit']) )
{
   
    $sql = "INSERT INTO users (email, password)
    VALUES ('".$_POST["email"]."','".$_POST["password"]."')";
}
else{
	// if nothing was sent, then go back to register page
	$_SESSION['errors'][] = "niets ontvangen.";
	header('location: register.php');
}


 ?>