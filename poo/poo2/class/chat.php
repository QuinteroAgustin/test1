<?php
    class Chat implements Animal {
        public $nom;
        public $couleur;

        function __construct($nom, $couleur){
            $this->nom = $nom;
            $this->couleur = $couleur;
            echo "<p><b>Bonjour, je suis ".$this->nom." le chat ".$this->couleur."</b></p>";
        }
        function marcher(){
            echo "<p>Je marche</p>";
        }
        function voler(){
            echo "<p>Je ne vole pas</p>";
        }
        function grimper(){
            echo "<p>Je grimpe</p>";
        }
        function parler(){
            echo "<p>Miaouuuuu</p>";
        }
        function afficher(){
            $this->marcher();
            $this->voler();
            $this->grimper();
            $this->parler();
        }

    }
?>