<?php 
if(!isset($_SESSION['ptitulo'])){

	header("Location: /boot/index.php/consultar");
}

?>
<div class="panel panel-default">
  <div class="panel-body">
		  <h2>PROYECTO</h2>
		    <table class="table table-bordered">
		  <tr style="font-weight: bold;">
		  	<td >Fecha inicio</td>
		  	<td>Fecha final</td>
		  	<td>Titulo</td>
		  	<td>Resumen</td>
		  	<td>Linea de investigacion</td>
		  	<td>Programa</td>
		  </tr>
		  <tr>
		  
		  <td><?php echo  $_SESSION['pfecha_inicio'];?></td>
		   <td><?php echo  $_SESSION['pfecha_final'];?></td>
		  <td><?php echo  utf8_encode($_SESSION['ptitulo']);?></td>
		  <td><?php echo  utf8_encode($_SESSION['presumen']);?></td>
		  <td><?php echo  utf8_encode($_SESSION['plinea']);?></td>
		  <td><?php echo  utf8_encode($_SESSION['pprograma']);?></td>

		  </tr>
		</table>

 <h2>DIRECTOR</h2>
<table class="table table-bordered">
		  <tr style="font-weight: bold;">
		  	<td>nombre</td>
		  	<td>apellido</td>
		  </tr>
<?php
		for($i=0;$i<count($_SESSION['pdirectores']);$i+=2)
		   {
		echo "
		   	 <tr>
		 
		  <td>".utf8_encode($_SESSION['pdirectores'][$i])."</td>

		 <td>".utf8_encode($_SESSION['pdirectores'][$i+1])."</td>
		
		  </tr>
		";

		   }

		   ?>

		</table>
		
		<h2>ESTUDIANTES</h2>
		<table class="table table-bordered">
				  <tr style="font-weight: bold;">
				  	<td>nombre</td>
				  	<td>apellido</td>
				  	</tr>
				  <?php
				for($i=0;$i<count($_SESSION['pestudiantes']);$i+=2)
				   {
				echo "
				  <tr>
				  <td>".utf8_encode($_SESSION['pestudiantes'][$i])."</td>
				 <td>".utf8_encode($_SESSION['pestudiantes'][$i+1])."</td>
				
				  </tr>
				";
				   }
				   ?>
		</table>

		<h2>JURADOS</h2>
		<table class="table table-bordered">
				  <tr style="font-weight: bold;">
				  	<td>nombre</td>
				  	<td>apellido</td>
				  	</tr>
				  <?php
				for($i=0;$i<count($_SESSION['pjurados']);$i+=2)
				   {
				echo "
				  <tr>
				  <td>".utf8_encode($_SESSION['pjurados'][$i])."</td>
				 <td>".utf8_encode($_SESSION['pjurados'][$i+1])."</td>
				
				  </tr>
				";
				   }

				   ?>
		</table>
  </div>
  <p><a class="btn btn-primary btn-lg" href='"<?php $_SESSION['plink']?>"' role="button">Descargar PDF &raquo;</a></p>
</div>
 <?php session_destroy();?>