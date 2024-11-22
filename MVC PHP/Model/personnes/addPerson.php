<?php

require "../config/database.php";

function addPerson($nom, $age) {
    global $db;
    $sql = "INSERT INTO personne (nom, age) VALUE (:nom, :age)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":age", $age);
    
    if ($stmt->execute()) {
        return true;
    }else {
        return false;
    }
}