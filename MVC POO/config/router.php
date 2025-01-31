<?php
$cle = $_SERVER["REQUEST_URI"];

$routes = [
  [
    "cle"=>"/^\/$/",
    "page"=>"../Views/users/login.php",
  ],
  [
    "cle"=>"/^\/home+$/",
    "page"=>"../Views/home.php"
  ],
  [
    "cle"=>"/^\/contact$/",
    "page"=>"../Views/contact.php",
  ],
  [
    "cle"=>"/^\/nouveau$/",
    "page"=>"../Views/ajout.php"
  ],
  [
    "cle"=>"/^\/article\/save$/",
    "page"=>"../Controller/article/add.php"
  ],
  [
    "cle"=>"/^\/article\/delete\/[0-9]{1,}+$/",
    "page"=>"../Controller/article/delete.php"
  ],
  [
    "cle"=>"/^\/article\/show\/[0-9]{1,}+$/",
    "page"=>"../Views/edit.php"
  ],
  [
    "cle"=>"/^\/article\/update\/[0-9]{1,}+$/",
    "page"=>"../Controller/article/update.php"
  ],

  // routes pour les utilisateurs
  [
    "cle"=>"/^\/register+$/",
    "page"=>"../Views/users/register.php"
  ],
  [
    "cle"=>"/^\/register\/save+$/",
    "page"=>"../Controller/users/register.php"
  ],
  [
    "cle"=>"/^\/login+$/",
    "page"=>"../Controller/users/login.php"
  ],


];

foreach ($routes as $r) {
    if(preg_match($r["cle"],$cle))
    {
        require $r["page"];
        break;
    }

}

