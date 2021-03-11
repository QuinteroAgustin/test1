<?php
    session_start();
    $likes=array();
    $value=isset($_POST['value']) ? $_POST['value'] : null;
    $submit=isset($_POST['submit']);
    if($submit){
        if(isset($_SESSION['like'])){
            $likes=$_SESSION['like'];
        }
        $likes[]=$value;
        $_SESSION['like']=$likes;
    }
    header('Location: exo.php');
?>