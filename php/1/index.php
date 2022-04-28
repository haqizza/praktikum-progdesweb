<?php
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic & CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process.php" method="get">
        <h3>Country - City Data Entry</h3>
        <div class="container">
            <label for="countryName">Country Name</label>
            <input name="countryName" type="text">

            <label for="countryCode">Country Code</label>
            <input name="countryCode" type="text">

            <label for="cityName">City Name</label>
            <input name="cityName" type="text">

            <label for="cityPopulation">City Population</label>
            <input name="cityPopulation" type="text">
        </div>
        <div>
            <input id="submit" type="submit" value="Submit">
            <input id="reset" type="reset" value="Reset">
        </div>
    </form>
    <hr>

    <table>
        <tr>
            <th>No</th>
            <th>Country Name</th>
            <th>Country Code</th>
            <th>City Name</th>
            <th>City Population</th>
        </tr>
        <?php
            $db = new Database();
            
            $datas =  $db->getCountryCityData();
            foreach ($datas as $index => $data) {
                echo "<tr>" .
                "<td>" . ($index + 1) . "</td>" .
                "<td>" . $data['country_name'] . "</td>" .
                "<td>" . $data['country_code'] . "</td>" .
                "<td>" . $data['city_name'] . "</td>" .
                "<td>" . $data['city_population'] . "</td>" .
                "</tr>";
            }
        ?>
    </table>
</body>
</html>