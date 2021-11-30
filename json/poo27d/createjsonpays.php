<?php
/**
 * po26c : pdf create
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$dao = new PaysDAO(); 
$pays = $dao->findAll();
$json = [];
foreach($pays as $p){
    $json[] =  $p->dump();
}
$json = json_encode($json, JSON_PRETTY_PRINT);
header("Content-type: application/json; charset=utf-8");
echo $json;
?>