<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>{{$title}}</title>
</head>
	<body>
<!-- Login Container -->
<section class="login">
    <form action="login_action.php" method="post">
    	
        <!-- The Username Field -->
        <label for="username">E-mail
        <input type="text" name="email" id="email" required="required" />
    	</label>
        
        <!-- The Password Field -->
        <label for="password">Password
        <input type="password" name="password" id="password" required="required" />
        </label>
        
        <!-- The Remember Me Checkbox -->
        <input type="checkbox" name="remember" id="remember" />
        <label class="check" for="remember"><span></span>Remember Me</label>
        <a href=""><p>Forgot something?</p></a>
        <!-- Clearn both sides -->
        <div class="clear"></div>
        <!-- Recover Button --> 
        <input type="button" value="Register" onclick="location.href='register.php';" />
        <!-- The Login Button -->
        <input type="submit" value="Login" />
    </form>
    </section>

 	   </body>



</html>