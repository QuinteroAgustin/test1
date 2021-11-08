<?php
/**
 * Ajouter un salarié
 */
require_once "init.php";

// Instanciation des DAO
$salarieDAO = new SalarieDAO();
$serviceDAO = new ServiceDAO();

// Récupère la liste des services
$services = $serviceDAO->findAll();


// Lecture du formulaire
$submit = isset($_POST['submit']);
if ($submit) {
  // Formulaire soumi
  // Récupère les données du formulaire
  $matricule = isset($_POST['matricule']) ? $_POST['matricule'] : null;
  $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
  $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
  $id_service = isset($_POST['id_service']) ? $_POST['id_service'] : null;  
  // Crée un objet salarié à l'image des données
  $salarie = new Salarie(array(
      'matricule'=>$matricule,
      'nom'=>$nom,
      'prenom'=>$prenom,
      'id_service'=>$id_service
  ));
  // Ajoute un enregistrement dans la BD
  try {
    $salarieDAO->insert($salarie);
  } catch (pdoException $e) {
    die("Erreur : le salarié n'a pas pu être ajouté ".$e->getMessage());
  }
  // Redirection vers la liste des salariés
  header('Location: liste_salaries.php');
} else {
  // Formulaire non soumi
  // Initialise l'objet salarié
  $salarie = new Salarie();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>pdf</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>pdf</h1>
  <h2>Ajouter un salarié</h2>
  <?php include "menu.php"; ?>
  <?php require_once "salarieForm.php"; ?>
</body>
</html>