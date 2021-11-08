<?php

/**
* Classe DAO ServiceDAO
*
* @author jef
*/

class ServiceDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'un service par son ID
  * @param type $id_service
  * @return \Service
  * @throws Exception
  */
  function find($id_service) {
    $sql = "select * from service where id=:id_service";
    try {
      $sth = $this->pdo->prepare($sql);
      $sth->execute(array(":id_service" => $id_service));
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $service=null;
    if ($row){
      $service = new Service($row);
      $salarieDAO = new SalarieDAO();
      // Lecture des salaries associées au services
      $salaries = $salarieDAO->findAllByIdService($id_service);
      $service->set_salaries($salaries);
    }
    // Retourne l'objet métier
    return $service;
  } // function find()
  
  /**
  * Lecture de tous les services
  * @return array
  * @throws Exception
  */
  function findAll() {
    $sql = "select * from service";
    try {
      $sth = $this->pdo->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $services = array();
    $salarieDAO = new SalarieDAO();
    foreach ($rows as $row) {
      // Lecture des salaries associées au service
      $salaries = $salarieDAO->findAllByIdService($row["id"]);
      $row['salaries'] = $salaries;
      $services[] = new Service($row);
    }
    // Retourne un tableau d'objets
    return $services;
  }
  
} // Classe ServiceDAO