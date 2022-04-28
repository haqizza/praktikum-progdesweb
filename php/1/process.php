<?php
    include('db.php');

    if(isset($_GET["countryName"])){
        $countryName = $_GET["countryName"];
        $countryCode = $_GET["countryCode"];
        $cityName = $_GET["cityName"];
        $cityPopulation = $_GET["cityPopulation"];

        $db = new Database();

        $db->saveCountryCityData($countryName, $countryCode, $cityName, $cityPopulation);        

        // back();
    }
    else{
        back();
    }

    function back(){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>

