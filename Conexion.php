<html>
 <?php
  $Nombre=$_POST['Nombre'];
  $Telefono=$_POST['Telefono'];
  $Celular=$_POST['Celular'];
  $Colonia=$_POST['Colonia'];
 

     $Con = mysql_connect('localhost','root','');
	 mysql_select_db('programacion',$Con);
	 
	 $sql="INSERT INTO contacto (Nombre,Telefono,Celular,Colonia)VALUES('".$Nombre."','".$Telefono."','".$Celular."','".$Colonia."')";
	 //var_dump($query);
	 mysql_query($sql) or die ("NO CONECTADO BASE DE DATOS");
	 
	 echo "<script>alert(\"GUARDADO CON EXITO.\");</script>";
	 echo "<a href='Insertar.php'>Regresar</a>";
	
class conexion
{	
  function recuperarDatos()
  {
   $con = mysql_connect('localhost','root','') or die ("NO CONECTO BASE DE DATOS"); 
   mysql_select_db('programacion',$con);
   
   	$query="SELECT * FROM contacto;";
	$resultado = mysql_query($query);
	
	echo "<table border='5' cellspacing='5' >";
	echo "<th>ID</th><th>NOMBRE</th><th>TELEFONO</th><th colspan='3'>OPCIONES<t/h>";
	
	while($fila = mysql_fetch_array($resultado))
	{
	 $btnEditar = "<input type='button' name='Editar$fila[Id]' value='Editar' />";
     $btnEliminar = "<input type='button' name='Eliminar$fila[Id]' value='Eliminar' />";
     $btnVer = "<input type='button' name='Ver$fila[Id]' value='Ver' />";
	 echo "<tr>";
	 
	 echo "<td>$fila[Id]</td><td>$fila[Nombre]</td><td>$fila[Telefono]</td><td>".$btnEditar."</td><td>".$btnEliminar."</td><td>".$btnVer."</td>";
	 echo "</tr>";
	}
	echo "</table>";
	
  }
}
 ?>
</html>