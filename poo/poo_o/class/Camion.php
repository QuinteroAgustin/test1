<?php

    class Camion extends Vehicule{
        private $chargement;
        
        function __construct($nom){
            parent::__construct($nom);
            $this->chargement = 0;
            $this->type = "Camion";
        }

        function get_chargement(){
            return $this->chargement;
        }

        function set_chargement(){
            $this->chargement = abs($this->chargement);
        }

        function charger($charge){
            if($charge >= 0){
                $this->chargement = $this->chargement+$charge;
                echo "<p>".$this->get_nom()." a chargé : ". $charge ." kg</p>";
            }else{
                echo "<p>".$this->get_nom()." ne peut pas charger : ". $charge ." kg </p>";
            }
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
            echo "<li>Chargement  : " . $this->get_chargement() . " kg</li>";
            echo "</ul>";
        }
    }
?>