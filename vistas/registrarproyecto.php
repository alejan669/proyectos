
<form class="form-horizontal" action="/boot/index.php/regproyecto.php" method="post">
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Fecha Inicio:</label>
         <div class="col-xs-10">
             <input type="date" class="form-control" placeholder="fechainicio" name='fechainicio'>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Fecha Final:</label>
         <div class="col-xs-10">
             <input type="date" class="form-control" placeholder="fechafinal" name='fechafinal'>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Titulo:</label>
         <div class="col-xs-10">
             <input type="name" class="form-control" placeholder="titulo" name='titulo'>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Resumen:</label>
         <div class="col-xs-10">
             <input type="name" class="form-control" placeholder="resumen" name='resumen'>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Linea de Investigación:</label>
         <div class="col-xs-10">
             <select class="form-control" id="sel1" name="linea">
              <?php
                $conexion=mysqli_connect("localhost","root","","proyectos");
                $consulta="SELECT * from linea_investigacion";
                $resultado=mysqli_query($conexion,$consulta);
                while ($fila=mysqli_fetch_array($resultado)) {
                echo "
                <option value ='".$fila['codigo_linea']."'>".$fila['nombre']."</option>
                ";}?>
              </select>
         </div>
     </div>

     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Estudiante:</label>
         <div class="col-xs-10">
            <select class="form-control" id="sel1" name="estudiante">
              <?php
                $conexion=mysqli_connect("localhost","root","","proyectos");
                $consulta="SELECT codigo_persona from persona where codigo_persona not in (select codigo_persona from proyecto_persona)";
                $resultado=mysqli_query($conexion,$consulta);
                while ($fila=mysqli_fetch_array($resultado)) {
                    $consulta="SELECT * from persona where codigo_persona=".$fila['codigo_persona'];
                    $resultado=mysqli_query($conexion,$consulta);
                    while ($fila2=mysqli_fetch_array($resultado)) {
                echo "
                <option value ='".$fila['codigo_persona']."'>".$fila2['nombre']."</option>
                ";}}?>
              </select>             
         </div>
         </div>
         <input id="boton" type="button" class ='btn btn-success dropdown-toggle'value="+ Estudiante">
        <div class="form-group" id='email1' style="display: none;">
             <label for="inputEmail" class="control-label col-xs-2">Estudiante:</label>
             <div class="col-xs-10">
                 <select class="form-control" id="sel1" name="estudiante">
              <?php
                $conexion=mysqli_connect("localhost","root","","proyectos");
                $consulta="SELECT codigo_persona from persona where codigo_persona not in (select codigo_persona from proyecto_persona)";
                $resultado=mysqli_query($conexion,$consulta);
                while ($fila=mysqli_fetch_array($resultado)) {
                    $consulta="SELECT * from persona where codigo_persona=".$fila['codigo_persona'];
                    $resultado=mysqli_query($conexion,$consulta);
                    while ($fila2=mysqli_fetch_array($resultado)) {
                echo "
                <option value ='".$fila['codigo_persona']."'>".$fila2['nombre']."</option>
                ";}}?>
              </select><br>
             </div>

        </div>




         <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Jurado:</label>
         <div class="col-xs-10">
            <select class="form-control" id="sel1" name="jurado">
              <?php
                $conexion=mysqli_connect("localhost","root","","proyectos");
                    $consulta="SELECT * from persona";
                    $resultado=mysqli_query($conexion,$consulta);
                    while ($fila2=mysqli_fetch_array($resultado)) {
                        
                    
                echo "
                <option value ='".$fila['codigo_persona']."'>".$fila2['nombre']."</option>
                ";}?>
              </select>             
         </div>

         <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Director:</label>
         <div class="col-xs-10">
            <select class="form-control" id="sel1" name="jurado">
              <?php
                $conexion=mysqli_connect("localhost","root","","proyectos");
                    $consulta="SELECT * from persona";
                    $resultado=mysqli_query($conexion,$consulta);
                    while ($fila2=mysqli_fetch_array($resultado)) {
                        
                    
                echo "
                <option value ='".$fila['codigo_persona']."'>".$fila2['nombre']."</option>
                ";}?>
              </select>             
         </div>


 
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10"><br>
             <button type="submit" class="btn btn-primary">Registrar</button>
         </div>
     </div>
</form>