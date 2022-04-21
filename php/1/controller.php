<?php
    include('db.php');

    function getCountryCityData(){
        $db = new Database();

        $db->connectDatabase();
        
        $query = "SELECT * FROM country_city";
        
        $result = mysqli_query($db->connection, $query);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);

        $db->closeDatabase();

        return $data;
    }

    function saveCountryCityData($countryName, $countryCode, $cityName, $cityPopulation){
        $db = new Database();
        
        $db->connectDatabase();

        $query = "INSERT INTO country_city(country_name, country_code, city_name, city_population) VALUES('$countryName', '$countryCode', '$cityName', $cityPopulation)";
        
        $result = mysqli_query($db->connection, $query);

        if(!$result){
            die('Could not get data: ' . mysqli_error());
        }
        
        $db->closeDatabase();
    }
?>