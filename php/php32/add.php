<?php
if(isset($_POST['submit'])){
    include("sql.php");
    $name=isset($_POST['name'])?$_POST['name']:null;
    $sql="INSERT INTO items(name, user, done, created) VALUES (:name, 1, 0, CURRENT_TIMESTAMP)";
    $request=db_connect()->prepare($sql);
    $request->execute(array(
        ":name"=>$name
    ));
}   
header("Location: exo.php");
?>