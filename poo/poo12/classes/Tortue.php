<?php
    class Tortue {
        private $id;
        private $nom;
        private $surnom;
        private $couleur;
        static $nb =0;
        static $liste;

        function __construct(){
            $this->surnom = array();
            self::$nb += 1;
        }

        function get_id(){
            return $this->id;
        }

        function set_id($id){
            $this->id = $id;
        }

        function set_nom($nom){
            $this->nom = $nom;
        }

        function get_nom(){
            return $this->nom;
        }

        function set_surnom(Array $surnoms){
            foreach($surnoms as $surnom){
                if($this->surnom == NULL){
                    $this->surnom = $surnom;
                }else{
                    $this->surnom .= " or ".$surnom;
                }
            }
        }

        function get_surnom(){
            return $this->surnom;
        }  

        function set_couleur($couleur){
            $this->couleur = $couleur;
        }

        function get_couleur(){
            return $this->couleur;
        }

        function get_nom_surnom(){
            return $this->get_nom()."(".$this->get_surnom().")";
        }

        static function set_liste(Array $tortues){
            foreach($tortues as $tortue){
                self::$liste[] = $tortue;
            }
        }

        static function get_liste(){
            return self::$liste;
        }

        static function get_nb_lib(){
            return "<p>Il y a ".self::$nb." tortue(s) dans la collection</p>"; 
        }

        static function get_tortue_nb($nb){
            $nb = $nb-1;
            for($i=0;$i<self::$nb;$i++){
                if($nb==$i){
                    return self::get_liste()[$nb];
                }
            }
        }


        function afficher(){
            echo "-- ".$this->get_nom()." --";
            echo "<ul>";
            echo "<li>".$this->get_id()."</li>";
            echo "<li>".$this->get_nom()."</li>";
            echo "<li>".$this->get_surnom()."</li>";
            echo "<li>".$this->get_couleur()."</li>";
            echo "</ul>";
        }

    }
?>