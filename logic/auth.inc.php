<?php
#start session
session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: html/login.php");
}

?>