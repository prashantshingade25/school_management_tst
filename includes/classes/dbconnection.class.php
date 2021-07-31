<?php

    class dbconnection{
        
        private $host_name = HOST_NAME;
        private $user = USER;
        private $password = PASSWORD;
        private $db_name = DB_NAME;
        private $conn;

        public function __construct(){
            
            try {
                $this->conn = new mysqli($this->host_name, $this->user, $this->password, $this->db_name);
            }
            
            //catch exception
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
  
        }

        public function fire_query($query = ""){
            return ($query != null) ? mysqli_query($this->conn, $query) : false;
        }

        public function getData($query = ""){
            if($query != null){
                $result = $this->fire_query($query);
                $array = [];
                while($row = $result->fetch_assoc()) {
                    array_push($array, $row);
                }

                return $array;
            }else{
                return false;
            }
            
        }

        public function __destruct(){
            mysqli_close($this->conn);
        }
    }