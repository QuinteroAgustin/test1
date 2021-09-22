<?php

class Depot extends Compteb{
    private $siphano = TRUE;#(https://youtu.be/kEfAHzn1eRc?t=530)
    private $cb = TRUE;

    public function __construct($titulaire,$solde){
        parent::__construct($titulaire,$solde);
        $this->siphano = $this->get_siphano();
        $this->cb = $this->get_cb();
    }

    function get_siphano(){
        return $this->siphano;
    }

    function set_siphano($siphano){
        if($siphano = FALSE){
            $this->siphano = 0;
        }
        else{
            $this->siphano = 1;
        }
        
    }

    function get_cb(){
        return $this->cb;
    }

    function set_cb($cb){
        if($cb = FALSE){
            $this->cb = 0;
        }
        else{
            $this->cb = 1;
        }
        
    }

    function afficher() {
        $this->commande("paramètre du compte dépot de ".$this->get_titulaire()."");
        parent::afficher();
        echo "<li>Cheque : ".$this->get_siphano()."</li>";
        echo "<li>Carte bancaire : ".$this->get_cb()."</li>";
        echo "</ul>";
    }
}

?>