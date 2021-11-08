<?php

/**
 * Classe Salarie
 *
 * @author jef
 */
class Salarie
{

  // Attributs
    private $id;
    private $matricule;
    private $nom;
    private $prenom;
    private $id_service; // Ajouté pour permettre la mise à jour

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

    public function get_matricule()
    {
        return $this->matricule;
    }

    public function get_nom()
    {
        return $this->nom;
    }

    public function get_prenom()
    {
        return $this->prenom;
    }

    public function get_id_service()
    {
        return $this->id_service;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_matricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    public function set_prenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function set_id_service($id_service)
    {
        $this->id_service = $id_service;
    }

    // Retourne le prénom

    public function lib_salarie()
    {
        return $this->prenom . " " . $this->nom;
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
        $html .= '<li>matricule=' . $this->get_matricule() . '</li>';
        $html .= '<li>nom=' . $this->get_nom() . '</li>';
        $html .= '<li>prenom=' . $this->get_prenom() . '</li>';
        $html .= '<li>ID service=' . $this->get_id_service() . '</li>';
        $html .= '</ul>';
        return $html;
    }
}

// Classe Salarie
