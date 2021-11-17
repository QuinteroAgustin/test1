<?php
/**
* Classe DAO MarvelDAO
*
* @author gus
*/

class FortuneDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'un marvel par son ID
  * @param int ID du marvel
  * @return \Fortune
  */
    function find($id) {
    $sql = "select * from fortune where id_fortune = :id";
    try {
      $params = array(":id" => $id);
      $sth=$this->executer($sql,$params); 
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $fortune=null;
    if($row) {
      $fortune = new Fortune($row);
    }
       // Retourne l'objet
    return $fortune;
  } // function find()
  
  /**
  * Lecture de toues les fortunes
  * @return array
  */
  function findAll() {
    $sql = "select * from fortune ORDER BY ca DESC";
    try {
      $sth=$this->executer($sql); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $fortunes = array();
    foreach ($rows as $row) {
      $fortunes[] = new Fortune($row);
    }
    // Retourne un tableau d'objets "fortunes"
    return $fortunes;
  } // function findAll()

  function insert(Fortune $fortune){
    $sql = "INSERT INTO fortune (rang, nom, siege, pays, ca, benefice, nb_employes, branche, directeur, evolution) VALUES (:rang, :nom, :siege, :pays, :ca, :benefice, :nb_employes, :branche, :directeur, :evolution)";
    try{
      $values = array(
        ':rang' => $fortune->get_rang(), 
        ':nom' => $fortune->get_nom(), 
        ':siege' => $fortune->get_siege(), 
        ':pays' => $fortune->get_pays(),
        ':ca' => $fortune->get_ca(),
        ':benefice' => $fortune->get_benefice(),
        ':nb_employes' => $fortune->get_nb_employes(),
        ':branche' => $fortune->get_branche(),
        ':directeur' => $fortune->get_directeur(),
        ':evolution' => $fortune->get_evolution()
      );
      $sth = $this->executer($sql, $values);
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }

  function update(Fortune $fortune){
    $sql = "UPDATE fortune SET rang=:rang, nom=:nom, siege=:siege, pays=:pays, ca=:ca, benefice=:benefice, nb_employes=:nb_employes, branche=:branche, directeur=:directeur, evolution=:evolution WHERE id_fortune=:id_fortune";
    try{
      $values = array(
        ':id_fortune' => $fortune->get_id_fortune(),
        ':rang' => $fortune->get_rang(), 
        ':nom' => $fortune->get_nom(), 
        ':siege' => $fortune->get_siege(), 
        ':pays' => $fortune->get_pays(),
        ':ca' => $fortune->get_ca(),
        ':benefice' => $fortune->get_benefice(),
        ':nb_employes' => $fortune->get_nb_employes(),
        ':branche' => $fortune->get_branche(),
        ':directeur' => $fortune->get_directeur(),
        ':evolution' => $fortune->get_evolution()
      );
      $sth = $this->executer($sql, $values);
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }

  function delete($id){
    $sql = "DELETE FROM fortune WHERE id_fortune=:id";
    try{
      $sth = $this->executer($sql, array('id' => $id));
    }catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  }
  
} // Class MarvelDAO