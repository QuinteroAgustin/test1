<?php
class Marvel {
    // Attributs
    private $id;
    private $title;
    private $phase;
    private $us_release_date;
    private $directors;
    private $screenwriters;
    private $producers;
    private $status;
    
    // Constructeur
    public function __construct(array $tableau = null)
    {
        if ($tableau != null) {
            $this->fill($tableau);
        }
    }
    // Getter
    function get_id() {
        return $this->id;
    }

    function get_title() {
        return $this->title;
    }

    function get_phase() {
        return $this->phase;
    }

    function get_us_release_date() {
        return $this->us_release_date;
    }

    function get_directors() {
        return $this->directors;
    }

    function get_screenwriters() {
        return $this->screenwriters;
    }

    function get_producers() {
        return $this->producers;
    }

    function get_status() {
        return $this->status;
    }

    // Setter
    function set_id($id) {
        $this->id = $id;
    }

    function set_title($title) {
        $this->title = $title;
    }

    function set_phase($phase) {
        $this->phase = $phase;
    }

    function set_us_release_date($us_release_date) {
        $this->us_release_date = $us_release_date;
    }

    function set_directors($directors) {
        $this->directors = $directors;
    }

    function set_screenwriters($screenwriters) {
        $this->screenwriters = $screenwriters;
    }

    function set_producers($producers) {
        $this->producers = $producers;
    }

    function set_status($status) {
        $this->status = $status;
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