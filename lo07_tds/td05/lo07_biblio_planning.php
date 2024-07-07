<?php

function listeJourLabel() {
    return array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
}

function listeJourIndice() {
    return range(1, 31);
}

function listeMois() {
    return array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
}

function listeSeance() {
    $seances = array();
    $heures = array('08', '09', '10', '11', '14', '15', '16', '17');
    $minutes = array('00', '20', '40');
    
    foreach ($heures as $heure) {
        foreach ($minutes as $minute) {
            $seances[] = $heure . 'h' . $minute;
        }
    }
    
    return $seances;
}


?>