<?php 
require "../config/database.php";

function all()
{
    global $db;
    $sql = "SELECT * FROM articles";
    $req = $db->query($sql);
    $articles = $req->fetchAll(PDO::FETCH_OBJ);
    return $articles;
}

function add($nom,$description,$photo)
{
    global $db;
    $sql = "INSERT INTO articles (nom,description,photo) VALUES(?,?,?)";
    $req = $db->prepare($sql);
    $req->execute([$nom,$description,$photo]);
}

function delete($id)
{
    global $db;
    $sql = "DELETE FROM articles WHERE id =?";
    $req = $db->prepare($sql);
    $req->execute([$id]);
    
}

function show($id)
{
    global $db;
    $sql = "SELECT * FROM articles WHERE id = $id";
    $req = $db->query($sql);
    $article = $req->fetch(PDO::FETCH_OBJ);
    return $article;
}

function update($nom,$desc,$photo,$id)
{
    global $db;
    $sql = "UPDATE articles SET nom=?,description=?,photo=? WHERE id=?";
    $req = $db->prepare($sql);
    $req->execute([$nom,$desc,$photo,$id]);
    
}