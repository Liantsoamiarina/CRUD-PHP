<?php 
require "../Model/article.php";
    $url = $_SERVER["REQUEST_URI"];
    $chaine = explode("/",$url);
    $id = $chaine[count($chaine)-1];

if(isset($_POST["modifier"]))
{
    if(!empty($_POST["titre"] && $_POST["description"] && $_POST["photo"]))
    {
        $nom = htmlspecialchars($_POST["titre"]);
        $desc = htmlspecialchars($_POST["description"]);
        $photo = htmlspecialchars($_POST["photo"]);
        $update = update($nom,$desc,$photo,$id);
        header("location:/home");

    }
}