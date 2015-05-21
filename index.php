<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";
    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }
    
    if($uri=="/boot/index.php/home"){
      homeaction();
    }
    if($uri=="/boot/index.php/consultar"){
      consultaraction();
    }
    if($uri=="/boot/index.php/loggin.php"){
      logginaction();
    }
    if($uri=="/boot/index.php/succes"){
     logueosuccesaction();
    }
     if($uri=="/boot/index.php/fail"){
    
    }
     if($uri=="/boot/index.php/home?fail=yes"){
     logueofailaction();
    }
     if($uri=="/boot/index.php/consultar?type=name"){
     consultaraction();
    }
    if($uri=="/boot/index.php/consultar?proyecto=yes"){
     consultarproyecto();
    }
         if($uri=="/boot/index.php/consultar/search"){
     enviar_consulta();
    }
    
        if($uri=="/boot/index.php/sistema?registrar=e"){
     logueosuccesaction();
    }

       if($uri=="/boot/index.php/regestudiante.php"){
     registrarestudiante();
    }
    
    if($uri=="/boot/index.php/consultar?proyecto=succes"){
     consultaraction();
    }
    
    
    
    
?>