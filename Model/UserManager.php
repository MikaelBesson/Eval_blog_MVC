<?php
require 'Classes/VerifInputController.php';
require 'Model/DB.php';

class UserManager {

    public function addUser() {
        $verif = new VerifInputController();
        $db = new DB();

        $pseudo = $verif->verifInput($_POST['pseudo']);
        $password = $verif->verifInput($_POST['password']);

        $req = $db->prepare("INSERT INTO user (pseudo, password) 
                                VALUES (:pseudo, :password)");

        $req->bindValue('pseudo', $pseudo);
        $req->bindValue('password', password_hash($password, PASSWORD_DEFAULT));
        $req->execute();
    }

}