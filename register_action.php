<?php 
  
require_once 'inc/dbconnection.php';

if ( isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email = $_POST['email'];
      $password = sha1($_POST['password']);
      $db = mysqli_select_db($conn, 'users') or die("DB Error"); // Select DB from database
      //Selecting Database
      $query = mysqli_query($conn, "SELECT * FROM users WHERE email='".$email."'");
      $numrows = mysqli_num_rows($query);
     if($numrows == 0)
 {
      $sql = "INSERT INTO users (email, password)
    VALUES ('".$_POST["email"]."','".sha1($_POST["password"])."')";
    $result = mysqli_query($conn, $sql);
    //Result Message
    if($result){
    echo "Your Account Created Successfully";
     }
     else
     {
        echo "Failure!";
     }
     }
     else
     {
         echo "That email already exists! Please try again.";
     }
     }
     else
     {
     ?>

     <?php
     }
    }

    else{
    	// if nothing was sent, then go back to register page
    	$_SESSION['errors'][] = "niets ontvangen.";
    	header('location: register.php');
    }


 ?>