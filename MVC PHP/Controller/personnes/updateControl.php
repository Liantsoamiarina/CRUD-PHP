<?php

require_once "../Model/personnes/updatePerson.php";

if (isset($_POST['updatePers'])) {
    if (!empty($_POST['id']) || !empty($_POST['name']) || !empty($_POST['age'])) {
        $id = $_POST['id'];
        $nom = htmlspecialchars(trim($_POST['name']));
        $age = htmlspecialchars(trim($_POST['age']));

        $update = updatePerson($id, $nom, $age);
        if ($update) {
            header("location:/");
        }else {
            echo ("Erreur de modification");
        }
    }
}