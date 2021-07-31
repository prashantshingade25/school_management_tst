<?php
    require_once "../../includes/startup.php";

    if(isset($_POST['submit'])){

        $db_obj = new dbconnection;

        $classname = trim($_POST['className']);
        //echo "<pre>"; print_r($_POST);die;

        $insert_class = "INSERT INTO classes (class_name, status, createdBy) VALUES ('".$classname."', 1, '".Session::getKey('id')."')";
        $save_class = $db_obj->fire_query($insert_class);

        $sql = "select id from classes where class_name = '".$classname."' limit 0,1";
        $class_data = $db_obj->getData($sql);
        //echo "<pre>";print_r($user_data);die;
        if(count($class_data) > 0){
            $classid = $class_data[0]['id'];
        }

        $subject_count = count($_POST['subject_name']);

        if($subject_count > 0){
            for($i=0;$i<$subject_count;$i++){

                $subject_name = trim($_POST['subject_name'][$i]);
                $description = trim($_POST['description'][$i]);
                $passing_marks = trim($_POST['passing_marks'][$i]);
                $out_of_marks = trim($_POST['out_of_marks'][$i]);

                $insert_sql = "INSERT INTO subjects (classId, subject_name, description, passing_marks, out_of_marks, createdBy)";
                $insert_sql .= "VALUES ('".$classid."', '".$subject_name."', '".$description."', '".$passing_marks."', '".$out_of_marks."', '".Session::getKey('id')."')";
                $fire = $db_obj->fire_query($insert_sql);
            }
        }

        header("location:".ROOT_URL."student/class/list.php");
    }
    require_once "../../layout/header.html";
    require_once "create.html";
    require_once "../../layout/footer.html";