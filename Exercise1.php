<?php

  // Définition de la classe Afficheur
  class Afficheur {
    // Propriété privée qui contiendra la chaîne à afficher
    private $str;

    // Constructeur qui initialise la propriété str
    public function __construct($str) {
      $this->str = $str;
    }

    // Méthode pour afficher la chaîne
    public function afficher() {
      echo $this->str;
    }
  }

  // Instanciation de la classe Afficheur
  $afficheur = new Afficheur("Bonjour, je suis une chaîne de caractères.");

  // Appel de la méthode afficher pour afficher la chaîne
  $afficheur->afficher();
?>
