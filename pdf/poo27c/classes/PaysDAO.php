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

  function insert(Pays $pays){
    $sql = "INSERT INTO pays (code, alpha2, alpha3, nom_en, nom_fr) VALUES (:code, :alpha2, :alpha3, :nom_en, :nom_fr)";
    try{
      $values = array(
        ':code' => $pays->get_code(), 
        ':alpha2' => $pays->get_alpha2(), 
        ':alpha3' => $pays->get_alpha3(), 
        ':nom_en' => $pays->get_nom_en(), 
        ':nom_fr' => $pays->get_nom_fr()
      );
      $sth = $this->executer($sql, $values);
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }

  function update(Pays $pays){
    $sql = "UPDATE pays SET code=:code, alpha2=:alpha2, alpha3=:alpha3, nom_en=:nom_en, nom_fr=:nom_fr WHERE id_pays=:id_pays";
    try{
      $values = array(
        ':id_pays' => $pays->get_id_pays(), 
        ':code' => $pays->get_code(), 
        ':alpha2' => $pays->get_alpha2(), 
        ':alpha3' => $pays->get_alpha3(), 
        ':nom_en' => $pays->get_nom_en(), 
        ':nom_fr' => $pays->get_nom_fr()
      );
      $sth = $this->executer($sql, $values);
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }

  function delete($id){
    $sql = "DELETE FROM pays WHERE id_pays=:id_pays";
    try{
      $sth = $this->executer($sql, array('id_pays' => $id));
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }
  
} // Class PaysDAO