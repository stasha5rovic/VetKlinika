<?php
include "data.php";

if (isset($_POST["login"])){

    foreach($_SESSION["korisnici"] as $korisnik){
        if($korisnik->getEmail() == $_POST['email'] && $korisnik->getPassword() == $_POST['password']){
            $_SESSION["logovani_korisnik"] = $korisnik;
            //echo "Logovani korisnik: ".  $_SESSION["logovani_korisnik"] ->getName();
            if($_SESSION["logovani_korisnik"]->getType() == "employee"){
                include "view/eView.php";
                exit();
            }
            }
        }
        
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Klinika</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Dobro došli u našu Vet Kliniku!</h1>
    </header>

    <h3>Imate nalog? Ulogujte se ovde:</h3>
    <div id="divForma">
        <form id="forma">
            <div>
                <label for="email">Vaša email adresa</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Vaša lozinka</label>
                <input type="text" id="password" name="password" required>
            </div>
            <br><br>
            <input type="submit" value="Uloguj me!" id="login" name="login">
        </form>
    </div>
</body>

</html>

