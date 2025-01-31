<?php

require_once "../Model/user.php";

if(isset($_POST["login"]))
{
    if(!empty($_POST["email"]) && !empty($_POST["pass"]))
    {
        $email = htmlspecialchars($_POST["email"]);
        $pass = htmlspecialchars($_POST["pass"]);

        if(login($email,$pass))
        {
            $_SESSION["user"] == true;
            header("location:/home");
        }
    }
}
