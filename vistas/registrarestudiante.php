
<form class="form-horizontal" action="/boot/index.php/regestudiante.php" method="post">
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
             <input type="name" class="form-control" placeholder="nombre" name='nombre'>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Apellido:</label>
         <div class="col-xs-10">
             <input type="name" class="form-control" placeholder="apellido" name='apellido'>
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Email:</label>
         <div class="col-xs-10">
             <input type="email" class="form-control" placeholder="email" name='email'>
         </div>
     </div>
     <input id="boton" type="button" class ='btn btn-success dropdown-toggle'value="+ Email">
     <div class="form-group" id='email1' style="display: none;">
         <label for="inputEmail" class="control-label col-xs-2">Email2:</label>
         <div class="col-xs-10">
             <input type="email" class="form-control" name ='email1' placeholder="Email" name='email2'>
         </div>

     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Telefono:</label>
         <div class="col-xs-10">
             <input type="number" class="form-control" placeholder="telefono" name='telefono'>
         </div>
     </div>
     <input id="boton1" type="button" class ='btn btn-success dropdown-toggle'value="+ telefono">
     <div class="form-group" id='telefono1' style="display: none;">
         <label for="inputEmail" class="control-label col-xs-2">telefono1:</label>
         <div class="col-xs-10">
             <input type="number" class="form-control" name ='telefono1' placeholder="telefono" name='telefono2'>
         </div>

     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Codigo:</label>
         <div class="col-xs-10">
             <input type="number" class="form-control" placeholder="codigo" name='codigo'>
         </div>
     </div>


 
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Registrar</button>
         </div>
     </div>
</form>