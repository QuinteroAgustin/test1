<?php

    class jus extends boisson {
        private $fruit;
        function __construct($nom, $contenance) {
            parent::__construct($nom, $contenance);
            $this->fruit = "pomme";
        }

        function get_fruit(){
            return $this->fruit;
        }

        function set_fruit($fruit){
            $this->fruit = $fruit;
        }

        function afficher(){
            parent::afficher();
            echo '<p class="liste">fruit : '.$this->fruit.'</p>'.PHP_EOL;
        }
    }

?>