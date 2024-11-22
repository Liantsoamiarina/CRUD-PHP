<?php

require "../config/database.php";

function showPerson() {
    global $db;
    $sql = "SELECT * FROM personne";
    $stmt = $db->query($sql);
    $resultat = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $resultat;
}