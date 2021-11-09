<?php

/**
 * sec16 - Filtres
 * Page de liste
 */
// Initialisations
include 'init.php';
$db = db_connect();
try{
  $sql ='SELECT * FROM inscription ORDER BY id_inscription ASC';
  $request=$db->prepare($sql);
  $request->execute();
  $users=$request->fetchAll();
}catch (PDOException $ex) {
  die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec16 - Filtres</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
  <h1>Sec 16 - Filters</h1>
  <h2>Liste des inscriptions</h2>
  <?php include('menu.php');?>
  <table>
      <tr>
          <th>Prénom</th>
          <th>Nom</th>
          <th>Age</th>
          <th>Email</th>
          <th>Téléphone</th>
          <th>Code postal</th>
      </tr>
      <?php 
      foreach ($users as $user){
        echo "<tr>";
        echo '<td>'.$user['prenom'].'</td>';
        echo '<td>'.$user['nom'].'</td>';
        echo '<td>'.$user['age'].'</td>';
        echo '<td>'.$user['email'].'</td>';
        echo '<td>'.$user['telephone'].'</td>';
        echo '<td>'.$user['code_postal'].'</td>';
        echo "</tr>";
      }

      ?>
      
  </table>
  </div>
</body>

</html>