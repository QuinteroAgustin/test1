<?php
include "init.php";
session_unset();
session_destroy();
setcookie(session_name(),'',-1,'/');
// Renvoie à la page d'accueil
header('Location: index.php');
exit;
?>