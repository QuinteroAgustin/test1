<?php
/**
* Classe DAO SalarieDAO
*
* @author jef
*/

class SalarieDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'un salarié par son ID
  * @param int ID du salarié
  * @return \Salarie
  * @throws Exception
  */
    function find($id) {
    $sql = "select * from salarie where id= :id";
    try {
      $sth = $this->pdo->prepare($sql); // On passe par les méthodes de PDO
      $sth->execute(array(":id" => $id)); 
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $salarie=null;
    if($row) {
      $salarie = new Salarie($row);
    }
       // Retourne l'objet métier
    return $salarie;
  } // function find()
  
  /**
  * Lecture de tous les salariés
  * @return array
  * @throws Exception
  */
  function findAll() {
    $sql = "select * from salarie";
    try {
      $sth = $this->pdo->prepare($sql); // On passe par les méthodes de PDO
      $sth->execute(); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $salaries = array();
    foreach ($rows as $row) {
      $salaries[] = new Salarie($row);
    }
    // Retourne un tableau d'objets "salarié"
    return $salaries;
  } // function findAll()
  
  /**
  * Lecture de tous les salariés d'un ID service
  * @param int $id_service
  * @return \Salarie
  * @throws Exception
  */
  function findAllByIdService($id_service) {
    $sql = "select * from salarie where id_service = :id_service";
    try {
      $sth = $this->pdo->prepare($sql);  // On passe par les méthodes de PDO
      $sth->execute(array(":id_service" => $id_service)); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $salaries = array();
    foreach ($rows as $row) {
      $salaries[] = new Salarie($row);
    }
    // Retourne un tableau d'objets
    return $salaries;
  } //findAllByIdService()
  
  /**
  * Ajout d'un salarié
  * @param \Salarie
  * @return int Nombre de mises à jour
  * @throws Exception
  */
  function insert(Salarie $salarie) {
    $sql = "insert into salarie (matricule,nom,prenom,id_service) values (:matricule,:nom,:prenom,:id_service)";
    $params = array(
      ":matricule" => $salarie->get_matricule(),
      ":nom" => $salarie->get_nom(),
      ":prenom" => $salarie->get_prenom(),
      ":id_service" => $salarie->get_id_service()
    );
    $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
    $nb = $sth->rowcount();
    return $nb;  // Retourne le nombre de mise à jour
  } // insert()

  /**
  * Modification d'un salarié
  * @param \Salarie
  * @return int Nombre de mises à jour
  * @throws Exception
  */
  function update(Salarie $salarie) {
    $sql = "update salarie set matricule=:matricule,nom=:nom,prenom=:prenom,id_service=:id_service where id= :id";
    $params = array(
      ":id" => $salarie->get_id(),
      ":matricule" => $salarie->get_matricule(),
      ":nom" => $salarie->get_nom(),
      ":prenom" => $salarie->get_prenom(),
      ":id_service" => $salarie->get_id_service()
    );
    $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
    $nb = $sth->rowcount();
    return $nb;  // Retourne le nombre de mise à jour
  } // update()

  /**
  * Suppression d'un salarié
  * @param int ID du salarié
  * @return int Nombre de mises à jour
  * @throws Exception
  */
  function delete($id) {
    $sql = "delete from salarie where id=:id";
    $params = array(
      ":id" => $id
    );
    $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
    $nb = $sth->rowcount();
    return $nb;  // Retourne le nombre de mise à jour
  }

} // Class SalarieDAO