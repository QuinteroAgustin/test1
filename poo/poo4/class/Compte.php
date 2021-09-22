<?php

class Compte{
    private $devise;
    private $solde =0;
    private $titulaire;

    public function __construct($titulaire,$solde) {
        $this->titulaire = $titulaire;
        $this->commande("Créer le compte de ".$this->titulaire."");
        $this->reponse("Salut gros bg, je suis pas le compte de ".$this->titulaire." (enfait si)");
        $this->solde = $solde;
        $this->devise = "€";
    }

    public function __destruct() {
        $this->reponse("Destructeur : Je suis le compte et je me ferme");
    }

    function commande($message) {
        echo '<p class="commande">Commande : '.$message.'</p>'.PHP_EOL;
        }
    
    function reponse($message) {
        echo '<p class="reponse">Reponse : '.$message.'</p>'.PHP_EOL;
        }
    
    function erreur($message) {
        echo '<p class="erreur">Erreur : '.$message.'</p>'.PHP_EOL;
        }
    
    function get_devise() {
        return $this->devise;
    }

    function set_devise($devise) {
        if ($devise == "€" || $devise == "$"){
            $this->devise = $devise;
        }
        else{
            $this->erreur("La devise est incorrecte (pas € ou $) : ".$devise."");
        }
    }

    function get_solde() {
        return $this->solde;
    }

    function set_solde($solde) {
        if ($solde<0){
            $this->erreur("Le solde est négatif : ".$solde." ".$this->devise);
        }
        else{
            $this->solde = $solde;
        }
    }

    function get_titulaire() {
        return $this->titulaire;
    }
    
    function set_titulaire() {
        $this->titulaire = $titulaire;
    }

    function get_lib_solde() {
        return $this->solde." ".$this->devise;
    }

    function crediter($montant) {
        $this->commande("Crediter ".$montant.$this->get_devise()."");
        $this->montant = abs($montant);
        $this->set_solde($this->solde+$montant);
    }
    function debiter($montant) {
        $this->commande("Debiter ".$montant.$this->get_devise()."");
        $this->montant = abs($montant);
        $this->set_solde($this->solde-$montant);
    }

    function afficher(){
    $this->commande("paramètre du compte de ".$this->get_titulaire()."");
    echo "<p>-- Compte de ".$this->get_titulaire()."--</p>";
    echo "<ul>";
    echo "<li> Titulaire : ".$this->get_titulaire()."</li>";
    echo "<li> Solde : ".$this->get_lib_solde()."</li>";
    echo "<li> Devise : ".$this->get_devise()."</li>";
    echo "</ul>";
    }
}


?>