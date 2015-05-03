
<?php
	include "conex.php";
	sleep(1);
	$search = '';
	if(isset($_POST['search'])){
		$search=$_POST['search'];
	}


	$consulta="SELECT * FROM cuentas where nombre LIKE '%".$search."%' OR codigo LIKE '%".$search."%' LIMIT 5";
	$resultado = $connect->query($consulta);
	$fila=mysqli_fetch_assoc($resultado);
	$total =mysqli_num_rows($resultado);
?>
<?php 

if($total > 0 && $search!=''){?>

	<h4>Resultados de la busqueda</h4>
	<?php 
		do { ?>
				<div class="art">
				<?php
				echo "<a href='mainpanel.php?listar=yes&cod_cuenta=".$fila['codigo']."''>".$fila['codigo']." ".$fila['nombre']."<a/>"; 
				
				?>
				</div>
		<?php }while($fila=mysqli_fetch_assoc($resultado)); ?>
	
<?php } 

elseif ($total > 0 && $search=='') {
	echo "
	<h4>ingresa un parametro de busqueda</h4><p>Ingresa palabras clave relacionadas</p>
	";}
	else{
		echo "
	<h4>No hay resultados</h4><p>Intentalo de nuevo</p>
	";
	}
	# code...




?>