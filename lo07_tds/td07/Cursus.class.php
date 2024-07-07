<?php

require_once 'Module.class.php'; // Assurez-vous d'avoir inclus la classe Module si elle n'est pas déjà incluse.

class Cursus {
    private $listeModules;

    public function __construct() {
        $this->listeModules = array(); // Initialisation à une liste vide
    }
	
    public function getlist() {
        return $this->listeModules;
    }

    public function setlist($sigle) {
        $this->listeModules = $sigle;
    }
    public function addModule($module) {
        // Vérification si le module est déjà présent dans la listeModules
        if (!isset($this->listeModules[$module->getSigle()])) {
            // Ajout du module avec son sigle comme clé
            $this->listeModules[$module->getSigle()] = $module;
        } else {
            // Gestion du cas où le module est déjà présent
            echo "Le module avec le sigle " . $module->getSigle() . " est déjà présent dans le cursus.";
        }
    }

    public function __toString() {
        $output = "Cursus:\n";
        foreach ($this->listeModules as $sigle => $module) {
            $output .= "Sigle: $sigle, Module: " . $module->__toString() . "\n";
        }
        return $output;
    }

    public function affiche() {
        echo $this->__toString();
    }
}

