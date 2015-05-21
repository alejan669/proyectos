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
          <a class="navbar-brand" href="#">Inicio</a>
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
                   
                   <div id ='opc' class="col-md-3">
                   
                        <ul class="nav nav-pills nav-stacked" id ='opc1'>
                        <li role="presentation" class="<?php   if (isset($_GET['type'])){if($_GET['type']=='name'){echo "active";}}?> ?>"><a href="?type=name" >Nombre</a></li>
                        <li role="presentation"><a href="?type=area">Area investigativa</a></li>
                        <li role="presentation"><a href="#">Año</a></li>
                        <li role="presentation"><a href="#">Semestre</a></li>
                        <li role="presentation"><a href="#">Año</a></li>
                        <li role="presentation"><a href="#">Directores</a></li>
                        <li role="presentation"><a href="#">Jurados</a></li>
                        </ul>

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
