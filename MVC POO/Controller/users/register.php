<?php

require_once "../Model/user.php";

if(isset($_POST["register"]))
{
    if(!empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["pass"]))
    {
        $nom = htmlspecialchars($_POST["nom"]);
        $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
        $pass = password_hash($_POST["pass"],PASSWORD_BCRYPT);
        $register = register($nom,$email,$pass);
        header("location:/");
    }
}
