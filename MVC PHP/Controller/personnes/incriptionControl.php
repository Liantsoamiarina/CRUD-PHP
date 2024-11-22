<?php
require_once "../Model/personnes/addPerson.php";

if (isset($_POST['ajouter'])) {
    $nom = htmlspecialchars(trim($_POST['name']));
    $age = htmlspecialchars(trim($_POST['age']));

    $inscription = addPerson($nom, $age);
    if ($inscription) {
        header("location:/");
    }else {
        echo ("Erreur de l'inscription");
    }
}