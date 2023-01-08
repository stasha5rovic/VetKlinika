<?php
include_once "../data.php";
include_once "header.php";



echo "Ovo je strana za klijente." . "<br>";

echo "<br>";

// $visits = $listOfVisits;

// $myVisits = [];

// foreach($visits as $vis){
//     if($vis->getClientID() == $user->getId()){
//         array_push($myVisits, $vis);
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strana za klijente</title>
</head>
<body>

<div id="table_div">
        <h3>Ovo je lista vaših poseta:</h3>
        <table border="2px">
            <thead>
                <th>Datum</th>
                <th>Dijagnoza</th>
                <th>Terapija</th>
            </thead>
            <tbody>
                <?php
                    foreach($listOfVisits as $lov):
                ?>
                <tr>
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






