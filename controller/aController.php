<?php



$korisnici = $_SESSION["korisnici"];

class aController{

    public static function addUser($id ,$name, $email, $password, $phone, $type){
        $korisnik = array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "phone" => $phone,
            "type" => $type);
            $_SESSION["korisnici"][] = $korisnik;
            //array_push($_SESSION["korisnici"][], $korisnik);
            }

        
            
    

    public static function deleteUser(){

    }

    public static function editUser(){

    }


}




?>