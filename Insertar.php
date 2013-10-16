<html>
<form method="POST" action="Conexion.php">
   <h1>INGRESAR DATOS</h1>
   <?php
    $Arreglo = array("Nombre","Telefono","Correo");
	
    for($i=0;$i<6;$i++)
	{
	 echo "<label>".$Arreglo[$i]."</label></br>";
	 echo "<input type='text' name='txt".$Arreglo[$i]."'/></br>";
	}
	
  include("Conexion.php");
  $Con = new conexion();
  $Con->recuperarDatos();
 ?>
</form>
</html>