<?php

require_once('WebBean.interface.php');
require_once('Charte.class.php');


class Module implements WebBean {
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;

    public function __construct($sigle, $label, $categorie, $effectif) {
        $this->setSigle($sigle);
        $this->setLabel($label);
        $this->setCategorie($categorie);
        $this->setEffectif($effectif);
    }

    public function getSigle() {
        return $this->sigle;
    }

    public function setSigle($sigle) {
        $this->sigle = $sigle;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    public function getEffectif() {
        return $this->effectif;
    }

    public function setEffectif($effectif) {
        $this->effectif = $effectif;
    }

    public function __toString() {
        return "Sigle: " . $this->sigle . ", Label: " . $this->label . ", Catégorie: " . $this->categorie . ", Effectif: " . $this->effectif;
    }

     public function valide() {
        // Ajoutez ici la logique de validation si nécessaire
        return true; // Pour l'exemple, renvoie toujours true
    }

    public function pageKO() {
        return Charte::html_foot_bootstrap5();
    }

    public function pageOK() {
        
        $a=Charte::html_head_bootstrap3($this->label) . Charte::html_head_bootstrap5($this->label) . Charte::html_foot_bootstrap3() . Charte::html_foot_bootstrap5();
        return $a;
    }

    public function sauveTXT() {
        return $this->sigle." ,".$this->label." ,".$this->categorie." ,".$this->effectif;
    }
    
    public function tableau() {
        return [
            'sigle' => $this->sigle,
            'label' => $this->label,
            'categorie' => $this->categorie,
            'effectif' => $this->effectif
        ];

    }

    public function sauveXML($file) {
        // Ajoutez ici la logique de sauvegarde en format XML
    }

    public function sauveBDR($table) {
        echo "Insert into ". $table." values(". $this->sauveTXT().")";
    }

    public function createTable($table) {
        echo "create table ". $table." (sigle varchar(6) not null,  categorie varchar(2) check categorie in ('CS', 'TM', 'EC',
'ME', 'CT'),  label varchar(40) not null,  effectif integer,   primary key (sigle))";
    }
    
    
    }
