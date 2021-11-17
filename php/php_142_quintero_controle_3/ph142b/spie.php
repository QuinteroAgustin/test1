<?php
    $file = fopen('log.txt','a+');
    $phrase="date ip fichier";
    fwrite($file,$phrase);
?>