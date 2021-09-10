<?php

    class Voiture extends Vehicule{

        function __construct($nom){
            parent::__construct($nom);
            $this->type = "Voiture";
        }
        
    }
?>