<?php 
class Tranche{
    private $id;
    private $libelle;
    private $qf_min;
    private $qf_max;
    private $prix_individuel;
    private $prix_collectif;

    public function __construct($id, $libelle, $qf_min, $qf_max, $prix_individuel, $prix_collectif){
        $this->id = $id;
        $this->libelle = $libelle;
        $this->qf_min = $qf_min;
        $this->qf_max = $qf_max;
        $this->prix_individuel = $prix_individuel;
        $this->prix_collectif = $prix_collectif;
    }

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of qf_min
     */ 
    public function getQf_min()
    {
        return $this->qf_min;
    }

    /**
     * Set the value of qf_min
     *
     * @return  self
     */ 
    public function setQf_min($qf_min)
    {
        $this->qf_min = $qf_min;

        return $this;
    }

    /**
     * Get the value of qf_max
     */ 
    public function getQf_max()
    {
        return $this->qf_max;
    }

    /**
     * Set the value of qf_max
     *
     * @return  self
     */ 
    public function setQf_max($qf_max)
    {
        $this->qf_max = $qf_max;

        return $this;
    }

    /**
     * Get the value of prix_individuel
     */ 
    public function getPrix_individuel()
    {
        return $this->prix_individuel;
    }

    /**
     * Set the value of prix_individuel
     *
     * @return  self
     */ 
    public function setPrix_individuel($prix_individuel)
    {
        $this->prix_individuel = $prix_individuel;

        return $this;
    }

    /**
     * Get the value of prix_collectif
     */ 
    public function getPrix_collectif()
    {
        return $this->prix_collectif;
    }

    /**
     * Set the value of prix_collectif
     *
     * @return  self
     */ 
    public function setPrix_collectif($prix_collectif)
    {
        $this->prix_collectif = $prix_collectif;

        return $this;
    }

    public function lib_qf(){
        return "de ".$this->getQf_min()." à ".$this->getQf_max();
    }

    public function dump(){
        return array(
            "id" => $this->getId(),
            "libelle" => $this->getLibelle(),
            "qf_min" => $this->getQf_min(),
            "qf_max" => $this->getQf_max(),
            "prix_individuel" => $this->getPrix_individuel(),
            "prix_collectif" => $this->getPrix_collectif()
        );
    }

    public function afficher(){
        echo "<ul>";
        echo "<li></li>";
        echo "</ul>";
    }

    /* echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "</tr>";
        echo "</table>"; */
}
?>