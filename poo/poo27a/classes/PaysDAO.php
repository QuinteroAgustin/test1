<?php
/**
* Classe DAO PaysDAO
*
* @author jef
*/

class PaysDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'un pays par son ID
  * @param int ID du pays
  * @return \Pays
  */
    function find($id) {
    $sql = "select * from pays where id_pays= :id_pays";
    try {
      $params = array(":id_pays" => $id);
      $sth=$this->executer($sql,$params); 
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $pays=null;
    if($row) {
      $pays = new Pays($row);
    }
       // Retourne l'objet métier
    return $pays;
  } // function find()
  
  /**
  * Lecture de tous les pays
  * @return array
  */
  function findAll() {
    $sql = "select * from pays";
    try {
      $sth=$this->executer($sql); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $les_pays = array();
    foreach ($rows as $row) {
      $les_pays[] = new Pays($row);
    }
    // Retourne un tableau d'objets "pays"
    return $les_pays;
  } // function findAll()
  
} // Class PaysDAO