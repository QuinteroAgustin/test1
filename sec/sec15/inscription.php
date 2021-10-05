<?php

/**
 * sec15 - Validation
 * Inscription
 */
// Initialisations
include "init.php";
$messages = array();  // Message d'erreur

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;
$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
$nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$age = isset($_POST['age']) ? $_POST['age'] : NULL;
$submit = isset($_POST['submit']);

// Vérifie le user
if ($submit) {
  //code verif
  if(empty(trim($login))){
    $messages[] = "Le login est obligatoire.";
  }
  if(mb_strlen($login) < 4){
    $messages[] = "Le login doit faire au moins 4 car. (apprend a compter)";
  }
  if(!ctype_alnum($login)){
    $messages[] = "Le login doit être alphanumérique";
  }

  if(empty(trim($password))){
    $messages[] = "Le password est obligatoire";
  }
  if(mb_strlen($password) < 8){
    $messages[] = "Le password doit faire au moins 8 car";
  }
  if(!preg_match("#[a-z]#", $password)){
    $messages[] = "Le password doit contenir au moins une minuscule";
  }
  if(!preg_match("#[A-Z]#", $password)){
    $messages[] = "Le password doit contenir au moins une majuscule";
  }
  if(!preg_match("#[0-9]#", $password)){
    $messages[] = "Le password doit contenir au moins un chiffre";
  }
  if(!preg_match("#[\W]#", $password)){
    $messages[] = "Le password doit contenir au moins un caractère spécial";
  }

  if(empty(trim($mail))){
    $messages[] = "Le mail est obligatoire.";
  }
  if(!filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL)){
    $messages[] = "Le format de l'email est incorrect.";
  }

  if(empty(trim($nom))){
    $messages[] = "Le nom est obligatoire.";
  }
  if(!ctype_alnum($nom)){
    $messages[] = "Le nom doit être alphanumérique";
  }

  if(empty(trim($age))){
    $messages[] = "l'age est obligatoire.";
  }
  if(!filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT)){
    $messages[] = "L'age doit être alphanumérique";
  }

  if(empty($messages)){
    header('Location: ok.php');
  }

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec15 - Validation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec15 - Validation</h1>
    <h2>Inscription</h2>
    <?php
    if (count($messages) > 0) {
      echo "<ul>";
      foreach ($messages as $message) {
        echo "<li class=\"erreur\" >" . $message . "</li>";
      }
      echo "</ul>";
    }
    ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      
      <label for="login">Login</label><br>
      <input type="text" name="login" id="login" value="<?= $login; ?>"><br><br>
      
      <label for="password">Password</label><br>
      <input type="password" name="password" id="password"><br><br>
      
      <label for="mail">Mail</label><br>
      <input type="text" name="mail" id="mail" value="<?= $mail; ?>"><br><br>
      
      <label for="nom">Nom</label><br>
      <input type="text" name="nom" id="nom" value="<?= $nom; ?>"><br><br>
      
      <label for="age">Age</label><br>
      <input type="text" name="age" id="age" value="<?= $age; ?>"><br><br>

      <input type="submit" name="submit" value="OK">
    
    </form>
  </div>
</body>

</html>