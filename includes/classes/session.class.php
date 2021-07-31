<?php

    class Session{

        public static function sessionStatus(){
            return (session_id() == '') ? false : true;
        }

        public static function sessionStart(){
            $sessionstatus = self::sessionStatus();

            ($sessionstatus == false) ? session_start() : '';  
        }

        public static function sessionStop(){
            $sessionstatus = self::sessionStatus();

            ($sessionstatus == true) ? session_destroy() : '';
        }

        public static function setKey($key, $value){
            $_SESSION[$key] = $value;
        }

        public static function getKey($key){
            return (isset($_SESSION[$key])) ? $_SESSION[$key] : "";
        }
    }