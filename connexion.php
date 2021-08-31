<?php 

$servername="localhost";
$dbname ="annonce";
$username ="root";
$password ="dada";

try {
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOEXCEPTION $e){

    echo "La connexion n'a pas pu aboutir. Veuillez recommencer ultérieurement". $e ->getMessage();
}