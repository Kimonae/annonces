<?php

require_once("connexion.php");
require_once("produitspoo.php");

if(isset($_GET["id"])&& !empty($_GET["id"])) {

$id = strip_tags($_GET["id"]);
$sql = "SELECT id FROM produits WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT);

$query->execute();
}

if(isset($_GET["id"])&& !empty($_GET["id"])) {

$sql = "DELETE FROM produits WHERE id = :id";
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT); 
$query->execute();

}


?>
