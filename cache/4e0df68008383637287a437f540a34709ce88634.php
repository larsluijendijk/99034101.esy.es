<?php
if(!isset($_SESSION["sess_user"])){
 header("Location: login.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<h1>Welcome to my site!</h1>
<p>You can now use this site properly.</p>
<?=$_SESSION['sess_user'];?>!<a href="logout.php">Logout</a>
<body>
</body>
</html>
<?php
}
?>