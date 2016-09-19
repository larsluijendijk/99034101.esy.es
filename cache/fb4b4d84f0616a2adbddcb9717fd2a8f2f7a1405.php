<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<title><?php echo e($title); ?></title>
</head>
<body>

<section class="login">
<form action="register_action.php" method="post">
	
    <!-- The Username Field -->
    <label>Register here!</label>
    <br>
    <br>
    <label for="username">Enter your E-mail here:
    <input type="text" name="email" id="email" />
	</label>
    
    <!-- The Password Field -->
    <label for="password">Enter your Password here:
     <input type="password" name="password" id="password" />
    </label>

    <!-- Clearn both sides -->
    <div class="clear"></div>
    <!-- Recover Button --> 
    <input type="button" value="Back" onclick="location.href='login.php';" />
    <!-- The Login Button -->
    <input id ="submit" type="submit" value="Register" name="submit" />
</form>
    
</section>
​
</body>
</html>