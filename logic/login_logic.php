<?php
 require_once "../logic/Db_connection.php";
 require_once "../logic/user.php";

$first_name_error= $last_name_error =$email_error= $password_error=$conf_password_error="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

if($_SERVER["REQUEST_METHOD"]=="POST"){

    //Validating against empty fields
  
    $email =test_input($_POST["email"]);
    if ($email=="") {
        $email_error = "Email field can't be empty";
    }

    $password =test_input($_POST["password"]);
    if ($password=="") {
        $password_error = "password field can't be empty";
    }


    $password = $_POST["password"];




    //Time to put the collected data in the database
    
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);
    $user->login();
    


    
}

?>