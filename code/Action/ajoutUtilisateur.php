<?php
require "../Classe/Utilisateur.Class.php";
include_once "../config.php";
include_once "Connexion.php";
function ajoutUtilisateur(Utilisateur $user)
{
//on mets les valeurs de l'objet récupéré dans des variables pour préparer l'envoi





    $mail = $user->getMail();
    $type = $user->getType();
    $profil = $user->getProfile();
    $nom = $user->getNom();
    $prenom = $user->getPrenom();
    $promotion = $user->getPromotion();
    $password = password_hash($user->getPwd(), PASSWORD_DEFAULT);

    if (checkuserifexist($user)){
        return false;
    }
    else{
        $pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
        $req = $pdo->prepare("insert into utilisateur (Id_email,type,profil,nom,prenom,promotion,password) values (:id_email,:type,:profil,:nom,:prenom,:promotion,:password)");
        $req->bindParam(":id_email", $mail);
        $req->bindParam(":type", $type);
        $req->bindParam(":profil", $profil);
        $req->bindParam(":nom", $nom);
        $req->bindParam(":prenom", $prenom);
        $req->bindParam(":promotion", $promotion);
        $req->bindParam(":password", $password);
        $req->execute();
        return true;
    }



}