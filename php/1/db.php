<?php
    ini_set('display_errors', 1);

    class Database{
        private $host = "localhost";
        private $username = "haqizza";
        private $password = "10qp29wo";
        private $database = "country_data";
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

        function getCountryCityData(){
            $this->connectDatabase();
            
            $query = "SELECT * FROM country_city";
            
            $result = mysqli_query($this->connection, $query);
    
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
    
            $this->closeDatabase();
    
            return $data;
        }

        function saveCountryCityData($countryName, $countryCode, $cityName, $cityPopulation){
            $this->connectDatabase();
    
            $query = "INSERT INTO country_city(country_name, country_code, city_name, city_population) VALUES('$countryName', '$countryCode', '$cityName', $cityPopulation)";
            
            $result = mysqli_query($this->connection, $query);
    
            if(!$result){
                die('Could not get data: ' . mysqli_error());
            }
            
            $this->closeDatabase();
        }
    }
?>