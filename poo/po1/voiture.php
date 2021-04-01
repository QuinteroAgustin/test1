<?php
    class Voiture{
        var $marque;
        var $model;
        var $nom;
        var $compteur;
        var $aDemarre=False;

        function demarrer(){
            $this->aDemarre=True;
            echo "La voiture à démarrer<br>";
        }

        function avancer($km){
            if($this->aDemarre == True){
                $this->compteur += $km;
                echo "La voiture à avancé de ".$km." km(s)<br>";
            }else{
                echo "La voiture n'est pas démarré<br>";
            }
        }

        function arreter(){
            $this->aDemarre = False;
            echo "La voiture est arreté<br>";
        }

        function allerA(){
            $distance = rand(0,300);
            $this->avancer($distance);
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
        }
    }
?>