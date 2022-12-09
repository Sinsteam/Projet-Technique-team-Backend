<?php
include_once "Classe/Utilisateur.Class.php";
include_once "config.php";


$ajoutUtilisateur = new Utilisateur(filter_input(INPUT_POST, "mail"),
    filter_input(INPUT_POST, "type"),
    filter_input(INPUT_POST, "profil"),
    filter_input(INPUT_POST, "nom"),
    filter_input(INPUT_POST, "prenom"),
    filter_input(INPUT_POST, "promo"),
    filter_input(INPUT_POST, "motdepasse"));
echo "coucou";

//on mets les valeurs de l'objet récupéré dans des variables pour préparer l'envoi
$mail = $ajoutUtilisateur->getMail();
$type = $ajoutUtilisateur->getType();
$profil = $ajoutUtilisateur->getProfile();
$nom = $ajoutUtilisateur->getNom();
$prenom  = $ajoutUtilisateur->getPrenom();
$promotion = $ajoutUtilisateur->getPromotion();
$password = password_hash($ajoutUtilisateur->getPwd(),PASSWORD_DEFAULT);
echo "$password";

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