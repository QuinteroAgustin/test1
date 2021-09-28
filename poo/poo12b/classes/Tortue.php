<?php

/**
 * Classe métier Tortue
 *
 * @author jef
 */
class Tortue
{

  // Propriétés
    private $id;
    private $nom;
    private $surnom;
    private $couleur;  // couleur du masque

    /**
     * Constructeur
     *
     * @param array $tableau
     */
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

    public function get_nom()
    {
        return $this->nom;
    }

    public function get_surnom()
    {
        return $this->surnom;
    }

    public function get_couleur()
    {
        return $this->couleur;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    public function set_surnom($surnom)
    {
        $this->surnom = $surnom;
    }

    public function set_couleur($couleur)
    {
        $this->couleur = $couleur;
    }

    // Retourne le prénom

    public function nom_complet()
    {
        return $this->nom." dit ".$this->surnom;
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

    /**
     * Affiche le contenu de l'objet
     *
     * @return void
     */
    public function afficher()
    {
        $html = '<ul>';
        $html .= '<li>id=' . $this->get_id() . '</li>';
        $html .= '<li>nom=' . $this->get_nom() . '</li>';
        $html .= '<li>surnom=' . $this->get_surnom() . '</li>';
        $html .= '<li>couleur=' . $this->get_couleur() . '</li>';
        $html .= '</ul>';
        return $html;
    }
}

// Classe Tortue
