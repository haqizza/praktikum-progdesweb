<?php
    ini_set('display_errors', 1);

    class Database{
        private $host = "localhost";
        private $username = "haqizza";
        private $password = "10qp29wo";
        private $database = "ester";
        public $connection = "";

        function __construct(){}

        function connectDatabase(){
            $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            
            if(!$this->connection){
                die("could not connect: " . mysql_error());
            }
        }
        
        function closeDatabase(){
            mysqli_close($this->connection);
        }

        function getCompanyData(){
            $this->connectDatabase();
            
            $query = "SELECT * FROM company_information";
            
            $result = mysqli_query($this->connection, $query);
    
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
    
            $this->closeDatabase();
    
            return $data;
        }
    }
?>