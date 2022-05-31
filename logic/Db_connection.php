<?php

class DBConnection 
{
    protected $conn;
    private $servername, $username, $password, $dbname;

    //Constructor
    public function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "applied_programming";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($conn->connect_error) {
            $this->conn= null;
        }

        $this->conn = $conn;
    }

    //Method to insert data in the database
    public function insertData($sql){
        //To be implemented in the next class
        
        $message="";

        if ($this->conn->query($sql) === TRUE) {
            $message = "The user is added successfully";
          } else {
            $message = "Error: " . $sql . "<br>" . $this->conn->error;
          }
          
          $this->conn->close();
          return $message;
    }

    public function query(){
        //Get data from the database using select statement 
        //To be done with Mr. Levi
    }

}

?>