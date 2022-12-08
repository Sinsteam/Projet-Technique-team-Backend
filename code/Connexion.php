<?php

require "Classe/Utilisateur.Class.php";
include_once "config.php";





function checkFromEsaipAD(Utilisateur $user){
    return true;
}
function checkuserifexist(Utilisateur $user)
{
    $UserMail = $user->getMail();
    $pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
    $stmt = $pdo->prepare("SELECT id FROM utilisateur WHERE Id_email= :mail");
    $stmt->bindParam('mail', $UserMail, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result) {
        return true;
    } else {
        return false;
    }


}

function checkpwd(Utilisateur $user){
    $pdo = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
    $stmt = $pdo->prepare("SELECT password FROM utilisateur WHERE Id_email= :mail");
    $stmt->bindParam('mail', $UserMail, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result[0] == $user->getPwd())
        return true;
    else
        return false;
}

function connect(utilisateur $user){
    //case were the user does not exist in the database
    if(!checkuserifexist($user)){
        //check on Esaip database if the user have an account there
        if(checkFromEsaipAD($user))
            //case were the user's credential for the esaip AD are correct
            create_account($user);
        else{
            //case were the user's credential for the esaip AD are not correct
            //TODO trouver un moyen de renvoyer un erreur
        }
    }
    //case were the user already exit in the database
    else{
        //verify if the password is good
        if(checkpwd($user)){
            //TODO créer une session pour l'utilisateur en question et le renvoyer sur la page d'accueil
        }
        else {
            //TODO trouver un moyen de renvoyer une erreur
        }
    }
    //case were the user already exit in the database


}




