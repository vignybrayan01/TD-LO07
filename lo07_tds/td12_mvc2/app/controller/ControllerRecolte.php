
<!-- ----- debut ControllerVin -->
<?php
require_once '../model/ModelRecolte.php';

class ControllerRecolte {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerVin : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des vins
 public static function recolteReadAll() {
  $results = ModelRecolte::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  if (DEBUG)
   echo ("ControllerRecolte : recolteReadAll : vue = $vue");
  require ($vue);
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function recolteReadId($args) {
   //   if (DEBUG) echo ("ControllerVin:vinReadId:begin</br>");
     $results = ModelRecolte::getAllId();
     //passage du nom de la méthode cible pour le champ action du formulaire
     //solution 1 : vinReadOne
     //solution 2 : vinDeleted
     $target=$args['target'];
     if (DEBUG) echo ("ControllerVin:vinReadId : target=$target</br>");
     
     include 'config.php';
  $vue = $root . '/app/view/recolte/viewId.php';
  require ($vue);
 }

 public static function recolteDeleted($args) {
     $vin_id = $_GET['id'];
     $results = ModelRecolte::delete($vin_id);
     //passage du nom de la méthode cible pour le champ action du formulaire
     //solution 1 : vinReadOne
     //solution 2 : vinDeleted
     //$target=$args['target'];
     //if (DEBUG) echo ("ControllerVin:vinReadId : target=$target</br>");
     
     include 'config.php';
  $vue = $root . '/app/view/recolte/viewDeleted.php';
  require ($vue);
 }
 // Affiche un vin particulier (id)
 public static function recolteReadOne() {
  $vin_id = $_GET['id'];
  $results = ModelRecolte::getOne($vin_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un vin
 public static function recolteCreate() {
  // ----- Construction chemin de la vue
  $results = ModelRecolte::getAllinfos();
    
 
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau vin.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function recolteCreated() {
  // ajouter une validation des informations du formulaire
  
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInserted.php';
  require ($vue);
 }
 
 public static function recoltetraitement() {
  // ajouter une validation des informations du formulaire
    $vin_id = htmlspecialchars($_GET['vin']);
    $producteur_id = htmlspecialchars($_GET['producteur']);
    $quantite = htmlspecialchars($_GET['quantite']);
    $a = ModelRecolte::traitement($vin_id, $producteur_id, $quantite);
    $results=ModelRecolte::getOne($vin_id, $producteur_id);
  // ----- Construction chemin de la vue
    
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewtraitement.php';
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerRecolte -->


