<?php

/**
 * sec19 - Changement périodique d'un MdP
 * Changement du mot de passe
 */
// Initialisations
include "init.php";
$db = connexion();
$messages=[];

$id=isset($_SESSION['changer'])?$_SESSION['changer']:NULL;
$password = isset($_POST['password'])?$_POST['password']:NULL;
$submit = isset($_POST['submit'])?$_POST['submit']:NULL;

if($id){
  if($submit){
    if(empty(trim($password))){
      $messages[]= 'Le password est vide';
    }

    if(empty($messages)){
      try {
        $sql = 'UPDATE user SET password=:password WHERE id_user=:id';
        $request = $db->prepare($sql);
        $request->execute(array(
          ':password'=>$password,
          ':id'=>$id
        ));
      } catch (PDOException $ex) {
        die("Erreur lors de la connexion SQL : " . $ex->getMessage());
      }
      try {
        $date=DATE_SYSTEME;
        $sql = 'INSERT INTO histo (`id_user`, `password`, `date`) VALUES (:id, :password, :daydate)';
        $request = $db->prepare($sql);
        $request->execute(array(
          ':id'=>$id,
          ':password'=>$password,
          ':daydate'=>$date
        ));
      } catch (PDOException $ex) {
        die("Erreur lors de la connexion SQL : " . $ex->getMessage());
      }
      if($request->rowCount() == 0){
        header("Location: index.php");
        exit();
      }else{
        try {
          $sql = 'SELECT * FROM user WHERE id_user=:id';
          $request = $db->prepare($sql);
          $request->execute(array(
            ':id'=>$id
          ));
          $user = $request->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
          die("Erreur lors de la connexion SQL : " . $ex->getMessage());
        }
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
      }
    }
  }
}else{
  header("Location: index.php");
  exit();
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
    <h2>changemement de mot de passe</h2>
    <?php include "menu.php"; ?>
    <?php
    echo '<ul>';
    foreach($messages as $message){
      echo '<li>'.$message.'</li>';
    }
    echo '</ul>';
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="password">Nouveau password</label><br>
      <input type="password" name="password" id="password">
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>