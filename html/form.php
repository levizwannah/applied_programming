
<!DOCTYPE HTML>
<html>  
<body>


<?php
    require "../logic/form_logic.php";
?>
<h2>Registeration</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
First Name: <input type="text" name="first_name"><?php echo $first_name_error; ?><br>
Last Name: <input type="text" name="last_name"><?php echo $last_name_error; ?><br>
E-mail: <input type="email" name="email"><?php echo $email_error; ?><br>
Password: <input type="password" name="password"><?php $password_error?><br>
Confirm Password: <input type="password" name="conf_password"><?php $conf_password_error?><br>
<!-- <input type="submit" name="Login"> -->
<button type="submit">Register</button>
</form>

</body>
</html>

<!-- git
    Github
-->