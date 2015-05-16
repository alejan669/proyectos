<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include "inc/head_common.php" ?>
    
    <title>Consulta proyectos y pasantias</title>
   
     <script>
      $(function() {
       $('.nav li a').click(function(e) {
           var $this = $(this);
           $this.closest('ul').children('li').removeClass('active');
           $this.parent().addClass('active');
       });

      });

   </script>
     <script>
   $(document).ready(function() {
    setTimeout(function() {
        $("#failed").fadeOut(1000);
    },2000);
});
</script>
  </head>

  <body>
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/boot/index.php/home">Inicio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action='/boot/index.php/loggin.php' method='post'>
            <div class="form-group">
              <input type="text" placeholder="Email" name='correo' class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name='pass' class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
           <div class="jumbotron">
             <div id = 'esp'class="row">
                   
                   <div class="col-md-3">
                   <div class="panel panel-default" id="opc">
                        <ul class="nav nav-pills nav-stacked" id ='opc1'>
<<<<<<< HEAD
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='name'){echo "active";}} ?> "><a href="?type=name" >Nombre</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='year'){echo "active";}}  if (isset($_GET['proyectoyear'])){if($_GET['proyectoyear']=='succes'){echo "active";}}  ?>  "><a href="?type=year">Año/Semestre</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='line'){echo "active";}}  if (isset($_GET['proyectoline'])){if($_GET['proyectoline']=='succes'){echo "active";}}?> "><a href="?type=line">Lineas de investigacion</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='jura'){echo "active";}}  if (isset($_GET['proyectojura'])){if($_GET['proyectojura']=='succes'){echo "active";}}?> "><a href="?type=jura">Jurados</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='dire'){echo "active";}}  if (isset($_GET['proyectodire'])){if($_GET['proyectodire']=='succes'){echo "active";}}?> "><a href="?type=dire">Directores</a></li>
=======
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='name'){echo "active";}}?> ?>"><a href="?type=name" >Nombre</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='year'){echo "active";}}?> ?>"><a href="?type=year">Año/Semestre</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='line'){echo "active";}}?> ?>"><a href="?type=line">Lineas de investigacion</a></li>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='jura'){echo "active";}}?> ?>"><a href="?type=jura">Jurados</a></li>
                          <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='dire'){echo "active";}}?> ?>"><a href="?type=dire">Directores</a></li>
>>>>>>> origin/master
                        </ul>
                    </div>
                   </div>
                   <div class="col-md-9">
                        <center>
                          <?php 
                          if (isset($_GET['type'])){
                          if($_GET['type']=='name'){
                          include "/vistas/buscador.php";
                          }
                          }
                          if (isset($_GET['proyecto'])){
                          if($_GET['proyecto']=='succes'){
                          include "/vistas/proyecto.php";
                          }
                          }
                          if (isset($_GET['type'])){
                          if($_GET['type']=='year'){
                          include "/vistas/proyectoyear.php";
                          }
                          }
                          if (isset($_GET['proyectoyear'])){
                          if($_GET['proyectoyear']=='succes'){
                          include "/vistas/proyectoyear.php";

                          }
                          }
                          if (isset($_GET['proyectoline'])){
                          if($_GET['proyectoline']=='succes'){
                          include "/vistas/proyectoline.php";

                          }
                          }
                          if (isset($_GET['type'])){
                          if($_GET['type']=='line'){
                          include "/vistas/proyectoline.php";

                          }
                          }
                          if (isset($_GET['type'])){
                          if($_GET['type']=='jura'){
                          include "/vistas/proyectojura.php";

                          }
                          }
                          if (isset($_GET['type'])){
                          if($_GET['type']=='dire'){
                          include "/vistas/proyectodire.php";

                          }
                          }

                          
                           if (isset($_GET['proyectojura'])){
                          if($_GET['proyectojura']=='succes'){
                          include "/vistas/proyectojura.php";

                          }
                          }
                          if (isset($_GET['proyectodire'])){
                          if($_GET['proyectodire']=='succes'){
                          include "/vistas/proyectodire.php";

                          }
                          }?>
                          </center>
                   </div>


             </div>
          </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          
       </div>
        <div class="col-md-4">
         
        </div>
      </div>

      <hr>
<footer >
   <p>&copy; Ing - Diego alejandro Franco 2015</p>
</footer>
      
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
   
    <?php include "inc/footer_common.php" ?>
  </body>
</html>
