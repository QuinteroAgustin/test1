<?php

class Epargne extends Compteb{
    private $interet;

    public function __construct($titulaire,$solde){
        parent::__construct($titulaire,$solde);
        $this->interet = $this->get_interet();
    }

    function get_interet(){
        return $this->interet;
    }

    function set_interet($interet){
        $this->interet=$interet;
    }

    function calc_interet(){
        $this->set_solde($this->get_solde()+($this->get_solde()*$this->get_interet()));
    }

    function afficher() {
        $this->commande("paramètre du compte d'épargne de ".$this->get_titulaire()."");
        parent::afficher();
        echo "<li>Taux d'interet : ".$this->get_interet()."</li>";
        echo "</ul>";
    }
}

?>