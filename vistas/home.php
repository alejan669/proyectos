 <!DOCTYPE html>
<html lang="en">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8_spanish_ci" />
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include "inc/head_common.php" ?>
    
    <title>Proyectos de grado y pasantias</title>
    <script>
   $(document).ready(function() {
    setTimeout(function() {
        $("#failed").fadeOut(1000);
    },3000);
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
          <?php if(isset($_GET['fail'])){
            if($_GET['fail']=="yes"){
              ?>
              <div class="row">
                <div class="col-md-7"></div>
                <div id="failed" class="col-md-5">
                <center>
                <p>Usuario o contraseña incorrecta</p>
                </center>
              </div>
              </div>
              
              <?php
            }
           } ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Ultimos proyectos</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="/boot/index.php/consultar" role="button">Consultar &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>
          <?php 
          echo utf8_encode($_SESSION['proyectos_home'][0]); 
          ?>
          </h2>
          <p>Para todo el resumen del proyecto clic abajo</p>
          <p><a class="btn btn-default" href="/boot/index.php/consultar_proyecto?No_proyecto=<?php echo $_SESSION['proyectos_id'][0] ?>" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2><?php 
          echo utf8_encode($_SESSION['proyectos_home'][1]); 
          ?></h2>
          <p>Para todo el resumen del proyecto clic abajo </p>
          <p><a class="btn btn-default" href="/boot/index.php/consultar_proyecto?No_proyecto=<?php echo $_SESSION['proyectos_id'][1] ?>" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2><?php 
          echo utf8_encode($_SESSION['proyectos_home'][2]); 
          ?></h2>
          <p>Para todo el resumen del proyecto clic abajo</p>
          <p><a class="btn btn-default" href="/boot/index.php/consultar_proyecto?No_proyecto=<?php echo $_SESSION['proyectos_id'][2] ?>" role="button">View details &raquo;</a></p>
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
