<?php 

require("../Model/article.php");

if(isset($_POST["valider"]))
{
    if(!empty($_POST["titre"]) && !empty($_POST['description']) && !empty($_POST['photo']))
    {
        $nom = htmlspecialchars(trim($_POST['titre']));
        $desc = htmlspecialchars(trim($_POST['description']));
        $photo = htmlspecialchars($_POST['photo']);
        $save = add($nom,$desc,$photo);
        header("location:/home");
    }
}