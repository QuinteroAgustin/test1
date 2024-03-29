<?php
/**
 * sec19 - Changement périodique d'un MdP
 * Initialisations
 */
// Gestion des sessions
session_start();

include("functions/functions.php");

// Paramétrage pour certains serveurs qui n'affichent pas les erreurs PHP par défaut
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', '1');
ini_set('html_errors', '1');
// Autorise les uploads de fichier
ini_set('file_uploads', '1');
// Encodage avec les fonctions mb_*
mb_internal_encoding('UTF-8');
// Force le fuseau de Paris
date_default_timezone_set('Europe/Paris');

// Chemins dans l'OS
define('DS', DIRECTORY_SEPARATOR);   // Séparateur des noms de dossier (dépend de l'OS)
define('ROOT', dirname(__FILE__));  // Racine du site en absolu (à utiliser dans les includes par exemple)

// Date système
define('DATE_SYSTEME',"2023-12-01");
