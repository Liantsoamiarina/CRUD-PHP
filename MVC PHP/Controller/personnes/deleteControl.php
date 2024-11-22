<?php
require_once "../Model/personnes/deletePerson.php";

if (isset($_POST['deletePers'])) {
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $delete = deletePerson($id);
        if ($delete) {
            header("location:/");
        }else {
            echo ("Erreur de suppresion");
        }
    }else {
        header("location:/");
    }
}