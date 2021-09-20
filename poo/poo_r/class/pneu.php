<?php
    class Pneu {
        private $marque;
        private $model;
        private $pression;
        private $position;

        function __construct($marque="michelin", $model="185/65 R15", $pression=0, $position="avg"){
            $this->set_marque($marque);
            $this->set_model($model);
            $this->set_pression($pression);
            $this->set_position($position);
        }
        
        function set_marque($marque){
            if($marque == "michelin" || $marque == "dunlop"){
                $this->marque = $marque;
            }else{
                throw new Mon_exception("Erreur : La marque du pneu doit être michelin ou dunlop or vous avez mis : ".$marque);
            }
        }

        function get_marque(){
            return $this->marque;
        }

        function set_pression($pression){
            if($pression>0){
                $this->pression = $pression;
            }else{
                throw new Mon_exception("Erreur : La pression doit être > 0");
            }
        }

        function get_pression(){
            return $this->pression;
        }

        function get_model(){
            return $this->model;
        }

        function set_model($model){
            $this->model = $model;
        }

        function get_position(){
            return $this->position;
        }

        function set_position($position){
            if($position == "avg" || $position == "avd" || $position == "arg" || $position == "ard"){
                $this->position = $position;
            }else{
                throw new Mon_exception("Erreur : La position doit être avg, avd, arg, ard or vous avez mis : ".$position);
            }
        }

        function get_lib_pression(){
            return $this->get_pression()." bar(s)";
        }

        function afficher(){
            echo "<li>".$this->get_position().":".$this->get_marque()." ".$this->get_model()." ".$this->get_lib_pression()."</li>";
        }

    }
?>