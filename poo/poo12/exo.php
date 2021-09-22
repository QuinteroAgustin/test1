<?php
/**
* Page d'accueil
*
* @author 
*/
include 'init.php';
$tortue1 = new Tortue();
$tortue1->set_nom("Leonardo");
$tortue1->set_surnom(["Leo"]);
$tortue1->set_couleur("bleu");

$tortue2 = new Tortue();
$tortue2->set_nom("Mechelangelo");
$tortue2->set_surnom(["Mikey", "Mike"]);
$tortue2->set_couleur("orange");

$tortue3 = new Tortue();
$tortue3->set_nom("Donatello");
$tortue3->set_surnom(["Donnie", "Don"]);
$tortue3->set_couleur("violet");

$tortue4 = new Tortue();
$tortue4->set_nom("Raphael");
$tortue4->set_surnom(["Raph"]);
$tortue4->set_couleur("rouge");

Tortue::set_liste([$tortue1, $tortue2, $tortue3, $tortue4]);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Tortues Ninja</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>Création des tortues</h1>
  <?php //Le code c'est ici 
    foreach(Tortue::get_liste() as $tortue){
      echo $tortue->afficher();
    }
  ?>
  <h1>Liste des tortues</h1>
  <?php
    echo Tortue::get_nb_lib();
    echo "<p>La seconde tortue est ". Tortue::get_tortue_nb(2)->get_nom_surnom()."</p>";
  ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Surnom</th>
      <th>Couleur</th>
    </tr>
    <?php
      foreach(Tortue::get_liste() as $tortue){
        echo "<tr>";
        echo "<td>".$tortue->get_id()."</td>";
        echo "<td>".$tortue->get_nom()."</td>";
        echo "<td>".$tortue->get_surnom()."</td>";
        echo "<td>".$tortue->get_couleur()."</td>";
        echo "</tr>";
      }
    ?>
  </table>
  <h1>Liste des tortues avec l'indice du tableau PHP</h1>
  <?php
    echo "<ul>";
    foreach(Tortue::get_liste() as $key=>$tortue){
      echo "<li>".$key." ".$tortue->get_nom_surnom()."</li>";
    }
    echo "</ul>";
  ?>

  <h1>Liste des tortues avec print_r</h1>
  <pre>
    <?= print_r(Tortue::get_liste()) ?>
  </pre>
</body>
</html>