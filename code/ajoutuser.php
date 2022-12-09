<?php
include_once "ajoutUtilisateur.php";
if(array_key_exists('submit', $_POST)){
    $user = new Utilisateur(filter_input(INPUT_POST, "mail"), 0,0,
        filter_input(INPUT_POST, "nom"),
        filter_input(INPUT_POST, "prenom"),
        filter_input(INPUT_POST, "promo"),
        filter_input(INPUT_POST, "mdp"));
    ajoutUtilisateur($user);
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
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="promo">Vous venez de quelle promo ?</label>
        <select id="promo" name="promo">
            <option value="Bachelor" selected>Bachelor</option>
            <option value="ingenieur">ingénieur</option>
            <option value="coucou">Coucou</option>
            <option value="yeah">Yeah</option>
        </select>
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="motdepasse">
    </div>
    <button name="submit" id="submit">Envoyer</button>
</form>
</body>
</html>
