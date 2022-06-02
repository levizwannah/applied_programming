<?php
#start session
session_start();

if(!isset($_SESSION["user_id"])){
    exit(
        json_encode(
            [
                "status" => "NLIE", # not logged in error
                "message" => "You are not logged in"
            ]
        )
    );
}

?>