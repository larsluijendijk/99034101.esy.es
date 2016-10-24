<?php
 session_start();
if(isset($_POST["submit"])){
 if(!empty($_POST['email']) && !empty($_POST['password'])){
 	$email = $_POST['email'];
 	$password = sha1($_POST['password']);
 //DB Connection
 $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'users') or die("databse error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $email=$row['email'];
 $password=$row['password'];
 }
 if($email == $email && $password == $password)
 {
 $_SESSION['sess_user']=$email;
 //Redirect Browser
 header('Location:welcome.php');
 }
 }
 else
 {
 echo "Invalid email or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
?>