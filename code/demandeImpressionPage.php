<?php
session_start();
include_once "demandeImpression.php";

//on récupère le fichier et on le met dans un dossier. ensuite on récupère le lien y accédant et on l'envoie avec les autres
$nomDuFichier = filter_input(INPUT_POST,"localisation_fichier");
$uploaddir = "../Fichiers/";
$lien_fichier = $_FILES['localisation_fichier']['name'];
echo "$lien_fichier";
$uploadfile = $uploaddir . basename($lien_fichier);

move_uploaded_file($_FILES['localisation_fichier']['tmp_name'], $uploadfile);

if(array_key_exists('submit', $_POST)){
    $impression = new Impression($lien_fichier,
        filter_input(INPUT_POST, "description_impression"),
        filter_input(INPUT_POST, "date_debut"),
        filter_input(INPUT_POST, "date_fin"),
        filter_input(INPUT_POST, "date_souhaitee"),
        filter_input(INPUT_POST,$_SESSION["user"]));
    demande_impression($impression);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test envoi Json</title>
</head>
<body>
<form method="post">
    <div>
        <label for="localisation_fichier">Choisissez le fichier :</label>
        <input type="file" id="localisation_fichier" name="localisation_fichier" accept="model/stl, model/obj">
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
        <input type="date" id="date_debut" name="date_debut">
    </div>
    <div>
        <input type="hidden" id="session">
    </div>
    <button name="submit" id="submit">Envoyer</button>
</form>
</body>
</html>

