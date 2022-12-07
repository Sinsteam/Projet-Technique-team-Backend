<?php

echo "Bonjour";
$fonction = filter_input(INPUT_POST,"functionname");
echo "$fonction";
function ajoutUser()
{
    echo "coucou";
    $id_email = filter_input(INPUT_POST, "mail");
    $type = filter_input(INPUT_POST, "type");
    $profil = filter_input(INPUT_POST, "profil");
    $nom = filter_input(INPUT_POST, "nom");
    $prenom = filter_input(INPUT_POST, "prenom");
    $promotion = filter_input(INPUT_POST, "promo");
    $password = filter_input(INPUT_POST, "motdepasse");

    echo "$nom \n $prenom \n $id_email \n $type \n $profil \n $promotion \n $password";

    include_once "config.php";
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