<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamallows :3</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</head>
<body>

<center>
<h3> Bienvenue sur Chamallows :3 <h3>
    <h4>Comblez votre coeur, avec des annonces dédiées aux chamallows. <h4>
</center>
  
<div id="login">
<a href="login.php">
<input type="button" value="Connexion" />
</a>
</div>





<?php
require_once("connexion.php");
require_once("produitspoo.php");


$sql ="SELECT id, titre, photo, description, categorie, prix, datepublication, lieu FROM produits";
$query = $db->prepare($sql);
$query->execute();


while($d = $query->fetch())  {
    echo "<div class ='border border-dark-1 w-25 container'>";
echo "<div class ='annonce'>";

echo "<div class='titre'><h4>" .$d['titre'] . "</h4></div>";
echo "<div class='photo'> <img src='img/". $d['photo'] . "'></img> </div>";
echo "<h6> Catégorie: </h6>" ."<div class='cat'>" .$d['categorie'] . "</div>";
echo "<h6>Description:</h6>"."<div class='description'>" .$d['description'] . "</div>";
echo "<h6> Prix et Lieu: </h6>" ."<div class='prix'>" .$d['prix'] . "€". "&nbsp; &nbsp;".$d['lieu'] . "</div>";
echo "<div class='date'>" .$d['datepublication'] . "</div>";


echo "</div>";
echo "</div>";

}



?>

<nav>
<div class="daaa"> 

            <label for="titre">Titre</label>
            <input type="text" name="nom" value="<?=$d["titre"]?>"> 
        </div>

        <div class="daaa"> <br> <br>
            <label for="categorie">Catégorie</label>
            <input type="text" name="categorie" value="<?=$d["categorie"]?>"> 
        </div>
        <div class="daaa"> <br> <br> <br> <br> 
            <label for="prix">Prix</label>
            <input type="int" name="prix" value="<?=$d["prix"]?>"> 
        </div>
        <div class="daaa"> <br> <br> <br> <br> <br> <br> 
            <label for="datepublication">Date de publication </label>
            <input type="date" name="datepublication" value="<?=$d["datepublication"]?>"> 
        </div>
        <div class="daaa"> <br> <br> <br> <br> <br> <br> <br> <br>
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" value="<?=$d["lieu"]?>"> 
        </div>
 <div class="daaa"> <br> <br> <br> <br> <br> <br> <br> <br>
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" value="<?=$d["lieu"]?>"> 
        </div>

<div id="cate"> 

</div>

<div id="Chamallow">
<a href="https://fr.wikipedia.org/wiki/Guimauve_(confiserie)">
<input type="button" value="En savoir plus sur les chamallows" />
</a>

<div id="rond1"> </div>
<div id="rond2"> </div>
<div id="rond3"> </div>
<div id="rond4"> </div>
<div id="rond5"> O </div>
<div id="rond6"> O </div>

<div id="ann">
<a href="ajout.php">
<input type="button" value="Ajouter une annonce" />
</a>
</div>
</nav>
</body>
</html>