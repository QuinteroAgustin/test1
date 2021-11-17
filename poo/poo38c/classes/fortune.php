<?php
class Fortune {
    // Attributs
    private $id_fortune;
    private $rang;
    private $nom;
    private $siege;
    private $pays;
    private $ca;
    private $benefice;
    private $nb_employes;
    private $branche;
    private $directeur;
    private $evolution;
    
    // Constructeur
    public function __construct(array $tableau = null)
    {
        if ($tableau != null) {
            $this->fill($tableau);
        }
    }
    // Getter
    function get_id_fortune() {
        return $this->id_fortune;
    }

    function get_rang() {
        return $this->rang;
    }

    function get_nom() {
        return $this->nom;
    }

    function get_siege() {
        return $this->siege;
    }

    function get_pays() {
        return $this->pays;
    }

    function get_ca() {
        return $this->ca;
    }

    function get_benefice() {
        return $this->benefice;
    }

    function get_nb_employes() {
        return $this->nb_employes;
    }

    function get_branche() {
        return $this->branche;
    }

    function get_directeur() {
        return $this->directeur;
    }

    function get_evolution() {
        return $this->evolution;
    }

    // Setter
    function set_id_fortune($id_fortune) {
        $this->id_fortune = $id_fortune;
    }

    function set_rang($rang) {
        $this->rang = $rang;
    }

    function set_nom($nom) {
        $this->nom = $nom;
    }

    function set_siege($siege) {
        $this->siege = $siege;
    }

    function set_pays($pays) {
        $this->pays = $pays;
    }

    function set_ca($ca) {
        $this->ca = $ca;
    }

    function set_benefice($benefice) {
        $this->benefice = $benefice;
    }

    function set_nb_employes($nb_employes) {
        $this->nb_employes = $nb_employes;
    }

    function set_branche($branche) {
        $this->branche = $branche;
    }

    function set_directeur($directeur) {
        $this->directeur = $directeur;
    }

    function set_evolution($evolution) {
        $this->evolution = $evolution;
    }

    /**
     * Hydrateur
     * Alimente les propriétés à partir d'un tableau
     * @param array $tableau
     */
    public function fill(array $tableau)
    {
        foreach ($tableau as $cle => $valeur) {
            $methode = 'set_' . $cle;
            if (method_exists($this, $methode)) {
                $this->$methode($valeur);
            }
        }
    }
}
?>