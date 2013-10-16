<html>
<form method="POST" action="Conexion.php">
 <p>Nombre</p>
 <input type="text" name="Nombre"/>
 <p>Telefono</p>
 <input type="text" name="Telefono"/>
 <p>Celular</p>
 <input type="text" name="Celular"/>
 <p>Colonia</p>
 <input type="text" name="Colonia"/>
 </br>
 <input type="submit" name="Enviar" value="Enviar"/>
 </br>
 
 <?php
  include("Conexion.php");
  $Con = new conexion();
  $Con->recuperarDatos();
 ?>
</form>
</html>