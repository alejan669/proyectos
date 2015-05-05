<?php
function  sacarpjurado(){
	pjurado();
}
function sacarpdirector(){
	pdirector();
}
function formconsultarlineaction(){
	proyectos_line();
}
function  enviarjura_consulta(){
	
	buscarjurado();

}
function enviardire_consulta(){
	buscardirector();

}
function mostrarproyecto(){
	mostrarp();
}
function formconsultaryearaction(){
	proyectos_year();
}
function consultarproyecto(){
	proyecto();
}

function homeaction(){
	sacarproyectos();
require "vistas/home.php";
}

function consultaraction(){
require "vistas/consultar.php";
}

function logueosuccesaction(){
require "vistas/sistema.php";
}
function logueofailaction(){
	sacarproyectos();
	require "vistas/home.php";
}
function logginaction(){
logueo();
}
function enviar_consulta(){
	buscaralgo();
}

function registrarproyecto(){
	crearproyecto();
}

function registrarestudiante(){
	crearestudiante();
}


function registrardocente(){
	creardocente();
}

function registrarfacultad(){
	crearfacultad();
}

?>