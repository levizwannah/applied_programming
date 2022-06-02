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


    //Time to put the collected data in the database
    
    $user = new User();
    $user->setFirstName($first_name);
    $user->setLastName($last_name);
    $user->setEmail($email);
    $user->setPassword($password);
    
    if(!$user->addUser()){
        exit(
            json_encode([
                "status" => "UEO", # unknown error occurred,
                "message" => "An error occurred while registering the user"
            ])
            );
    }
    
    exit(
        json_encode([
            "status" => "OK", # unknown error occurred,
            "message" => "Successfully added the user"
        ])
        );  
}

exit(
    json_encode([
        "status" => "WME", # unknown error occurred,
        "message" => "Wrong HTTP Method: POST allowed only"
    ])
    );

?>