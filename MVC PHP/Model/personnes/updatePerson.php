<?php

require "../config/database.php";

function updatePerson($id, $nom, $age){
    global $db;
    $sql = "UPDATE personne SET nom=:nom, age=:age WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":age", $age);
    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {
        return true;
    }else {
        return false;
    }
}