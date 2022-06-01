<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">

    <!-- FA -->
    <script src="https://kit.fontawesome.com/e307a20384.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    require "../logic/Db_connection.php";
    require "../logic/user.php";
    require "../logic/login_logic.php";
    ?>

    <main class="login-main">
        <div class="container">
            <div class="login-icon text-center">
                <i class="fa-solid fa-user-lock"></i>
            </div>

            <div class="page-title flex-row align-center justify-center">
                <a href="#" class="logo">MyTodos</a>
                <h3 class="login-title text-center">Login</h3>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-field">
                    <label for="email">E-mail:</label>
                    <input type="email" class="width-100" name="email" id="email"><?php echo $email_error; ?>
                </div>

                <div class="form-field">
                    <label for="email">Password:</label>
                    <input type="password" class="width-100" name="password" id="password"><?php $password_error ?>
                </div>

                <!-- <input type="submit" name="Login"> -->
                <button type="button" class="btn btn-cta btn-login width-100" id="submit">Login</button>
            </form>
        </div>
    </main>


    <footer>
        <script src="../js/util.js"></script>
        <script src="../js/signup.js"></script>
    </footer>
</body>

</html>

<!-- git
    Github
-->