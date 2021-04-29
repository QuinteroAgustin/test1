<?php
    class Voiture{
        private $marque;
        var $model;
        var $nom;
        var $compteur;
        var $aDemarre;

        function __construct($nom=NULL){
            $this->marque = "Renault";
            $this->model = "???";
            $this->nom = isset($nom)?$nom:"???";
            $this->compteur = 0;
            $this->aDemarre = False;
            return $this;
        }

        function __destruct(){
            echo "Destruct: Bonne journée ".$this->nom." le frr le monde est injuste<br>";
        }

        function demarrer(){
            $this->aDemarre=True;
            echo "La voiture à démarrer<br>";
            return $this;
        }

        function avancer($km){
            if($this->aDemarre == True){
                $this->compteur += $km;
                echo "La voiture à avancé de ".$km." km(s)<br>";
            }else{
                echo "La voiture n'est pas démarré<br>";
            }
            return $this;
        }

        function arreter(){
            $this->aDemarre = False;
            echo "La voiture est arreté<br>";
            return $this;
        }

        function allerA(){
            $distance = rand(0,300);
            $this->avancer($distance);
            return $this;
        }

        function setMarque($marque){
            if($marque == "Renault" || $marque == "Dacia"){
                $this->marque = $marque;
            }else{
                echo "Error marque indisponible";
            }
                
        }
        function getMarque($marque){
            echo $this->marque;
        }

        function afficher(){
            echo "--- Description de ".$this->nom." ---<br>";
            echo "Marque   : ".$this->marque."<br>";
            echo "Modèle   : ".$this->model."<br>";
            echo "Nom      : ".$this->nom."<br>";
            echo "Compteur : ".$this->compteur."<br>";
            if($this->aDemarre == False){
                echo "est démarré: Non<br>";
            }else{
                echo "est démarré: Oui<br>";
            }
            return $this;
        }
    }
?>