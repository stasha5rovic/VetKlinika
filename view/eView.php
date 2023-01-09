<?php

include_once "../data.php";
include_once "header.php";

echo "Ovo je strana za zaposlene.";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strana za zaposlene</title>
</head>
<body>

<div id="table_div">
        <h3>Lista svih poseta:</h3>
        <table border="2px">
            <thead>
                <th>ID klijenta</th>
                <th>ID pacijenta</th>
                <th>Datum</th>
                <th>Dijagnoza</th>
                <th>Terapija</th>
            </thead>
            <tbody>
                <?php
                    foreach($listOfVisits as $lov):
                ?>
                <tr>
                    <td><?php echo $lov->getClientID();  ?></td>
                    <td><?php echo $lov->getAnimalID();  ?></td>
                    <td><?php echo $lov->getDate();  ?></td>
                    <td><?php echo $lov->getDiagnosis(); ?></td>
                    <td><?php echo $lov->getMeds(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>




