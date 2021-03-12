<?php
include("../sql.php");
if(isset($_GET['id'])){
    $id=isset($_GET['id']) ? $_GET['id'] : null;
    $sql=('DELETE FROM personnes WHERE id=:id');
    $request=db_connect()->prepare($sql);
        $request->execute(array(
            "id"=>$id
        ));
}
header('Location: exoc.php');
?>