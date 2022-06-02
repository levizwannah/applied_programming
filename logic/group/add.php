<?php
    require("../in_auth.inc.php");

    require("../Db_connection.php");
    require("../group.php");

    $name = $_POST["group_name"];

    $userId = $_SESSION["user_id"];

    $group = new Group();

    $group->setName($name);
    $group->setUserId($userId);

    exit($group->add());

?>