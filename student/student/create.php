<?php
    require_once "../../includes/startup.php";

    $db_obj = new dbconnection;

    $sql = "SELECT * FROM `classes` where status = 1";
    $class_data = $db_obj->getData($sql);

    if(isset($_POST['submit'])){

        $first_name = trim($_POST['first_name']);
        $middle_name = trim($_POST['middle_name']);
        $last_name = trim($_POST['last_name']);
        $mobile_no = trim($_POST['mobile_no']);
        $classId = trim($_POST['classId']);

        $insert_student = "INSERT INTO students (class_id, first_name, middle_name, last_name, mobile_no, status, createdBy)";
        $insert_student .= " VALUES ('".$classId."', '".$first_name."', '".$middle_name."', '".$last_name."', '".$mobile_no."', 1, '".Session::getKey('id')."')";
        $save_student = $db_obj->fire_query($insert_student);

        if($save_student){
            header("location:".ROOT_URL."student/student/list.php");
        }
    }
    require_once "../../layout/header.html";
    require_once "create.html";
    require_once "../../layout/footer.html";