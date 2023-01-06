<?php

session_start();

include_once "model/user.php";
include_once "model/admin.php";
include_once "model/client.php";
include_once "model/employee.php";





$c1 = new Client(3, "Jadzia Dax", "dax@hotmail.com", "dax123", "+38161222964", "client");
$e1 = new Employee(1, "Jean-Luc Picard", "picard@gmail.com", "picard123", "+445215878", "employee", "doctor");
$a1 = new Admin(2, "Ellen Ripley", "ripley@yahoo.com", "ripley123", "+38160251547", "admin");

$nizKorisnika = [];

array_push($nizKorisnika, $e1);
array_push($nizKorisnika, $a1);
array_push($nizKorisnika, $c1);



$_SESSION["korisnici"] = $nizKorisnika;







?>