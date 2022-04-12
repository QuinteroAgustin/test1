<?php
class Permis {
    private $prenom;
    private $nom;
    private $nb_points;
    private $type;
    private $types = array(
        "a" => "roller",
        "b" => "fusée",
        "c" => "transport de cocaina",
        "d" => "transport de chinois"
    );

    public function __construct($prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->nb_points = 12;
        echo "Permis initialisé pour ". $prenom .' '.$nom.'<br>';
    }

    public function get_lib_nb_points(){
        return $this->nb_points." points".'<br>';
    }

    public function get_lib_type(){
        foreach($this->types as $key => $type){
            if($key == $this->type){
                return $type;
            }
        }
    }

    public function set_prenom($prenom){
        $this->prenom = $prenom;
    }

    public function get_prenom(){
        return $this->prenom;
    }

    public function set_nom($nom){
        $this->nom = $nom;
    }

    public function get_nom(){
        return $this->nom;
    }

    public function set_nb_points($nb){
        if($nb <= 12 && $nb >= 0){
            $this->nb_points = $nb;
        }else{
            echo "Error : Le nombre de points doit etre compris entre 0 et 12".'<br>';
        }
    }

    public function get_nb_points(){
        return $this->nb_points;
    }

    public function set_type($v_type){
        if(array_key_exists($v_type, $this->types)){
            $this->type = $v_type;
        }else{
            echo "Error : Le type de permis n'est pas valable : ".$v_type.'<br>';
        }
    }

    public function get_type(){
        return $this->type;
    }

    public function retirer($nb){
        if(($this->nb_points - $nb) >= 0){
            $this->nb_points = $this->nb_points-$nb;
            echo $this->nom. ' Il te reste '. $this->get_lib_nb_points().'<br>';
        }else{
            echo "Error : On ne peux pas retirer autant de points : ".$nb.'<br>';
        }
    }

    public function ajouter($nb){
        if(($this->nb_points + $nb) <= 12){
            $this->nb_points = $this->nb_points+$nb;
            echo $this->nom. ' Il te reste '. $this->get_lib_nb_points().'<br>';
        }else{
            echo "Error : On ne peux pas ajouter autant de points : ".$nb.'<br>';
        }
    }

    public function __destruct(){
        echo 'Bisou '.$this->nom.' trop nul<br>';
    }

    public function afficher(){
        echo '--- Permis de '. $this->get_nom() .' ---<br>';
        echo '<ul>';
        echo '<li>Nom : '. $this->get_nom().'</li>';
        echo '<li>Prénom : '. $this->get_prenom().'</li>';
        echo '<li>Nb point(s) : '. $this->get_lib_nb_points().'</li>';
        echo '<li>Permis : '. strtoupper($this->get_type()) .' : '. $this->get_lib_type().'</li>';
        echo '</ul>';
    }
}
?>