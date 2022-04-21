<?php
    include('controller.php');

    if(!isset($_GET["countryName"])){
        print_r($_GET);
        $countryName = $_GET["countryName"];
        $countryCode = $_GET["countryCode"];
        $cityName = $_GET["cityName"];
        $cityPopulation = $_GET["cityPopulation"];

        saveCountryCityData($countryName, $countryCode, $cityName, $cityPopulation);        

        back();
    }
    else{
        back();
    }

    function back(){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>