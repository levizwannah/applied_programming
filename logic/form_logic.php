<?php

$first_name_error= $last_name_error =$email_error= $password_error=$conf_password_error="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $first_name = $_POST["first_name"];
    echo "First Name: ".$first_name;
    if ($first_name=="") {
        echo "I am called";
        $first_name_error = "First Name field can't be empty";
    }
    $last_name = $_POST["last_name"];
    if ($last_name=="") {
        $last_name_error = "Last Name field can't be empty";
    }
    $email = $_POST["email"];
    if ($email=="") {
        $email_error = "Email field can't be empty";
    }

    $filtered_first_name =  test_input($first_name);
    echo "The filtered first Name: ".$filtered_first_name;


    $password = $_POST["password"];
    $conf_password = $_POST["conf_password"];    
    
}

?>