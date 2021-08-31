<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<header> <h4> Connectez vous pour gérer vos annonces, ou contacter un vendeur. </h4> <header>

<body>
<?php

require_once("connexion.php");
require_once("utilisateurs.php");
require_once("form.php");



$form = new Form($_POST);
echo $form->input('name');
echo $form->input('password');
echo $form->submit();





?>

<div id="sign"> Vous n'avez pas de compte ? Inscription gratuite ! </div>
<div id="signup">
<a href="inscrip.php">
<input type="button" value="S'inscrire">
</a>
</div>
<div id="Accueil">
<a href="index.php">
<input type="button" value="Accueil">
</a>


</body>

</html>


