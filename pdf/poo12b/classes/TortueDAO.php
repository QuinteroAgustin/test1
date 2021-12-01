<?php
    class TortueDAO extends dao 
    {
        function __construct()
        {
            parent::__construct();
        }
        function find($id_tortue) {
            $sql = "select * from tortue where id_tortue= :id_tortue";
            try {
                $sth = $this->pdo->prepare($sql);
                $sth->execute(array(":id_tortue" => $id_tortue));
                $row = $sth->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
            }
            $tortue=null;
            if($row) {
                
                $tortue = new Tortue($row);
            }
            // Retourne l'objet métier
            return $tortue;
        } // function find()

        function findAll() {
            $sql = "select * from tortue";
            try {
                $sth = $this->pdo->prepare($sql);
                $sth->execute();
                $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
            }
            $tortue = array();
            foreach ($rows as $row) {
                $tortue[] = new Tortue($row);
            }
            // Retourne un tableau d'objets "salarié"
            return $tortue;
        } // function findAll()
    }
?>