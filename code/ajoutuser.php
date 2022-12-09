<?php
include_once "ajoutUtilisateur.php";
if(array_key_exists('submit', $_POST)){
    $user = new Utilisateur(filter_input(INPUT_POST, "mail"),
        filter_input(INPUT_POST, "type"),
        filter_input(INPUT_POST, "profil"),
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
        <label for="type">Type :</label>
        <input type="number" id="type" name="type">
    </div>
    <div>
        <label for="profil">profil :</label>
        <input type="number" id="profil" name="profil">
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
<script>
    /*function sendJSON(){
        let nom = document.querySelector('#nom');
        let mail = document.querySelector('#mail');
        let prenom = document.querySelector('#prenom');
        let type = document.querySelector('#type');
        let profil = document.querySelector('#profil');
        let promo = document.querySelector('#promo').value;
        let mdp = document.querySelector('#mdp');

        // Creating a XHR object
        let xhr = new XMLHttpRequest();
        let url = "recupJson.php";

        // open a connection
        xhr.open("POST", url, true);

        // Set the request header i.e. which type of content you are sending
        xhr.setRequestHeader("Content-Type", "application/json");

        // Converting JSON data to string
        var data = {
            "mail": mail.value,
            "type": type.value,
            "profil":profil.value,
            "nom": nom.value,
            "prenom": prenom.value,
            "promo":promo.value,
            "mdp":mdp.value
        };
        // Sending data with the request
        xhr.send(data);
    }*/
</script>
