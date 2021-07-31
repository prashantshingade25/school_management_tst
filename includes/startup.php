<?php
    
    require_once "config".DIRECTORY_SEPARATOR."config.php";

    require_once CLASSES_PATH."session.class.php";
    require_once CLASSES_PATH."dbconnection.class.php";

    Session::sessionStart();

    /*
        check session and user
    */

    // if(Session::sessionStatus() == false){
    //     header("Location:".ROOT_URL."auth/login.php");exit;
    // }else{
    //     header("Location:".ROOT_URL."dashboard.php");exit;
    // }