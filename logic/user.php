<?php

class User 
{
    private $id, $firstName, $lastName, $email, $password;

    public function __construct()
    {
        
    }

    public function getFirstName(){
        return $this->firstName;        
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getOPassword(){
        return $this->password;
    }

    //Set methods 
    public function setFirstName($firstName){
        $this->firstName = $firstName;        
    }
    
    public function setLastName($lastName){
        $this->lastName= $lastName;
    }

    public function setEmail($email){
        $this->email= $email;
    }

    public function setPassword($password){
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        $this->password = $hashedPassword;
    }


    public function login(){
        $dbConnection = new DBConnection();
        
        $sql = "SELECT * FROM user WHERE email='$this->email'";

        $result = $dbConnection->query($sql);

        if($result->num_rows < 1){
            return json_encode(
                [
                    "status" => "WCE", #wrong credentials error
                    "message" => "You entered a wrong username"
                ]
            );
        }

        $result = $result->fetch_all(MYSQLI_ASSOC)[0];

        $password = $result["password"];
        //$firstname =$result['firstname'];
        //$lastname =$result['lastname']; 

        if(!password_verify($this->password, $password)){
            $_SESSION["user_id"] = $result["user_id"];

            return json_encode([
                "status" => "OK",
                "message" => "Logged in successfully"
            ]);
        }else{
            return json_encode(
                [
                    "status" => "WCE", #wrong credentials error
                    "message" => "You entered a wrong password email is "
                ]
            );
        }
    }

    public function addUser(){
        $dbConnection = new DBConnection();
        
        $sql = "INSERT INTO user (firstname, lastname, email, password)
        VALUES ('$this->firstName', '$this->lastName', '$this->email', '$this->password')";

        return $dbConnection->insertData($sql);
    }

    public function deleteUser(){
        
    }

    public function getGroups(){
        return Group::getAll($this->id);
    }


}

?>