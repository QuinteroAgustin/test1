<?php 
    /**
   * sec17 - Sécurisation
   * Inscription
   */
  // Initialisations
  include "init.php";
  // Connexion à la base
  $dbh = db_connect();
  $messages = array();  // Message d'erreur
  // Récupère le contenu du formulaire
  $login = isset($_POST['login']) ? $_POST['login'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;
  $nom = isset($_POST['nom']) ? $_POST['nom'] : null;
  $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : null;
  $submit = isset($_POST['submit']);

  if($submit){
    if(empty(trim($login))){
      $messages[] = "Le LOGIN est obligatoire.";
    }
    $login = filter_var($login, FILTER_SANITIZE_STRING);
    if(empty(trim($password))){
      $messages[] = "Le PASSWORD est obligatoire.";
    }
    if(empty(trim($nom))){
      $messages[] = "Le NOM est obligatoire.";
    }
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    if(empty(trim($prenom))){
      $messages[] = "Le PRENOM est obligatoire.";
    }
    $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
    if(empty(trim($email))){
      $messages[] = "L'EMAIL est obligatoire.";
    }else{
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $messages[] = "L'EMAIL n'est pas un email valide.";
      }
    }
    $telephone = filter_var($telephone, FILTER_SANITIZE_NUMBER_INT);
    if(trim($telephone)){
      if(filter_var($telephone, FILTER_VALIDATE_INT) === FALSE){
          $messages[] = "Le TELEPHONE n'est pas un entier valide.";
      }
    }
    if(empty($messages)){
      $pass_hash = password_hash($password, PASSWORD_DEFAULT);
      $sql='INSERT INTO user (login, password, nom, prenom, email, telephone) VALUES (:login, :password, :nom, :prenom, :email, :telephone)';
      try {
        $request = $dbh->prepare($sql);
        $request = $request->execute(array(
          ":login" => $login,
          ":password" => $pass_hash,
          ":nom" => $nom,
          ":prenom" => $prenom,
          ":email" => $email,
          ":telephone" => $telephone
        ));
      }catch (PDOException $e){
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
      }
      header('Location: ok.php?nom='.$nom.'&prenom='.$prenom.'');
    }
  }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec17 - Sécurisation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Inscription</h2>
    <?php 
      if (isset($_SESSION["user"])){
        header('Location: profil.php');
      }
      include "menu.php";
    ?>
    <?php
      if (count($messages) > 0) {
        echo "<ul>";
        foreach ($messages as $message) {
          echo "<li>" . $message . "</li>";
        }
        echo "</ul>";
      }
    ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Login<br /><input type="text" name="login" id="login" value="<?= $login ?>"></p>
      <p>Password<br /><input type="password" name="password" id="password" value="<?= $password ?>"></p>
      <p>Nom<br /><input type="text" name="nom" id="nom" value="<?= $nom ?>"></p>
      <p>Prénom<br /><input type="text" name="prenom" id="prenom" value="<?= $prenom ?>"></p>
      <p>Email<br /><input type="mail" name="email" id="email" value="<?= $email ?>"></p>
      <p>Téléphone<br /><input type="text" name="telephone" id="telephone" value="<?= $telephone ?>"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>