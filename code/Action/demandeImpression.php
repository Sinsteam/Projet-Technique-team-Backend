<?php
include_once "../config.php";
function demande_impression(Impression $impression){
//on mets les valeurs de l'objet récupéré dans des variables pour préparer l'envoi
    $localisation_fichier = $impression->getLocalisationFichier();
    $description_impression = $impression->getDescriptionImpression();
    $date_debut = $impression->getDateDebut();
    $date_fin = $impression->getDateFin();
    $date_souhaitee = $impression->getDateSouhaitee();
    $mail_user = $impression->getMailUser();




    $pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
    $req = $pdo->prepare("insert into impression (localisation_fichier,description_impression,date_debut,date_fin,date_souhaitee,id_email_demandeur) values (:localisation_fichier,:description_impression,:date_debut,:date_fin,:date_souhaitee,:mail_user)");
    $req->bindParam(":localisation_fichier",$localisation_fichier );
    $req->bindParam(":description_impression", $description_impression);
    $req->bindParam(":date_debut", $date_debut);
    $req->bindParam(":date_fin", $date_fin);
    $req->bindParam(":date_souhaitee", $date_souhaitee);
    $req->bindParam(":mail_user", $mail_user);
    $req->execute();
}

