<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ingrese el nombre del director</h3>
  </div>
  <div class="panel-body">


			<div class="form center">
				
				<form action="" method="post" name="search_form" id="search_form">
					<input type="text" class="form-control" name="search_formdirector" id="search_formdirector">
				</form>

			</div>
			<div id="resultados2">
				
			</div>
  </div>
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