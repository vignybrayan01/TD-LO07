<?php
    
    session_start(); 
    
    
    $_SESSION["nom_traitement"] = $_POST["nom_traitement"];
    $_SESSION["finalite_traitement"] = $_POST["finalite_traitement"];
    

    
    if(isset($_POST["traitement_dcp"])){
       $_SESSION["traitement_dcp"] = $_POST["traitement_dcp"];
    
     }
    if(isset($_POST["traitement_donnees_sensibles"])){
       $_SESSION["traitement_donnees_sensibles"] = $_POST["traitement_donnees_sensibles"];
    
    }
    if(isset($_POST["transferts_hors_ue"])){
       $_SESSION["transferts_hors_ue"] = $_POST["transferts_hors_ue"];
    
     }
    
    header("Location: lo07_analyse_superglobales2.php");
    exit();
    
  
?>