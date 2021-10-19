<?php

/**
 * sec16 - Filtres
 * Page d'inscription
 */
// Initialisations
include 'init.php';
$messages = array();  // Message d'erreur
$db = db_connect();
// Affichage
$submit=isset($_POST['submit']) ? $_POST['submit'] : NULL;
$nom=isset($_POST['nom']) ? $_POST['nom'] : NULL;
$prenom=isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$age=isset($_POST['age']) ? $_POST['age'] : NULL;
$email=isset($_POST['email']) ? $_POST['email'] : NULL;
$telephone=isset($_POST['telephone']) ? $_POST['telephone'] : NULL;
$cp=isset($_POST['cp']) ? $_POST['cp'] : NULL;

if(isset($submit)){
    
    if(empty(trim($nom))){
        $messages[] = "Le NOM est obligatoire.";
    }
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);

    if(empty(trim($prenom))){
        $messages[] = "Le PRENOM est obligatoire.";
    }
    $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);

    if(empty(trim($age))){
        $messages[] = "L'AGE est obligatoire.";
    }else{
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        if(filter_var($age, FILTER_VALIDATE_INT) === false){
            $messages[] = "L'AGE n'est pas un entier valide.";
        }
    }
    
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

    if(empty(trim($cp))){
        $messages[] = "Le Code postal est obligatoire.";
    }else{
        $cp = filter_var($cp, FILTER_SANITIZE_NUMBER_INT);
        if(filter_var($age, FILTER_VALIDATE_INT) === false){
            $messages[] = "Le Code postal n'est pas un entier valide.";
        }
        if(mb_strlen($cp) != 5){
            $messages[] = "Le Code postal doit contenir 5 chiffres.";
        }
    }
    
    if(empty($messages)){
        $sql="INSERT INTO inscription (nom, prenom, age, email, telephone, code_postal) VALUES (:nom, :prenom, :age, :email, :telephone, :cp)";
        $request = $db->prepare($sql);
        $request = $request->execute(array(
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":age" => $age,
            ":email" => $email,
            ":telephone" => $telephone,
            ":cp" => $cp
        ));
        header('Location: confirmation.php');
    }
}

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
  <h2>Inscription</h2>
  <?php include('menu.php');?>
  <?php
    if (count($messages) > 0) {
      echo "<ul>";
      foreach ($messages as $message) {
        echo "<li class=\"erreur\" >" . $message . "</li>";
      }
      echo "</ul>";
    }
    ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" value="<?= $nom ?>"><br><br>
    <label for="prenom">Prénom</label><br>
    <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>"><br><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" id="age" value="<?= $age ?>"><br><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" value="<?= $email ?>"><br><br>
    <label for="telephone">Téléphone</label><br>
    <input type="text" name="telephone" id="telephone" value="<?= $telephone ?>"><br><br>
    <label for="cp">Code postal</label><br>
    <input type="text" name="cp" id="cp" value="<?= $cp ?>"><br><br>
    <input type="submit" value="OK" name="submit">
  </form>
  </div>
</body>

</html>