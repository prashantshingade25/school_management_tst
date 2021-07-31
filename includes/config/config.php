<?php
    ob_start();
    // echo "<pre>"; print_r($_SERVER);
    /*
        Project Details
    */

    define("PROJECT_NAME", "School Management");


    /*
        App URL & Paths
    */
    define('PROTOCOL', $_SERVER['REQUEST_SCHEME']);

    define('DOMAIN', $_SERVER['HTTP_HOST']);
    
    define('ROOT_FOLDER', $_SERVER['DOCUMENT_ROOT'].'\prashant');
    
    define("ROOT_URL", PROTOCOL."://".DOMAIN."/prashant/");

    define("IMAGES_URL", ROOT_URL."assets/img/");
    define("JS_URL", ROOT_URL."assets/js/");
    

    /*
        Folder Paths
    */

    define('INCLUDES_PATH', ROOT_FOLDER.DIRECTORY_SEPARATOR."includes".DIRECTORY_SEPARATOR);
    define('CLASSES_PATH', INCLUDES_PATH."classes".DIRECTORY_SEPARATOR);
    define('CONFIG_PATH', INCLUDES_PATH."config".DIRECTORY_SEPARATOR);

    /*
        Database Connection
    */

    define('HOST_NAME', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'school_management');