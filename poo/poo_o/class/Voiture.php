<?php

    class Voiture extends Vehicule{

        function __construct($nom){
            parent::__construct($nom);
            $this->type = "Voiture";
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
?>