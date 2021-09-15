<?php

    class vin extends boisson {
        private $couleur;
        function __construct($nom, $contenance) {
            parent::__construct($nom, $contenance);
            $this->couleur = "rouge";
        }

        function get_couleur(){
            return $this->couleur;
        }

        function set_couleur($couleur){
            if($couleur == "rouge" || $couleur == "rosé" || $couleur == "blanc" ){
                $this->couleur = $couleur;
            }else{
                $this->erreur("Cela doit être soit : rouge, rosé ou blanc");
            }
        }

        function afficher(){
            parent::afficher();
            echo '<p class="liste">Couleur : '.$this->couleur.'</p>'.PHP_EOL;
        }

    }

?>