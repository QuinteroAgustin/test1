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
                throw new Exception("Erreur : ".$this->get_nom()." ne peut pas charger : ". $charge ." kg");
            }
        }  
        // Afficher
        function afficher() {
            echo "<p>--- Description de " . $this->get_nom() . " ---</p>";
            echo "<ul>";
            echo "<li>Marque      : " . $this->get_marque() . "</li>";
            echo "<li>Modèle      : " . $this->get_modele() . "</li>";
            echo "<li>Nom         : " . $this->get_nom() . "</li>";
            echo "<li>Compteur    : " . $this->get_compteur() . "</li>";
            echo "<li>a démarré ? : " . $this->get_lib_etat() . "</li>";
            echo "<li>Type : ". $this->type ."</li>";
            echo "<li>Chargement  : " . $this->get_chargement() . " kg</li>";
            echo "</ul>";
        }
    }
?>