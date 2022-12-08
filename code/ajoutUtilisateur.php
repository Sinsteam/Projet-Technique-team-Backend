<?php
include_once "Classe/Utilisateur.Class.php";
include_once "config.php";

echo "Bonjour";




$fonction = filter_input(INPUT_POST,"functionname");
echo "$fonction";
function ajoutUser()
{
    $ajoutUtilisateur = new Utilisateur(filter_input(INPUT_POST, "mail"),
        filter_input(INPUT_POST, "type"),
        filter_input(INPUT_POST, "profil"),
        filter_input(INPUT_POST, "nom"),
        filter_input(INPUT_POST, "prenom"),
        filter_input(INPUT_POST, "promo"),
        filter_input(INPUT_POST, "motdepasse"));
    echo "coucou";


    $pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
    $req = $pdo->prepare("insert into utilisateur (Id_email,type,profil,nom,prenom,promotion,password) values (:id_email,:type,:profil,:nom,:prenom,:promotion,:password)");
    $req->bindParam(":id_email", $id_email);
    $req->bindParam(":type", $type);
    $req->bindParam(":profil", $profil);
    $req->bindParam(":nom", $nom);
    $req->bindParam(":prenom", $prenom);
    $req->bindParam(":promotion", $promotion);
    $req->bindParam(":password", $password);
    $req->execute();
}