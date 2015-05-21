

<?php
session_start();
if (!isset($_SESSION['fecha'])){
 header("Location: /boot/index.php/consultar");
}
?>
<div class="panel panel-default">
  <div class="panel-body">
  <h2>PROYECTO</h2>
    <table class="table table-bordered">
  <tr>
  	<td>fecha</td>
  	<td>titulo</td>
  	<td>linea</td>
  	<td>resumen</td>
  	<td>estado</td>
  </tr>
  <tr>
  
  <td><?php echo  $_SESSION['fecha'];?></td>
  <td><?php echo  $_SESSION['titulo'];?></td>
  <td><?php echo  $_SESSION['linea'];?></td>
  <td><?php echo  $_SESSION['resumen'];?></td>
  <td><?php echo  $_SESSION['estado'];?></td>

  </tr>
</table>
<button type="button" class="btn btn-success">Descargar PDF</button>
<h2>ESTUDIANTES</h2>
<table class="table table-bordered">
  <tr>
  	<td>nombre</td>
  	<td>apellido</td>
  	<td>programa</td>
  </tr>
  <tr>
  
  <td><?php echo  $_SESSION['nombreE'];?></td>
  <td><?php echo  $_SESSION['apellidoE'];?></td>
  <td><?php echo  $_SESSION['programa'];?></td>
 

  </tr>
</table>
  </div>
</div>
 <?php
session_destroy();
?>