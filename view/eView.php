<?php

include_once "../data.php";
include_once "header.php";
include "../controller/eController.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strana za zaposlene</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div id="glavniDiv">
        <div>
            <h3>Pretraga po imenu i prezimenu klijenta:</h3>
            <div>
                <form method="post">
                    <div>
                        <label for="klijent">Klijent</label>
                        <input type="text" id="klijent" name="klijent" required>
                    </div>
            </div>
            <br>
            <input type="submit" value="Nađi klijenta" id="nadjiKl" name="nadjiKl">
            </form>
            <br><br>
            <?php

            if (isset($_POST["nadjiKl"])) {
                $clientName = $_POST["klijent"];
                eController::findByClient($clientName);
            }
            ?>
        </div>

        <div>
            <h3>Pretraga po imenu pacijenta:</h3>
            <div>
                <form method="post">
                    <div>
                        <label for="pacijent">Pacijent</label>
                        <input type="text" id="pacijent" name="pacijent" required>
                    </div>
            </div>
            <br>
            <input type="submit" value="Nađi pacijenta" id="nadjiPa" name="nadjiPa">
            </form>
            <br><br>
            <?php
            if (isset($_POST["nadjiPa"])) {
                $petName = $_POST["pacijent"];
                eController::findByPet($petName);
            }

            ?>
        </div>

    </div>

</body>

</html>

