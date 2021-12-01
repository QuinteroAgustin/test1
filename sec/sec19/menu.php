<?php
/**
 * sec19 - Changement périodique d'un MdP
 * Menu de l'application
 */

// Gestion de la connexion
if (isset($_SESSION["user"])) {
  $bienvenue="Salut ".$_SESSION["user"]['login'];
} else {
  $bienvenue="Salut étranger";
}

?>
<ul>
  <li><a href="index.php">Accueil</a></li>
  <li><a href="connexion.php">Connexion</a></li>
  <li><a href="deconnexion.php">Déconnexion</a></li>
</ul>
<p>Nous sommes le <?= DATE_SYSTEME; ?></p>
<p><?=$bienvenue?></p>