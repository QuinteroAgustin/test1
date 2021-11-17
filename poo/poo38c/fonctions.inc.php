<?php

/**
 * Fonctions diverses
 */
// Connexion à la BD
function connexion() {
  $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
  try {
    $dbh = new PDO($dsn, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  } catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
  }
}
/**
 * Affiche le contenu d'un tableau dans la page web
 *
 * @param array $tableau
 * @return void
 */
function pre(array $tableau) {
  echo "<pre>";
  print_r($tableau);
  echo "</pre>";
}
