<?php

require_once 'Module.class.php'; // Assurez-vous d'avoir inclus la classe Module si elle n'est pas déjà incluse.

class Cursus2 {
    private $listeModules;

    public function __construct() {
        // Vérifier si une variable de session existe pour le cursus
        if (isset($_SESSION['SESSION_cursus'])) {
            $this->listeModules = $_SESSION['SESSION_cursus'];
        } else {
            $this->listeModules = array();
        }
    }
	
    public function getlist() {
        return $this->listeModules;
    }

    public function setlist($sigle) {
        $this->listeModules = $sigle;
    }
    public function addModule($module) {
        // Ajouter le module à la liste
        $this->listeModules[$module->getsigle()] = $module;

        // Mettre à jour la variable de session
        $_SESSION['SESSION_cursus'] = $this->listeModules;
    }

    public function __toString() {
        $output = "Cursus:\n";
        foreach ($this->listeModules as $sigle => $module) {
            $output .= "Sigle: $sigle, Module: " . $module->__toString() . "\n";
        }
        return $output;
    }

    public function affiche() {
        echo "<pre>";
               print_r($this);
        echo "</pre>";
    }
    
    public function vider() {
        // Vider la liste des modules et la variable de session
        $this->listeModules = array();
        unset($_SESSION['SESSION_cursus']);
    }
}

