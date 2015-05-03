<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Seleccione La linea de Investigacion</h3>
  </div>
  <div class="panel-body">
			<div class="form center">
			
			<form action="/boot/index.php/form_line" method="post">
			  
			  <select class="form-control" id="sel1" name="linea">
			  <?php
				$conexion=mysqli_connect("localhost","root","","proyectos");
				$consulta="SELECT * from linea_investigacion l, proyecto p where l.codigo_linea = p.proyecto_linea group by nombre";
    			$resultado=mysqli_query($conexion,$consulta);
    			while ($fila=mysqli_fetch_array($resultado)) {
       			echo "
				<option value ='".$fila['codigo_linea']."'>".$fila['nombre']."</option>
       			";}?>
			  </select><br>
			  <button type="submit" class="btn btn-primary">Consultar</button>
		  </form>

			</div>
<?php
			if(isset($_SESSION['seleccionproyecto'])){
for ($i=0; $i < count($_SESSION['seleccionproyecto']); $i+=2) { 
	echo utf8_encode("<p><a class='btn btn-primary btn-lg' href='/boot/index.php/consultar_proyecto?No_proyecto=".$_SESSION['seleccionproyecto'][$i]."' role='button'>".substr($_SESSION['seleccionproyecto'][$i+1],0,50)." &raquo;</a></p>");
}
	}else{

		 echo "
		<div id='failed'> 
		 <label for='sel1'>No se encontraron Resultados</label>
		 </div>
		 ";

	}?>
</div>
</div>
<?php
session_destroy();
?>