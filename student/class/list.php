<?php
    require_once "../../includes/startup.php";

    $db_obj = new dbconnection;

    $sql = "SELECT * FROM `classes` where status = 1";
    $class_data = $db_obj->getData($sql);
    
    require_once "../../layout/header.html";
    require_once "list.html";
    require_once "../../layout/footer.html";