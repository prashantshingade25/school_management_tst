<?php

    require_once "../../includes/startup.php";

    $id = intval($_GET['id']);
    
    $db_obj = new dbconnection;

    $delete_class = "UPDATE classes SET status = 0 where id = $id";
    $delete_class = $db_obj->fire_query($delete_class);
   
    if($delete_class){
        header("location:".ROOT_URL."student/class/list.php");
    }