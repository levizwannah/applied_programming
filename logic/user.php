<?php

class User 
{
    private $firstName, $lastName, $email, $password;

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
        
        $sql = "SELECT user_id, firstname, lastname, password FROM user WHERE email='$this->email'";

        $result = $dbConnection->query($sql);
        $password = $result["password"];
        $firstname =$result['firstname'];
        $lastname =$result['lastname']; 

        if(password_verify($this->password,$password)){
            return $firstname." ". $lastname. " ". "Logged in successfully";
        }else{
            return "Wrong credentials";
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


}

?>