<?php
    // Enregistrer les données dans les cookies
    setcookie("nom_traitement", $_POST["nom_traitement"]); // 86400 = 1 jour
    setcookie("finalite_traitement", $_POST["finalite_traitement"]);
    
    if(isset($_POST["traitement_dcp"])){
       setcookie("traitement_dcp", $_POST["traitement_dcp"]); 
    }
    if(isset($_POST["traitement_donnees_sensibles"])){
       setcookie("traitement_donnees_sensibles", $_POST["traitement_donnees_sensibles"]); 
    }
    if(isset($_POST["transferts_hors_ue"])){
       setcookie("transferts_hors_ue", $_POST["transferts_hors_ue"]); 
    }
    
    header("Location: lo07_analyse_superglobales2.php");
    exit();
    
  
?>