<?php
    class boisson {

        private $nom ;
        private $contenance;
        private $categorie ;
        private $est_alcoolisee;

        public function __construct($nom, $contenance=0) {
            $this->nom = $nom;
            $this->commande("Créer la boisson ".$this->get_nom());
            if($contenance>=0){
                $this->contenance = $contenance;
            }
            $this->est_alcoolisee = FALSE;
            $this->reponse("Salut, je suis du ".$this->get_nom());
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

        function get_nom(){
            return $this->nom;
        }

        function set_nom($nom){
            $this->nom = $nom;
        }

        function get_contenance(){
            return $this->contenance;
        }

        function set_contenance($contenance){   // n'accepte qu'une valeur > 0
            if($contenance < 0){
                $this->erreur("cela doit être positif :" .$contenance."<br>");
            }else{
                $this->contenance = $this->contenance + $contenance;
            }
        }

        function get_categorie(){
            return $this->categorie;
        }

        function set_categorie($categorie){    //: n'accepte que "vin" ou "eau" ou "jus".
            if($categorie == "vin" || $categorie == "eau"  || $categorie == "jus"){
                $this->categorie = $categorie;
            }else{
                $this->erreur("cela doit être soit : vin, eau ou jus. Or c'est : ".$categorie."<br>");
            }
        }

        function get_est_alcoolisee(){
            return $this->est_alcoolisee;
        }
        
        function set_est_alcoolisee($est_alcoolisee){   // n'accepte que les valeurs TRUE ou FALSE
            if($est_alcoolisee == true || $est_alcoolisee == false){
                $this->est_alcoolisee = $est_alcoolisee;
            }else{
                $this->erreur("cela doit être soit : true ou false. Or c'est : ".$est_alcoolisee."<br>");
            }
        } 

        function get_lib_est_alcoolisee(){  //qui retourne "oui" ou "non".
            if($this->est_alcoolisee){
                echo "Oui c'est une boisson alcoolisé";
            }else{
                echo "Non ce n'est pas une boisson alcoolisé";
            }
        } 

        function get_lib_contenance(){  //qui retourne la contenance suivie de "L" pour litres.
            return $this->contenance." L";
        }

        function afficher(){
            $this->commande("paramètres de la boisson ".$this->get_nom());
            echo '<p class="liste">Nom:'.$this->get_nom().'</p>'.PHP_EOL;
            echo '<p class="liste">Contenance:'.$this->get_lib_contenance().'</p>'.PHP_EOL;
            echo '<p class="liste">Categorie:'.$this->get_categorie().'</p>'.PHP_EOL;
            echo '<p class="liste">Boisson alcoolisée ? ';
            echo $this->get_lib_est_alcoolisee().'</p>';
            
        }

        public function __destruct() {
            $this->reponse("Adieu, je coule...");
         }
    }
?>