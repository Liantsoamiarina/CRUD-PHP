<?php 

require "../Model/article.php";

$url = $_SERVER["REQUEST_URI"];
$chaine = explode("/",$url);
$id = $chaine[count($chaine)-1];

if(isset($id))
{
    $delete = delete($id);
    header("location:/home");
}