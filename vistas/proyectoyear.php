
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Seleccione el Año o el Semestre</h3>
  </div>
  <div class="panel-body">
			<div class="form center">
				
	<div class="form-group">
		<form action="/boot/index.php/form_year" method="post">
			  <label for="sel1">Año:</label>
			  <select class="form-control" id="sel1" name="year">
			    <option>2015</option>
			    <option>2014</option>
			    <option>2013</option>
			    <option>2012</option>
			  </select>
			  <label for="sel1">Semestre:</label>
			  <select class="form-control" id="sel1" name="semestre">
			  	<option>-</option>
			    <option>01</option>
			    <option>02</option>
			  </select><br>
			  <button type="submit" class="btn btn-primary">Consultar</button>
		  </form>
		  <hr />
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

	}
?>
			</div>
			<div id="resultados">
				
			</div>
  </div>
</div>
<?php session_destroy();?>