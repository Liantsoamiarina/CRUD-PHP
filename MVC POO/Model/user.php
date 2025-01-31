<?php 
require "../config/database.php";

function register($nom,$email,$pass)
{
    global $db;
    $sql = "INSERT INTO users(nom,email,password) VALUES(?,?,?)";
    $req = $db->prepare($sql);
    $req->execute([$nom,$email,$pass]);
}

function login($email,$password)
{
    global $db;
    $sql = "SELECT * FROM users WHERE email = ?";
    $req = $db->prepare($sql);
    $req->execute([$email]);

    if($req->rowCount()>0)
    {
        $user = $req->fetch(PDO::FETCH_OBJ);
        if(password_verify($password,$user->password))
        {
            // on crée une session pour l'utilisateur
            $_SESSION["user"] = [
                "id"=>$user->id,
                "nom"=>$user->nom,
                "email"=>$user->email
            ];
            $res = true;
            return $res;
        }
        else{
            echo "mot de passe incorrect";
        }
    }
    else{
        echo "email ou mot de passe incorrect";
    }
}