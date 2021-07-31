<?php
    require_once "../includes/startup.php";

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $db_obj = new dbconnection;

        $sql = "select id, name, username, user_type, status from users where username = '".$username."' and password = '".$password."' and status = '1' and user_type = 'admin' limit 0,1";
        $user_data = $db_obj->getData($sql);
        //echo "<pre>";print_r($user_data);die;
        if(count($user_data) > 0){
            Session::setKey('id', $user_data[0]['id']);
            Session::setKey('name', $user_data[0]['name']);
            Session::setKey('username', $user_data[0]['username']);
            Session::setKey('user_type', $user_data[0]['user_type']);
            Session::setKey('status', $user_data[0]['status']);
            
            header("location:".ROOT_URL."dashboard.php");
        }else{
            
        }
        
    }

    require_once "login1.html";