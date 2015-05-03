<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";
    $uri= "/boot/index.php/home";
    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }
    echo $uri;
    if($uri=="/boot/index.php/home"){
      homeaction();
    }
    if($uri=="/diego/index.php/crearusuarios.php"){
      usuarios_nuevo();
    }
?>