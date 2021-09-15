<?php
    class Oiseau implements Animal {
        public $nom;
        public $couleur;

        function __construct($nom, $couleur){
            $this->nom = $nom;
            $this->couleur = $couleur;
            echo "<p><b>Bonjour, je suis ".$this->nom." l'oiseau ".$this->couleur."</b></p>";
        }
        function marcher(){
            echo "<p>Je ne marche pas</p>";
        }
        function voler(){
            echo "<p>Je vole</p>";
        }
        function grimper(){
            echo "<p>Je ne grimpe pas</p>";
        }
        function parler(){
            echo "<p>Cui-cui</p>";
        }
        function afficher(){
            $this->marcher();
            $this->voler();
            $this->grimper();
            $this->parler();
        }

    }
?>