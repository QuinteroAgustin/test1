<?php
    /**
     * Paramètre de la base de données
     */
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_HOST','localhost');
    define('DB_NAME','marvel');

    function db_connect() {
        // On récupère les paramètres de la base à partir des constantes de init.php
        $user=DB_USER;
        $password=DB_PASSWORD;
        $host=DB_HOST;
        $name=DB_NAME;
        // On construit le DSN
        $dsn = 'mysql:host=' . $host . ';dbname=' . $name;
        // Création de la connexion
        try {
            $pdo = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>
            "SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo("<p>Erreur lors de la connexion : " . $e->getMessage().'<p>');
        }
        return $pdo;
    }
?>