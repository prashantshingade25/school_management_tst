<?php

    require_once "../../includes/startup.php";

    $id = intval($_GET['id']);
    
    $db_obj = new dbconnection;

    $delete_student = "UPDATE students SET status = 0 where id = $id";
    $delete_student = $db_obj->fire_query($delete_student);
   
    if($delete_student){
        header("location:".ROOT_URL."student/student/list.php");
    }