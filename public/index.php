<?php

    require_once "../vendor/autoload.php";

    $route = new \app\Route;
    echo 'servidor esta rodando ';
    echo '<hr>';
    print_r($route -> getUrl()) ;
?>