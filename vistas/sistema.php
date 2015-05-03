<?php 
session_start();
if (isset($_SESSION['nivel'])){

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php include "inc/head_common.php" ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 
<script type="text/javascript">
    $(document).ready(function()
        {
        $("#boton").click(function () {  
            $('#email1').toggle(1000);
             });
        });
</script>
<script type="text/javascript">
    $(document).ready(function()
        {
        $("#boton1").click(function () {  
            $('#telefono1').toggle(1000);
             });
        });
</script>


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Registrar Proyecto
                    </a>
                </li>
                <li>
                    <a href="/boot/index.php/sistema?registrar=e">Registrar estudiantes</a>
                </li>
                <li>
                    <a href="/boot/index.php/sistema?registrar=j">Registrar docentes</a>
                </li>
                <li>
                    <a href="/boot/index.php/sistema?registrar=f">Registrar facultad</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-3">
                </div>
                    <div class="col-lg-6">
                        <h1>
                           <?php 
                        if (isset($_GET['registrar'])){
                          if($_GET['registrar']=='e'){
                          echo "Registro de Estudiantes";
                          }}

                        if (isset($_GET['registrar'])){
                          if($_GET['registrar']=='j'){
                          echo "Registro de docentes";
                          }}
                          if (isset($_GET['registrar'])){
                          if($_GET['registrar']=='f'){
                          echo "Registro de facultad";
                          }}
                        ?>

                        </h1>
                        
                        <?php 

                        if (isset($_GET['registrar'])){
                          if($_GET['registrar']=='e'){
                          include "/vistas/registrarestudiante.php";
                          }}

                        if (isset($_GET['registrar'])){
                          if($_GET['registrar']=='j'){
                          include "/vistas/registrardocentes.php";
                          }}
                          if (isset($_GET['registrar'])){
                          if($_GET['registrar']=='f'){
                          include "/vistas/registrarfacultad.php";
                          }}
                        ?>
        

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><-ocultar</a>
                    </div>
                    <div class="col-lg-3">
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

 <?php include "inc/footer_common.php" ?>
</body>

</html>

<?php
}else{
    header("Location: /boot/index.php/home");
}
?>