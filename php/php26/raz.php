<?php
    session_start();
    if(isset($_SESSION['like'])){
        unset($_SESSION['like']);
    }
    header('Location: exo.php');
?>