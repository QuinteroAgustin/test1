<?php
// Connexion à la base de données
include('inc/connexion_bd.inc.php');
// Nota :
// Les formats acceptés par la méthode format() sont décrits ici
// http://php.net/manual/fr/function.date.php
// Les fuseaux horaires sont ici
// http://php.net/manual/fr/timezones.php
// Les formats pour les intervalles de la classe DateInterval sont ici :
// http://php.net/manual/fr/dateinterval.format.php
// Les formats des périodes d'intervalle sont ici
// http://php.net/manual/fr/dateinterval.construct.php

$db = db();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po07 - Classe DateTime</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <h1>po07 - Classe DateTime</h1>

  <h3>Question 1</h3>
  <?php 
    date_default_timezone_set('Europe/Paris');
    $date = date('d/m/Y');
    echo $date;
  ?>

  <h3>Question 2</h3>
  <?php 
    $date_paris = date('d/m/Y H:i:s');
    echo $date_paris;
  ?>

  <h3>Question 3</h3>
  <?php
    $date_sql = date('Y/m/d H:i:s');
    echo $date_sql;
  ?>

  <h3>Question 4</h3>
  <?php 
    date_default_timezone_set('Europe/London');
    $date_london =  date('d/m/Y H:i:s');
    echo $date_london;
  ?>

  <h3>Question 5</h3>
  <?php
    $date1 = new DateTime('2020/12/15');
    $date2 = new DateTime('2021/12/15');
    $day_diff = $date1->diff($date2);
    echo $day_diff->format('%R%a days');
  ?>

  <h3>Question 6</h3>

  <h3>Question 7</h3>

  <h3>Question 8</h3>
  <?php
    try {
      $sql = "SELECT * FROM my_table;";
      $sth = $db->prepare($sql);
      $sth->execute();
      $result = $sth->fetchAll();
    } catch (Exception $ex) {
      echo "<p>Message = " . $ex->getMessage() . "</p>";
    }
    echo '<ul>';
    foreach($result as $value){
      echo '<li>['.$value['id'].'] '.$value['my_date'].'</li>';
    }
    echo '</ul>';
  ?>
</body>

</html>