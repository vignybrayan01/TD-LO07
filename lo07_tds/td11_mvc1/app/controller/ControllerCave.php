<?php


class ControllerCave {
    
public static function mesPropositions() {
  
// ----- Construction chemin de la vue
  include 'config.php';
  $vue = __DIR__ . '/../../public/documentation/mesPropositions.php';
   if (DEBUG)
   echo ("ControllerCave : mesPropositions : vue = $vue");
  require ($vue);
 }
 
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerCave : caveAccueil : vue = $vue");
  require ($vue);
 }
}
 ?>