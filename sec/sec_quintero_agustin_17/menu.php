<?php

/**
 * sec17 - Sécurisation
 * Menu de l'application
 */
$id_user = isset($_SESSION["user"]) ? $_SESSION["user"]["id_user"] : null ;
echo "<ul>";
echo '<li><a href="index.php">Accueil</a></li>';
if (isset($_SESSION["user"])){
  echo '<li><a href="profil.php?id=<?=$id_user ?>">Profil</a></li>';
  echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
}else{
  echo '<li><a href="inscription.php">Inscription</a></li>';
  echo '<li><a href="connexion.php">Connexion</a></li>';
}
echo "</ul>";
?>
