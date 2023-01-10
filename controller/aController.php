<?php

include_once "../model/user.php";

$korisnici = $_SESSION["korisnici"];

class aController{

    public static function addUser($id ,$name, $email, $password, $phone, $type){
        $user = new User($id ,$name, $email, $password, $phone, $type);
        array_push($korisnici, $user);
    }

    public static function deleteUser(){

    }

    public static function editUser(){

    }


}




?>