<?php
/**
* Classe DAO MarvelDAO
*
* @author gus
*/

class MarvelDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'un marvel par son ID
  * @param int ID du marvel
  * @return \Marvel
  */
    function find($id) {
    $sql = "select * from mcu where id= :id";
    try {
      $params = array(":id" => $id);
      $sth=$this->executer($sql,$params); 
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $marvel=null;
    if($row) {
      $marvel = new Marvel($row);
    }
       // Retourne l'objet métier
    return $marvel;
  } // function find()
  
  /**
  * Lecture de tous les pays
  * @return array
  */
  function findAll() {
    $sql = "select * from mcu";
    try {
      $sth=$this->executer($sql); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $marvels = array();
    foreach ($rows as $row) {
      $marvels[] = new Marvel($row);
    }
    // Retourne un tableau d'objets "marvels"
    return $marvels;
  } // function findAll()

  function insert(Marvel $marvel){
    $sql = "INSERT INTO mcu (title, phase, us_release_date, directors, screenwriters, producers, status) VALUES (:title, :phase, :us_release_date, :directors, :screenwriters, :producers, :status)";
    try{
      $values = array(
        ':title' => $marvel->get_title(), 
        ':phase' => $marvel->get_phase(), 
        ':us_release_date' => $marvel->get_us_release_date(), 
        ':directors' => $marvel->get_directors(),
        ':screenwriters' => $marvel->get_screenwriters(),
        ':producers' => $marvel->get_producers(),
        ':status' => $marvel->get_status()
      );
      $sth = $this->executer($sql, $values);
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }

  function update(Marvel $marvel){
    $sql = "UPDATE mcu SET title=:title, phase=:phase, us_release_date=:us_release_date, directors=:directors, screenwriters=:screenwriters, producers=:producers, status=:status WHERE id=:id";
    try{
      $values = array(
        ':id' => $marvel->get_id(), 
        ':title' => $marvel->get_title(), 
        ':phase' => $marvel->get_phase(), 
        ':us_release_date' => $marvel->get_us_release_date(), 
        ':directors' => $marvel->get_directors(),
        ':screenwriters' => $marvel->get_screenwriters(),
        ':producers' => $marvel->get_producers(),
        ':status' => $marvel->get_status()
      );
      $sth = $this->executer($sql, $values);
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }

  function delete($id){
    $sql = "DELETE FROM mcu WHERE id=:id";
    try{
      $sth = $this->executer($sql, array('id' => $id));
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }
  
} // Class MarvelDAO