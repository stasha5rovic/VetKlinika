<?php
include "data.php";
include "list.php";



if (isset($_POST["login"])) {

    foreach ($_SESSION["korisnici"] as $korisnik) {
        if ($korisnik->getEmail() == $_POST['email'] && $korisnik->getPassword() == $_POST['password']) {
            $_SESSION["logovani_korisnik"] = $korisnik;
            
            $user = $_SESSION["logovani_korisnik"];
            if ($user->getType() == "employee") {
                header("Location:view/eView.php");
                exit();
            } elseif ($user->getType() == "client") {
                header("Location:view/cView.php");
                exit();
            } elseif ($user->getType() == "admin") {
                header("Location:view/aView.php");
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
    <link rel="stylesheet" href="css/styleIndex.css">
</head>

<body>
    <header>
        <h1>Dobro došli u našu Vet Kliniku!</h1>
    </header>
<div id="glavniDiv">
    <div id="table_div">
        <h3>Ovo su usluge koje nudimo:</h3>
        <table border="2px">
            <thead>
                <th></th>
                <th>Naziv usluge</th>
                <th>Cena</th>
            </thead>
            <tbody>
                <?php
                    foreach($listOfServices as $los):
                ?>
                <tr>
                    <td><?php echo $los["id"];  ?></td>
                    <td><?php echo $los["naziv"]; ?></td>
                    <td><?php echo $los["cena"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div>
    <h3>Imate nalog? Ulogujte se ovde: </h3>
    <div id="divForma">
        <form id="forma" method="post">
            <div>
                <label for="email">Vaša email adresa</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Vaša lozinka</label>
                <input type="text" id="password" name="password" required>
            </div>
            <br>
            <input type="submit" value="Uloguj me!" id="login" name="login">
        </form>
    </div>
    </div>
</div>   
</body>

</html>

