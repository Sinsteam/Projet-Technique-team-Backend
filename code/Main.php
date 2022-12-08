<?php
include_once "Connexion.php";
if(array_key_exists('submit1', $_POST)){
    $user = new Utilisateur($_POST["mail"],$_POST["password"], null,null, null,);
    echo($user->getMail() . " " . $user->getPwd());
    connect($user);
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form method="post">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer l'addresse mail" name="mail" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" name='submit1' value='LOGIN' class="button" />
    </form>
</div>
</body>

