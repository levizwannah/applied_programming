<?php

    class Group{

        private $id,
                $name,
                $userId,
                $createdOn,
                $updatedOn;

        public function __construct($id = 0)
        {
            if($id == 0) return;
            
            $dbConn = new DBConnection();
            $result = $dbConn->query("SELECT * from `group` where group_id = $id");

            if($result->num_rows < 1) return;
            $result = $result->fetch_assoc();

            $this->setId($id);
            $this->setUserId($result["userId"]);
            $this->setName($result["group_name"]);
            $this->setCreatedOn($result["created_on"]);
            $this->setUpdatedOn($result["updated_on"]);
        }


        public function add(){
            if(empty($this->userId) || empty($this->name)){
                return json_encode(
                    [
                        "status"=>"IIE", # invalid input error
                        "message" => "group name and user must be set"
                    ]
                );
            }

            $sql = "INSERT INTO `group`(userId, group_name) VALUES($this->userId, '$this->name')";

            $dbConn = new DBConnection();

            if($dbConn->insertData($sql)){
                return json_encode([
                    "status" => "OK",
                    "message" => "successfully added the group"
                ]);
            }

            return json_encode([
                "status" => "UEO",
                "message" => "An unknown error occurred"
            ]);
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of createdOn
         */ 
        public function getCreatedOn()
        {
                        return $this->createdOn;
        }

        /**
         * Set the value of createdOn
         *
         * @return  self
         */ 
        public function setCreatedOn($createdOn)
        {
                        $this->createdOn = $createdOn;

                        return $this;
        }

        /**
            * Get the value of updatedOn
            */ 
        public function getUpdatedOn()
        {
                        return $this->updatedOn;
        }

        /**
            * Set the value of updatedOn
            *
            * @return  self
            */ 
        public function setUpdatedOn($updatedOn)
        {
                        $this->updatedOn = $updatedOn;

                        return $this;
        }

        /**
         * Get the value of userId
         */ 
        public function getUserId()
        {
                        return $this->userId;
        }

        /**
         * Set the value of userId
         *
         * @return  self
         */ 
        public function setUserId($userId)
        {
                        $this->userId = $userId;

                        return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }

?>