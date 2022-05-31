
<!DOCTYPE HTML>
<html>  
<body>


<?php
    require "../logic/Db_connection.php";
    require "../logic/user.php";
    require "../logic/login_logic.php";
?>
<h2>Login</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
E-mail: <input type="email" name="email" id="email"><?php echo $email_error; ?><br>
Password: <input type="password" name="password" id="password"><?php $password_error?><br>
<!-- <input type="submit" name="Login"> -->
<button type="button" id="submit">Login</button>
</form>
<footer>
    <script src="../js/util.js"></script>
    <script src="../js/signup.js"></script>
</footer>
</body>
</html>

<!-- git
    Github
-->