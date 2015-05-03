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
	nombre char(25) not null,
	apellido char(25),
	pass char(40) not null,
	correo char(80) not null,
	PRIMARY KEY (correo),
	nivel int
	
	)";
	mysql_query($sql,$conexion);
	//contenido de prueba
	mysql_query("INSERT INTO admins(nombre, apellido, pass, correo, nivel) VALUES ('diego','franco','b674a43d6710dc308bfd53404d88d0b5f46edf15','diego.fc.1@hotmail.com',3)");
	


//////////////////
		$sql = "CREATE TABLE facultad
	(
	cod_facultad char(9) not null,
	primary key(cod_facultad),
	nombre char(25)
	)";
	mysql_query($sql,$conexion);

	mysql_query("INSERT INTO facultad(cod_facultad, nombre) VALUES ('1','ingenieria')");

	

///////////////////////////////////////
	
	$sql = "CREATE TABLE programa
	(
   	codigo_programa char(9) not null,
	PRIMARY KEY (codigo_programa),
    nombre char(25),
    programa_facultad char(9) not null,
     FOREIGN KEY (programa_facultad) REFERENCES facultad(cod_facultad)
	)";
	mysql_query($sql,$conexion);

	mysql_query("INSERT INTO programa(codigo_programa, nombre, programa_facultad) VALUES ('1','ingenieria de sistemas','1')");



	$sql = "CREATE TABLE linea_investigacion
	(
   	codigo_linea char(9) not null ,
	PRIMARY KEY (codigo_linea),
    nombre char(25) not null,
	linea_programa char(9) not null,
	FOREIGN KEY (linea_programa) REFERENCES programa(codigo_programa)
	)";
	mysql_query($sql,$conexion);

	mysql_query("INSERT INTO linea_investigacion(codigo_linea, nombre, linea_programa) VALUES ('1','software','1')");


	
	$sql = "CREATE TABLE proyecto
	(
   	codigo_proyecto char(9) not null,
   	fecha_inicio date,
   	fecha_final date,
   	titulo char(150) not null,
	PRIMARY KEY(codigo_proyecto),
	resumen char(255) not null,
	link char(255),
	proyecto_linea char(9) not null,
	FOREIGN KEY (proyecto_linea) REFERENCES linea_investigacion(codigo_linea)
	)";
	mysql_query($sql,$conexion);

	//contenido de prueba
	mysql_query("INSERT INTO proyecto(codigo_proyecto, fecha_inicio, fecha_final, titulo, resumen, link, proyecto_linea ) VALUES ('20150101','2015/02/28','2015/03/24','reconocimiento facial','software de sistema de reconocimiento facial version 1.1 ','https/mega/121314','1')");



	


    $sql = "CREATE TABLE persona
	(
	codigo_persona char(9) not null,
	PRIMARY KEY(codigo_persona),
   	nombre char(30) not null,
   	apellido char(30) not null
	)";
	
	mysql_query($sql,$conexion);
	
	//contenido de prueba
	mysql_query("INSERT INTO persona(codigo_persona, nombre, apellido) VALUES ('161212116','diego','franco')");


////////////////////////////////campo multivaluado telefono para persona

	$sql = "CREATE TABLE persona_telefono
	(
   	codigo_persona char(9) not null,
   	telefono char(20) not null,
   	
	PRIMARY KEY(codigo_persona,telefono),
	FOREIGN KEY (codigo_persona) REFERENCES persona(codigo_persona)
	)";
	

mysql_query($sql,$conexion);

	//contenido de prueba
	mysql_query("INSERT INTO persona_telefono(codigo_persona, telefono) VALUES ('161212116','3204599793')");

//////////////////////////////campo multivaluado EMAIL para persona

	$sql = "CREATE TABLE persona_email
	(
   	codigo_persona char(9) not null,
   	email char(50) not null,
   	
	PRIMARY KEY(codigo_persona,email),
	FOREIGN KEY (codigo_persona) REFERENCES persona(codigo_persona)
	)";
	

mysql_query($sql,$conexion);

	//contenido de prueba
	mysql_query("INSERT INTO persona_email(codigo_persona, email) VALUES ('161212116','diego.fc.1@hotmail.com')");

///////////////////////////relacion proyecto_persona

$sql = "CREATE TABLE proyecto_persona
	(
	
	codigo_proyecto char(8) not null,
	codigo_persona char(9) not null,
	estado char(1) not null,
	tipo char(1) not null,
	primary key(codigo_proyecto,codigo_persona),
	FOREIGN KEY (codigo_persona) REFERENCES persona(codigo_persona),
	FOREIGN KEY (codigo_proyecto) REFERENCES proyecto(codigo_proyecto)

		)";


	mysql_query($sql,$conexion);

mysql_close($conexion);


?>