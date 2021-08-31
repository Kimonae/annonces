<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</head>
<body>

<?php



require_once("connexion.php");
require_once("utilisateurs.php");
require_once("form2.php");



$form2 = new Form2($_POST);
echo $form2->input('nom');
echo $form2->input('password');
echo $form2->input('admail');
echo $form2->submit();


    
    if(isset($_POST["nom"]) && !empty($_POST["nom"])
   && isset($_POST["password"]) && !empty($_POST["password"])
   && isset($_POST["admail"]) && !empty($_POST["admail"])){

        $id = strip_tags($_GET["id"]);
        $nom = strip_tags($_POST["nom"]);
        $admail = strip_tags($_POST["admail"]);
        $password = strip_tags($_POST["password"]);


        $sql = $db->prepare("INSERT INTO users (nom, admail, password) VALUES (:nom, :admail, :password");
        $sql->bindValue('nom', $nom);
        $sql->bindValue('admail', $admail);
        $sql->bindValue('password', $password);
        try{
            $exec->execute();
        }catch(PDOException $e){
            echo "erreur requete : ".$e->getMessage();
            die();
        }
        if($exec){
            return $exec;

        }else{ 
            return false;      
        }
        $exec->closeCursor();
    }


?>



<div id="Accueil">
<a href="index.php">
<input type="button" value="Accueil">
</a>
    
</body>
</html>