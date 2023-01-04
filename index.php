<?php
include "model/user.php";
include "model/admin.php";
include "model/client.php";
include "model/employee.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Klinika</title>
</head>
<body>
    <header>
        <h1>Dobro došli u našu Vet Kliniku!</h1>
    </header>
    
    <h3>Imate nalog? Ulogujte se ovde:</h3>
    <br>
    <label for="email">Vaša email adresa</label>
    <input type="text" id="email" name="email">
    <br><br>
    <label for="password">Vaša lozinka</label>
    <input type="text" id="password" name="password">
    <br><br>
    <input type="submit" value="Uloguj me!" id="login" name="login">
    
</body>
</html>


<?php

$c1 = new Client(3, "Jadzia Dax", "dax@hotmail.com", "dax123", "+38161222964", "client");
$e1 = new Employee(1, "Jean-Luc Picard", "picard@gmail.com", "picard123", "+445215878", "employee", "doctor");
$a1 = new Admin(2, "Ellen Ripley", "ripley@yahoo.com", "ripley123", "+38160251547", "admin");

$nizKorisnika = [];

array_push($nizKorisnika, $e1);
array_push($nizKorisnika, $a1);
array_push($nizKorisnika, $c1);


echo "<br>";
echo "Lista korisnika: "."<br>";
 foreach($nizKorisnika as $nk){
    echo "Korisnik: ".$nk->getName() . "<br>";
 } 


// if (isset($_POST["login"])){
//     $email = $_POST['email'];
//     $pass = $_POST['password'];

//     foreach($nizKorisnika as $nk){
//         if($nk->getEmail() == $email && $nk->getPassword()){
//             if($nk->getType == "admin"){
//                 header("Location: view/aView.php");
//                 exit();
//         } else if($nk->getType() == "employee") {
//                 header("Location:view/eView.php");
//                 exit();
//         } else {
//             header("Location: view/cView.php");
//             exit();
//         } 
        
//     } echo "Pogrešna šifra ili mejl, pokušajte ponovo.";
// }
// }




?>