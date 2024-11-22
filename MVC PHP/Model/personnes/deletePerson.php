<?php

require "../config/database.php";

function deletePerson($id) {
    global $db;
    $sql = "DELETE FROM personne WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id);
    
    if ($stmt->execute()) {
        return true;
    }else {
        return false;
    }
}