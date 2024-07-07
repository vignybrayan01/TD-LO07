
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerVin.php');
require ('../controller/ControllerProducteur.php');
require ('../controller/ControllerCave.php');
require ('../controller/ControllerRecolte.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

$action = $param["action"];

unset($param['action']);
// --- Liste des méthodes autorisées

$args=$param;

switch ($action) {
    
    //cas pour le vin
 case "vinReadAll" :
 case "vinReadOne" :
 case "vinReadId" :
 case "vinCreate" :
 case "vinCreated" :
 case "vinDeleted" :
  ControllerVin::$action($args);
  break;

    //cas pour le producteur
 case "producteurReadAll" :
 case "producteurReadOne" :
 case "producteurReadId" :
 case "producteurCreate" :
 case "producteurCreated" :
 case "producteurReadRegion" :
 case "producteurReadNbreProductor" :
 case "producteurDeleted" :
  ControllerProducteur::$action($args);
  break;

//cas pour la recolte
 case "recolteReadAll" :
 case "recoltetraitement" :
 case "recolteReadId" :
 case "recolteCreate" :
 case "recolteCreated" :
     ControllerRecolte::$action();
  break;

  //cas pour la documentation
 case "mesPropositions" :
     ControllerCave::$action();
  break;

 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerCave::$action();
}
?>
<!-- ----- Fin Router1 -->

