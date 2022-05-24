<?php

$first_name_error= $last_name_error =$email_error= $password_error=$conf_password_error="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

if($_SERVER["REQUEST_METHOD"]=="POST"){

    //Validating against empty fields
    $first_name = test_input($_POST["first_name"]);
    if ($first_name=="") {
        $first_name_error = "First Name field can't be empty";
    }

    $last_name =test_input($_POST["last_name"]);
    if ($last_name=="") {
        $last_name_error = "Last Name field can't be empty";
    }

    $email =test_input($_POST["email"]);
    if ($email=="") {
        $email_error = "Email field can't be empty";
    }

    $password =test_input($_POST["password"]);
    if ($password=="") {
        $password_error = "password field can't be empty";
    }

    $conf_password =test_input($_POST["conf_password"]);
    if ($conf_password=="") {
        $conf_password_error = "confirm password field can't be empty";
    }

    //Validating against password mismatch 
    $password = $_POST["password"];
    $conf_password = $_POST["conf_password"];
    
    if ($password!=$conf_password) {
        $conf_password_error = "Password mismatch";
    }


    
}

?>