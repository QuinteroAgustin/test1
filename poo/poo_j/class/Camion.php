<?php

    class Camion extends Vehicule{
        private $chargement;
        
        function __construct($nom){
            parent::__construct($nom);
            $this->chargement = 0;
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
        //exo poo k
        function afficher()
        {
            parent::afficher();
            echo "<ul>";
            echo "<li>Chargement  : " . $this->get_chargement() . "</li>";
            echo "</ul>";
        }
    }
?>