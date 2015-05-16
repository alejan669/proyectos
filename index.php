<?php
session_start();
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";
    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }
    if($uri=="/boot/index.php/form_line"){
      formconsultarlineaction();
    }
    if($uri=="/boot/index.php/consultar?type=jura"){
       consultaraction();
    }
    if($uri=="/boot/index.php/consultar?proyectojura=succes"){
       consultaraction();
    }
      if($uri=="/boot/index.php/consultar?proyectodire=succes"){
       consultaraction();
    }
    
    
    if($uri=="/boot/index.php/consultar?type=dire"){
       consultaraction();
    }
    if($uri=="/boot/index.php/consultar?proyectoline=succes"){
        consultaraction();
    }
    

    if($uri=="/boot/index.php/consultar?proyectoyear=succes"){
      consultaraction();
    }
    if($uri=="/boot/index.php/consultar?type=line"){
      consultaraction();
    }
   
    if($uri=="/boot/index.php/form_year"){
      formconsultaryearaction();
    }
    if($uri=="/boot/index.php/home"){
      homeaction();
    }
    if($uri=="/boot/index.php/sacarproyecto"){
      sacarproyecto();
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
    if($uri=="/boot/index.php/consultar?type=year"){
     consultaraction();
    }
   
    if($uri=="/boot/index.php/consultar?proyecto=yes"){
     consultarproyecto();
    }
         if($uri=="/boot/index.php/consultar/search"){
     enviar_consulta();
    }
    
    if($uri=="/boot/index.php/consultar/searchdire"){
     enviardire_consulta();
    }
      if($uri=="/boot/index.php/consultar/searchjura"){
     enviarjura_consulta();
    }
<<<<<<< HEAD
=======

        if($uri=="/boot/index.php/sistema?registrar=p"){
     logueosuccesaction();
    }
>>>>>>> origin/master
    
        if($uri=="/boot/index.php/sistema?registrar=e"){
     logueosuccesaction();
    }

        if($uri=="/boot/index.php/sistema?registrar=j"){
     logueosuccesaction();
    }

    
       if($uri=="/boot/index.php/regestudiante.php"){
     registrarestudiante();
    }

       if($uri=="/boot/index.php/regproyecto.php"){
     registrarproyecto();
    }

       if($uri=="/boot/index.php/regdocentes.php"){
     registrardocente();
    }
    
    if($uri=="/boot/index.php/consultar?proyecto=succes"){
     consultaraction();
    }
     if($uri=="/boot/index.php/sistema?registrar=f"){
     logueosuccesaction();
    }
     if($uri=="/boot/index.php/regfacultad.php"){
     registrarfacultad();
    }
    
         $uri = explode("?", $_SERVER['REQUEST_URI']);
    if($uri[0]=="/boot/index.php/consultar_proyecto"){
      mostrarproyecto();
    }
     if($uri[0]=="/boot/index.php/consultar_jurado"){
      sacarpjurado();
    }
    if($uri[0]=="/boot/index.php/consultar_director"){
      sacarpdirector();
    }

    
    
?>