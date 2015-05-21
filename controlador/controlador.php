<?php

function consultarproyecto(){
	proyecto();
}

function homeaction(){
require "vistas/home.php";
}

function consultaraction(){
require "vistas/consultar.php";
}

function logueosuccesaction(){
require "vistas/sistema.php";
}
function logueofailaction(){
	require "vistas/home.php";
}
function logginaction(){
logueo();
}
function enviar_consulta(){
	buscaralgo();
}
function registrarestudiante(){
	crearestudiante();
}

?>