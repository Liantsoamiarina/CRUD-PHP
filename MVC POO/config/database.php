<?php 

/*
    Pour se connecter avec une base de données
    On utilise une pilote
        PHP : PDO ou Mysqli
        Java : Jdbc

*/
// on va se connecter avec la bdd
$username = "root";
$pass = "";
// on definit une variable de connexion
try {
    $db = new PDO("mysql:host=localhost;dbname=4juin",$username,$pass);
} catch (PDOException $e) {
    die("erreur de connexion".$e->getMessage());
}