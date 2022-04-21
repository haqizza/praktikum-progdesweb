<?php
    ini_set('display_errors', 1);

    class Database{
        private $host = "localhost";
        private $username = "haqizza";
        private $password = "10qp29wo";
        private $database = "country_data";
        public $connection = "";

        function __construct(){

        }

        function connectDatabase(){
            $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            
            if(!$this->connection){
                die("could not connect: " . mysql_error());
            }
        }
        
        function closeDatabase(){
            mysqli_close($this->connection);
        }
    }
?>