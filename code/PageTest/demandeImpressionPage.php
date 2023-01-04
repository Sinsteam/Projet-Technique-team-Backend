<?php
include_once "../Action/demandeImpression.php";
include_once "../Classe/Impression.Class.php";
include_once "../Classe/Utilisateur.Class.php";
$usertest = new Utilisateur("gdudouet.bach2023@esaip.org", 1, 2, "dudouet", "guillaume", "Bachelor", "password");
session_start();
$_SESSION["user"] = $usertest;
if(array_key_exists('submit', $_POST)){

    //on récupère le fichier et on le met dans un dossier. ensuite on récupère le lien y accédant et on l'envoie avec les autres
    $uploaddir = "Fichiers/";
    $uploadfile = "../../" . $uploaddir . basename($_FILES["fichier"]['name']);
    move_uploaded_file($_FILES["fichier"]['tmp_name'], $uploadfile);

    $impression = new Impression($_FILES["fichier"]['name'],
        filter_input(INPUT_POST, "description_impression"),
        filter_input(INPUT_POST, "date_debut"),
        filter_input(INPUT_POST, "date_fin"),
        filter_input(INPUT_POST, "date_souhaitee"),
        $_SESSION["user"]->getMail());
    demande_impression($impression);
}
?>
<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test envoi Json</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div>
        <label for="fichier">Choisissez le fichier :</label>
        <input type="file" id="fichier" name="fichier">
    </div>
    <div>
        <label for="description_impression">decrivez votre impression :</label>
        <input type="text" id="description_impression" name="description_impression">
    </div>
    <div>
        <label for="date_debut">date de debut&nbsp;:</label>
        <input type="date" id="date_debut" name="date_debut">
    </div>
    <div>
        <label for="date_fin">date de fin&nbsp;:</label>
        <input type="date" id="date_fin" name="date_fin">
    </div>
    <div>
        <label for="date_souhaitee">date souhaitee:</label>
        <input type="date" id="date_souhaitee" name="date_souhaitee">
    </div>
    <div>
        <input type="hidden" id="session">
    </div>
    <button name="submit" id="submit">Envoyer</button>
</form>
</body>
</html>

