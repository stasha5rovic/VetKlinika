<?php

session_start();

include_once "model/user.php";
include_once "model/admin.php";
include_once "model/client.php";
include_once "model/employee.php";
include_once "model/animal.php";
include_once "model/chart.php";
include_once "model/visit.php";





$c1 = new Client(3, "Jadzia Dax", "dax@hotmail.com", "dax123", "+38161222964", "client");
$e1 = new Employee(1, "Jean-Luc Picard", "picard@gmail.com", "picard123", "+445215878", "employee", "doctor");
$a1 = new Admin(2, "Ellen Ripley", "ripley@yahoo.com", "ripley123", "+38160251547", "admin");

$pet1 = new Animal(1, "cat", "Spot", "19-07-2019", 4.2);
$chart1 = new Chart(1, 3);

$listOfPets = [];
array_push($listOfPets, $pet1);
$c1->setListOfPets($listOfPets);

$nizKorisnika = [];

array_push($nizKorisnika, $e1);
array_push($nizKorisnika, $a1);
array_push($nizKorisnika, $c1);



$_SESSION["korisnici"] = $nizKorisnika;







?>