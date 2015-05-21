<?php
//conexion principal
	
  $conexion = mysql_connect("localhost","root","");
	if (!$conexion) {
		die("no e podido conectar ".mysql_error());
	}


//crear base de datos
	if (mysql_query("CREATE DATABASE proyectos",$conexion)) {
		echo "Se ha creado una base de datos";
	}else{
		echo "No se pudo porque ".mysql_error();
	}
//seleccionamos la base de datos
	mysql_select_db("proyectos",$conexion);
//crear una table de taboritos
	$sql = "CREATE TABLE admins
	(
	nombre char(40) not null,
	apellido char(40),
	pass char(40) not null,
	correo char(80) not null,
	PRIMARY KEY (correo),
	nivel int
	
	)";
	mysql_query($sql,$conexion);
	//contenido de prueba
	mysql_query("INSERT INTO admins(nombre, apellido, pass, correo, nivel) VALUES ('diego','franco','b674a43d6710dc308bfd53404d88d0b5f46edf15','diego.fc.1@hotmail.com',3)");
	

	
	$sql = "CREATE TABLE proyecto
	(
   	id int not null AUTO_INCREMENT,
   	fecha date not null,
   	titulo char(50) not null,
	linea char(40) not null,
	PRIMARY KEY(id),
	resumen char(255) not null,
	estado char(30) not null
	)";
	mysql_query($sql,$conexion);

	//contenido de prueba
	mysql_query("INSERT INTO proyecto(fecha, titulo, linea, resumen, estado) VALUES ('2015/02/28','reconocimiento facial','software','software de sistema de reconocimiento facial version 1.1 ','APROBADO')");

    $sql = "CREATE TABLE estudiantes
	(
		codigo char(9) not null,
   	id_proyecto int not null,
   	nombre char(50) not null,
   	apellido char(50) not null,
	
	PRIMARY KEY(codigo),
	programa char(30) not null,
	FOREIGN KEY (id_proyecto) REFERENCES proyecto(id)
	)";
	
	mysql_query($sql,$conexion);
	
	//contenido de prueba
	mysql_query("INSERT INTO estudiantes(id_proyecto, nombre, apellido, codigo, programa) VALUES ('1','diego','franco','161212116','ingenieria de sistemas')");


	$sql = "CREATE TABLE estudiante_telefono
	(
   	codigo_estudiante char(9) not null,
   	telefono char(20) not null,
   	
	PRIMARY KEY(codigo_estudiante,telefono),
	FOREIGN KEY (codigo_estudiante) REFERENCES estudiantes(codigo)
	)";
	

mysql_query($sql,$conexion);

	//contenido de prueba
	mysql_query("INSERT INTO estudiante_telefono(codigo_estudiante, telefono) VALUES ('161212116','3204599793')");


	$sql = "CREATE TABLE estudiante_email
	(
   	codigo_estudiante char(9) not null,
   	email char(50) not null,
   	
	PRIMARY KEY(codigo_estudiante,email),
	FOREIGN KEY (codigo_estudiante) REFERENCES estudiantes(codigo)
	)";
	mysql_query($sql,$conexion);

	//contenido de prueba
	mysql_query("INSERT INTO estudiante_email(codigo_estudiante, email) VALUES ('161212116','diego.fc.1@hotmail.com')");

mysql_close($conexion);

?>