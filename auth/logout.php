<?php
    require_once "../includes/startup.php";

    Session::sessionStop();

    header("location:".ROOT_URL."auth/login.php");