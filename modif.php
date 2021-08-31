<?php
require_once("connexion.php");
require_once("produitspoo.php");


if(isset($_GET["id"]) && !empty($_GET["id"]) 
&& isset($_POST["titre"]) && !empty($_POST["titre"])
&& isset($_POST["photo"]) && !empty($_POST["photo"])
&& isset($_POST["description"]) && !empty($_POST["description"])
&& isset($_POST["categorie"]) && !empty($_POST["categorie"])
&& isset($_POST["prix"]) && !empty($_POST["prix"])
&& isset($_POST["datepublication"]) && !empty($_POST["datepublication"])
&& isset($_POST["lieu"]) && !empty($_POST["lieu"]))

{
    $id = strip_tags($_GET["id"]);
    $titre = strip_tags($_POST["titre"]);
    $photo = strip_tags($_POST["photo"]);
    $description = strip_tags($_POST["description"]);
    $categorie = strip_tags($_POST["categorie"]);
    $prix = strip_tags($_POST["prix"]);
    $datepublication = strip_tags($_POST["datepublication"]);
    $lieu = strip_tags($_POST["lieu"]);




$sql ="UPDATE produits SET titre=:titre, photo=:photo, description=:description, categorie=:categorie, prix=:prix, datepublication=:datepublication, lieu=:lieu WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT);
$query->bindValue(":titre", $titre, PDO::PARAM_STR);
$query->bindValue(":photo", $photo, PDO::PARAM_STR);
$query->bindValue(":description", $description, PDO::PARAM_STR);
$query->bindValue(":categorie", $categorie, PDO::PARAM_STR);
$query->bindValue(":prix", $prix, PDO::PARAM_INT);
$query->bindValue(":datepublication", $datepublication, PDO::PARAM_STR);
$query->bindValue(":lieu", $lieu, PDO::PARAM_STR);
$query->execute();


}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</head>
<body>

<form method="post">
        <div class="form-group"> 
            <label for="titre">Titre</label>
            <input type="text" name="nom" value="<?=$d["titre"]?>"> 
        </div>
        <div class="form-group"> 
            <label for="photo">Photo</label>
            <input type="file" name="image" value="<?=$d["photo"]?>"> 
        </div>
        <div class="form-group"> 
            <label for="description">Description du projet</label>
            <input type="text" name="description" value="<?=$d["description"]?>"> 
        </div>
        <div class="form-group"> 
            <label for="categorie">Catégorie</label>
            <input type="text" name="categorie" value="<?=$d["categorie"]?>"> 
        </div>
        <div class="form-group"> 
            <label for="prix">Prix</label>
            <input type="int" name="prix" value="<?=$d["prix"]?>"> 
        </div>
        <div class="form-group"> 
            <label for="datepublication">datepublication </label>
            <input type="date" name="datepublication" value="<?=$d["datepublication"]?>"> 
        </div>
        <div class="form-group"> 
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" value="<?=$d["lieu"]?>"> 
        </div>
    <input type="submit" value ="Modifier">


</form>



</body>
</html>