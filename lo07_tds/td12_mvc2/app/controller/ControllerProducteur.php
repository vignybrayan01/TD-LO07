<?php

require_once '../model/ModelProducteur.php';

class ControllerProducteur {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerProducteur : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des vins
 public static function producteurReadAll() {
  $results = ModelProducteur::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }
 
 public static function producteurReadRegion() {
  $results = ModelProducteur::getUniqRegion();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewRegion.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadRegion : vue = $vue");
  require ($vue);
 }
 
 public static function producteurReadNbreProductor() {
  $results = ModelProducteur::getNbreProducteur();
  // ----- Construction chemin de la vue
  
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewNbreProducteur.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadNbreProductor : vue = $vue");
  require ($vue);
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function producteurReadId($args) {
  $results = ModelProducteur::getAllId();

  $target=$args['target'];
  if (DEBUG) echo ("ControllerProducteur:producteurReadId : target=$target</br>");
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewId.php';
  require ($vue);
 }

  public static function producteurDeleted($args) {
     $producteur_id = $_GET['id'];
     $results = ModelProducteur::delete($producteur_id);
     //passage du nom de la méthode cible pour le champ action du formulaire
     //solution 1 : vinReadOne
     //solution 2 : vinDeleted
         
     include 'config.php';
  $vue = $root . '/app/view/producteur/viewDeleted.php';
  require ($vue);
 }
 // Affiche un vin particulier (id)
 public static function producteurReadOne() {
  $producteur_id = $_GET['id'];
  $results = ModelProducteur::getOne($producteur_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un vin
 public static function producteurCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau vin.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function producteurCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelProducteur::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInserted.php';
  require ($vue);
 }
 
}

?>