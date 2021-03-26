<?php
if(isset($_GET["as"])){
    include("sql.php");
    $id=isset($_GET['id'])?$_GET['id']:null;
    $sql="UPDATE items SET done=1 WHERE id=:id";
    $request = db_connect()->prepare($sql);
    $request->execute(array(
        ":id"=>$id
    ));
}
header('Location: exo.php');
?>