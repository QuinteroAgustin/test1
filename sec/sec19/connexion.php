<?php

/**
 * sec19 - Changement périodique d'un MdP
 * Connexion
 */
// Initialisations
include "init.php";
$db = connexion();
$messages = [];

if(isset($_SESSION['user'])){
  header("Location: index.php");
  exit();
}

$login = isset($_POST['login'])?$_POST['login']:NULL;
$password = isset($_POST['password'])?$_POST['password']:NULL;
$submit = isset($_POST['submit'])?$_POST['submit']:NULL;

if($submit){
  if(empty(trim($login))){
    $messages[]= 'Le login est vide';
  }
  
  if(empty(trim($password))){
    $messages[]= 'Le password est vide';
  }

  try {
    $sql = 'SELECT * FROM user WHERE login=:login AND password=:password';
    $request = $db->prepare($sql);
    $request->execute(array(':login'=>$login, ':password'=>$password));
    $user = $request->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
  }

  if($request->rowCount() == 0){
    $messages[]= 'identifiants incorrecte';
  }
  
  if(empty($messages)){
    try {
      $sql = 'SELECT MAX(date) as date FROM histo WHERE id_user=:id';
      $request = $db->prepare($sql);
      $request->execute(array(':id'=>$user['id_user']));
      $histo = $request->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
      die("Erreur lors de la connexion SQL : " . $ex->getMessage());
    }
    $dt1 = DateTime::createFromFormat("Y-m-d", $histo['date']);
    $dt2 = DateTime::createFromFormat("Y-m-d", DATE_SYSTEME);
    $nb_jours = $dt1->diff($dt2, true)->days;
    if(($histo['date'] == NULL) || ($nb_jours > 90)){
      $_SESSION['changer'] = $user['id_user'];
      header("Location: changer.php");
      exit();
    }else{
      $_SESSION['user'] = $user;
      header("Location: index.php");
      exit();
    }
  }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec19 - Changement périodique d'un MdP</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec19 - Changement périodique d'un MdP</h1>
    <h2>Connexion</h2>
    <?php include "menu.php"; ?>
    <?php
    echo '<ul>';
    foreach($messages as $message){
      echo '<li>'.$message.'</li>';
    }
    echo '</ul>';
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="login">Login</label><br>
      <input type="text" name="login" id="login" value="<?= $login ?>"><br>
      <label for="password">Password</label><br>
      <input type="password" name="password" id="password"><br>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>