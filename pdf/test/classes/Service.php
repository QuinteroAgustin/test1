<?php

/**
 * Classe Service
 *
 * @author jef
 */
class Service
{

  // Attributs
    private $id;
    private $libelle;
    private $salaries=array();

    // Constructeur
    public function __construct(array $tableau = null)
    {
        if ($tableau != null) {
            $this->fill($tableau);
        }
    }

    // Getter et setter
    public function get_id()
    {
        return $this->id;
    }

    public function get_libelle()
    {
        return $this->libelle;
    }

    public function get_salaries()
    {
        return $this->salaries;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_libelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function set_salaries($salaries)
    {
        $this->salaries = $salaries;
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

    /**
         * Retourne un tableau du contenu de l'objet
         *
         * @return array
         */
    public function dump()
    {
        return get_object_vars($this);
    }

    public function afficher()
    {
        $html = '<ul>';
        $html .= '<li>id=' . $this->get_id() . '</li>';
        $html .= '<li>libelle=' . $this->get_libelle() . '</li>';
        $html .= '<ul>';
        return $html;
    }
}

// Classe Service
