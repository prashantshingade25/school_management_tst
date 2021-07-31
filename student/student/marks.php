<?php
    require_once "../../includes/startup.php";

    $id = intval($_GET['id']);

    $db_obj = new dbconnection;

    $sql = "SELECT a.id, a.first_name, a.middle_name, a.last_name, a.mobile_no, b.class_name, b.id as classid FROM students a INNER JOIN classes b ON a.class_id = b.id where a.id = $id and a.status = 1 AND b.status = 1";
    $student_data = $db_obj->getData($sql);

    $sql_subject = "SELECT a.subject_name, a.description, a.passing_marks, a.out_of_marks FROM subjects a INNER JOIN classes b ON a.classId = b.id WHERE b.status = 1 AND b.id = ".$student_data[0]['classid'];
    $subject_data = $db_obj->getData($sql_subject);

    // echo "<pre>"; print_r($subject_data);die;
    if(isset($_POST['submit'])){

    }
    require_once "../../layout/header.html";
    require_once "marks.html";
    require_once "../../layout/footer.html";