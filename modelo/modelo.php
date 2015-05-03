<?php

function conectar_base_de_datos (){

    $conexion=mysqli_connect("localhost","root","","proyectos");
    if(!$conexion){
        echo 'No se pudo conectar con la jodida BD';
    }

    return $conexion;
}

function cerrar_conexion_db($conexion){
    mysqli_close($conexion);
} 

function sacarproyectos(){
    $conexion=conectar_base_de_datos();
    $consulta="SELECT * FROM proyecto ORDER BY codigo_proyecto DESC LIMIT 3";
    $resultado=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
        $_SESSION['proyectos_home'][]= $fila['titulo'];
        $_SESSION['proyectos_id'][]= $fila['codigo_proyecto'];
    }
}
function proyectos_line(){
$conexion=conectar_base_de_datos();
$line = $_POST['linea'];

$consulta="SELECT * FROM proyecto where proyecto_linea = '".$line."'";
    $resultado=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
        $_SESSION['seleccionproyecto'][]= $fila['codigo_proyecto'];
        $_SESSION['seleccionproyecto'][]= $fila['titulo'];
    }
header("Location: /boot/index.php/consultar?proyectoline=succes");
}

function proyectos_year(){
    $conexion=conectar_base_de_datos();
    $year = $_POST['year'];
    $semestre = $_POST['semestre'];
    if($semestre == '-'){
        $band=2;
        
    }else{
        $band=1;
        $year=$year.$semestre;
    }
    
    if($band == 1){
   $consulta="SELECT * FROM proyecto";
    $resultado=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
       $yearb = substr($fila['codigo_proyecto'],0,6);

       if($yearb == $year){
        $_SESSION['seleccionproyecto'][]= $fila['codigo_proyecto'];
        $_SESSION['seleccionproyecto'][]= $fila['titulo'];
       }
    }
    }

      if($band == 2){
   $consulta="SELECT * FROM proyecto";
    $resultado=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
       $yearb = substr($fila['codigo_proyecto'],0,4);
       if($yearb == $year){

        $_SESSION['seleccionproyecto'][]= $fila['codigo_proyecto'];
        $_SESSION['seleccionproyecto'][]= $fila['titulo'];
       }
    }

    }
     

   header("Location: /boot/index.php/consultar?proyectoyear=succes");





}
function mostrarp(){
    $conexion=conectar_base_de_datos();
    $consulta="SELECT * FROM proyecto where codigo_proyecto ='".$_GET['No_proyecto']."'";
    $resultado=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($resultado)) {
            
            $_SESSION['pfecha_inicio']= $fila['fecha_inicio'];
            $_SESSION['pfecha_final']= $fila['fecha_final'];
            $_SESSION['ptitulo']=$fila['titulo'];
            $_SESSION['presumen']=$fila['resumen'];
            $_SESSION['plink']=$fila['link'];

            $consulta="SELECT * FROM linea_investigacion where codigo_linea ='".$fila['proyecto_linea']."'";
            $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
            $_SESSION['plinea']= $fila['nombre'];
                $consulta="SELECT * FROM programa where codigo_programa ='".$fila['linea_programa']."'";
                $resultado=mysqli_query($conexion,$consulta);
                while ($fila=mysqli_fetch_array($resultado)) {
                $_SESSION['pprograma']= $fila['nombre'];
                       
    }


    }

    }

        $consulta="SELECT * FROM persona p, proyecto_persona pr where p.codigo_persona = pr.codigo_persona and pr.tipo ='E' and pr.estado = 'A' and pr.codigo_proyecto ='".$_GET['No_proyecto']."'";
               
                $resultado=mysqli_query($conexion,$consulta);
                while ($filaestu=mysqli_fetch_array($resultado)) {
                $_SESSION['pestudiantes'][] = $filaestu['nombre'];
                  $_SESSION['pestudiantes'][] = $filaestu['apellido'];
                   
                       
    }
   
   $consulta="SELECT * FROM persona p, proyecto_persona pr where p.codigo_persona = pr.codigo_persona and pr.tipo ='J' and pr.estado = 'A' and pr.codigo_proyecto ='".$_GET['No_proyecto']."'";
                $resultado=mysqli_query($conexion,$consulta);
                while ($filaestu=mysqli_fetch_array($resultado)) {
                $_SESSION['pjurados'][] = $filaestu['nombre'];
                  $_SESSION['pjurados'][] = $filaestu['apellido'];
                   
                       
    }

    $consulta="SELECT * FROM persona p, proyecto_persona pr where p.codigo_persona = pr.codigo_persona and pr.tipo ='D' and pr.estado = 'A' and pr.codigo_proyecto ='".$_GET['No_proyecto']."'";
                $resultado=mysqli_query($conexion,$consulta);
                while ($filaestu=mysqli_fetch_array($resultado)) {
                $_SESSION['pdirectores'][] = $filaestu['nombre'];
                  $_SESSION['pdirectores'][] = $filaestu['apellido'];
                    
    }

    header("Location: /boot/index.php/consultar?proyecto=succes");
   
}

function proyecto (){
    
    }

function crearestudiante(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $nombre= $_POST['nombre'];
        $email= $_POST['email'];
        $email1=$_POST['email1'];
        $apellido= $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $telefono1 = $_POST['telefono1'];
        $codigo =$_POST['codigo'];
        $consulta = "INSERT INTO estudiantes VALUES('$codigo','$nombre','$apellido','20150101')";
        mysqli_query($conexion, $consulta);
        $consulta = "INSERT INTO estudiante_email VALUES('$codigo','$email')";
        mysqli_query($conexion, $consulta);
        if (!empty($email1)) {
            $consulta = "INSERT INTO estudiante_email VALUES('$codigo','$email1')";
        }
        mysqli_query($conexion, $consulta);
        $consulta = "INSERT INTO estudiante_telefono VALUES('$codigo','$telefono')";
        mysqli_query($conexion, $consulta);
        if (!empty($telefono1)) {
            $consulta = "INSERT INTO estudiante_telefono VALUES('$codigo','$telefono1')";
        }
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);
        
    }

}


function creardocente(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $email= $_POST['email'];
        $email1=$_POST['email1'];        
        $telefono = $_POST['telefono'];
        $telefono1 = $_POST['telefono1'];
        $codigo =$_POST['codigo'];
        
        $consulta = "INSERT INTO docentes VALUES('$codigo','$nombre','$apellido')";
        mysqli_query($conexion, $consulta);
        $consulta = "INSERT INTO docente_email VALUES('$codigo','$email')";
        mysqli_query($conexion, $consulta);
        if (!empty($email1)) {
            $consulta = "INSERT INTO docente_email VALUES('$codigo','$email1')";
        }
        mysqli_query($conexion, $consulta);
        $consulta = "INSERT INTO docente_telefono VALUES('$codigo','$telefono')";
        mysqli_query($conexion, $consulta);
        if (!empty($telefono1)) {
            $consulta = "INSERT INTO docente_telefono VALUES('$codigo','$telefono1')";
        }
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);
        
    }

}
function crearfacultad(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $nombre= $_POST['nombre'];
        $codigo =$_POST['codigo'];
        
        $consulta = "INSERT INTO facultad VALUES('$codigo','$nombre')";
        mysqli_query($conexion, $consulta);
        
        cerrar_conexion_db($conexion);
        
    }

}


function logueo(){
     if($_SERVER['REQUEST_METHOD']=="POST"){

        $conexion=conectar_base_de_datos();

        $correo=htmlentities($_POST['correo']);
        $correofinal = mysql_escape_string($correo);
        $pass=htmlentities($_POST['pass']);
        $claveCodificada = sha1($pass);
     $band=0;

    $consulta="SELECT * FROM admins";
        $resultado=mysqli_query($conexion,$consulta);

while ($fila=mysqli_fetch_array($resultado)) {
    $correobase= $fila['correo'];
    $passbase = $fila['pass'];
    $niveldeacceso = $fila['nivel'];
    $nombrebase = $fila['nombre'];
    if ($correobase==$correofinal && $passbase==$claveCodificada) {
        session_start();
        $band=1;
        $_SESSION['nombre']=$nombrebase;
        $_SESSION['logueo']=1;
        $_SESSION['nivel']=$niveldeacceso;
    }
    }
    if($band==1){
       header("Location: /boot/index.php/succes");
    }else{
       header("Location: /boot/index.php/home?fail=yes");
    }

   cerrar_conexion_db($conexion);
}

}

function buscaralgo(){

 $connect=conectar_base_de_datos();
    sleep(1);
    $search = '';
    if(isset($_POST['search'])){
        $search=utf8_encode($_POST['search']);
    }



    $consulta="SELECT * FROM proyecto where titulo LIKE '%".$search."%' LIMIT 5";
    
    $resultado = mysqli_query($connect, $consulta);

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
                    

                 echo utf8_encode("<p><a class='btn btn-primary btn-lg' href='/boot/index.php/consultar_proyecto?No_proyecto=".$fila['codigo_proyecto']."' role='button'>".substr($fila['titulo'],0,50)." &raquo;</a></p>");
                
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








}

?>