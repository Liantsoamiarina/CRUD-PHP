<?php 
$cle = $_SERVER["REQUEST_URI"];

$routes = [
  [
    "cle"=>"/^\/$/",
    "page"=>"../Views/home.php",
  ],
  [
    "cle"=>"/^\/inscription$/",
    "page"=>"../Views/inscription.php",
  ],
  [
    "cle"=>"/^\/savePerson$/",
    "page"=>"../Controller/personnes/incriptionControl.php"
  ],
  [
    "cle"=>"/^\/deletePerson$/",
    "page"=>"../Controller/personnes/deleteControl.php"
  ],
  [
    "cle"=>"/^\/updatePerson$/",
    "page"=>"../Controller/personnes/updateControl.php"
  ]   
];

$pageFound = false;

foreach ($routes as $r) {
    if(preg_match($r["cle"],$cle)){
      require $r["page"];
      $pageFound = true;
      break;
    }
}

if (!$pageFound) {
  require "../Views/notFound.php";
}

