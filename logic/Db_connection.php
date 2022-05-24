<?php

class DBConnection 
{
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
            return null;
        }

        return $conn;
    }

    //Method to insert data in the database
    public function insertData($sql){
        //To be implemented in the next class
    }

}


?>