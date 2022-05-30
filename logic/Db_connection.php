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
        $this->db_name = "applied_programming";

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
        


        if ($this->conn->query($sql) === TRUE) {
            echo "The user is added successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
          
          $this->conn->close();
    }

}

?>