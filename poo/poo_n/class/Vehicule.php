<?php

/**
 * Classe Voiture
 *
 * @author jef
 */
class Vehicule{

  private $marque = "???";
  private $modele = "???";
  private $nom = "???";
  private $compteur = 0;
  private $etat;
  const ARRETEE=0;
  const DEMARREE=1;
  protected $type;
  public static $nb=0;

  // Constructeur
  public function __construct($nom) {
    $this->set_marque("Renault");
    $this->modele = "???";
    $this->nom = $nom;
    $this->compteur = 0;
    $this->etat = self::ARRETEE;
    $this->type = "Véhicule";
    self::$nb++;
  }

  // Destructeur
  public function __destruct() {
    Html::e("<p>destruct : adieu monde injuste ! </p>");
  }

  // Getter et setter

  function get_marque() {
    return $this->marque;
  }

  function set_marque($marque) {
    if ($marque == "Renault" || $marque == "Dacia") {
      $this->marque = $marque;
    } else {
      Html::e("<p>Erreur : la marque doit être Renault ou Dacia : " . $marque . "</p>");
    }
  }

  function get_modele() {
    return $this->modele;
  }

  function set_modele($modele) {
    $this->modele = $modele;
  }

  function get_nom() {
    return $this->nom;
  }

  function set_nom($nom) {
    $this->nom = $nom;
  }

    
  function get_compteur() {
    return $this->compteur;
  }

  function set_compteur($compteur) {
    $this->compteur = $compteur;
  }

  function get_etat() {
    return $this->etat;
  }
  
  function get_lib_etat() {
    if ($this->etat == self::DEMARREE) {
      return "Oui";
    } else {
      return "Non";
    }
  }

  function set_etat($bool) {
    if ($bool) {
      $this->etat = self::DEMARREE;
    } else {
      $this->etat = self::ARRETEE;
    }
  }

  // Démarrer
  function demarrer() {
    $this->etat = self::DEMARREE;
    Html::e("<p>demarrer : la voiture a démarré</p>");
  }

  // Avancer de X km
  function avancer($km) {
    if ($this->etat==self::DEMARREE) {
      $km = abs($km);
      $this->compteur = $this->compteur + $km;
      Html::e("<p>avancer : la voiture a avancé de " . $km . " km(s)</p>");
    } else {
      Html::e("<p>Erreur : la voiture doit démarrer avant de pouvoir avancer !</p>");
    }
  }

  // Arréter
  function arreter() {
    $this->etat = self::ARRETEE;
    Html::e("<p>arreter : la voiture est arrétée</p>");
  }

  // Afficher
  function afficher() {
    echo "<p>--- Description de " . $this->nom . " ---</p>";
    echo "<ul>";
    echo "<li>Marque      : " . $this->marque . "</li>";
    echo "<li>Modèle      : " . $this->modele . "</li>";
    echo "<li>Nom         : " . $this->nom . "</li>";
    echo "<li>Compteur    : " . $this->compteur . "</li>";
    echo "<li>a démarré ? : " . $this->get_lib_etat() . "</li>";
    echo "<li>Type : ". $this->type ."</li>";
    echo "</ul>";
  }

}

// Classe Voiture
