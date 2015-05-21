<?php
///Todo el codigo aqui
//Manejo de base de datos con phpmyadmin



//include se utiliza mas para htmls y solo devuelve mensajes de error sin totear el programa
//require se utiliza para phps y totea el proceso si encuentra un error en el programa



///Averiguar todo sobre consultas SQL //Tarea
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
function proyecto (){
    session_start();
        $conexion=conectar_base_de_datos();
if (isset($_SESSION['id'])){
    $id_proy=$_SESSION['id'];
}else{
   header("Location: /boot/index.php/consultar?proyecto=fail");
}
        $consulta="SELECT * FROM proyecto where id = '$id_proy'";
        $resultado=mysqli_query($conexion,$consulta);
       
        while ($fila=mysqli_fetch_array($resultado)) {
          $_SESSION['fecha']= $fila['fecha'];
            $_SESSION['titulo']=$fila['titulo'];
            $_SESSION['linea']=$fila['linea'];
            $_SESSION['resumen']=$fila['resumen'];
             $_SESSION['estado']=$fila['estado'];
        }
      

        $consulta="SELECT * FROM estudiantes where id_proyecto = '$id_proy'";
        $resultado=mysqli_query($conexion,$consulta);
       
        while ($fila=mysqli_fetch_array($resultado)) {
          $_SESSION['nombreE']= $fila['nombre'];
            $_SESSION['apellidoE']=$fila['apellido'];
            $_SESSION['programa']=$fila['programa'];
            
        }




        cerrar_conexion_db($conexion);

        header("Location: /boot/index.php/consultar?proyecto=succes");
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
        $programa =$_POST['programa'];
        $consulta = "INSERT INTO estudiantes VALUES(1,'$nombre','$apellido','$codigo','$programa')";
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
        $search=$_POST['search'];
    }



    $consulta="SELECT * FROM proyecto where titulo LIKE '%".$search."%' OR id LIKE '%".$search."%' LIMIT 5";
    
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
                    session_start();

                   $_SESSION['id']= $fila['id'];
                 echo "<p><a class='btn btn-primary btn-lg' href='/boot/index.php/consultar?proyecto=yes' role='button'>".$fila['titulo']." &raquo;</a></p>";
                
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