<html lang="es">
<head>
 <title>Ingresar datos</title>
 <link href="Estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
  <form method="POST" action="Insertando.php">
    <h1>INGRESAR DATOS</h1>
    <?php
      $Arreglo = array("Nombre","Telefono","Correo");
	
      foreach($Arreglo as $numero=>$dato)
	  {
	   echo "<label>".$dato."</label></br>";
	   echo "<input type='text' name='txt".$dato."'/></br>";
	  }
	  echo  "<input type='submit' name='entrar' value='Guardar'/>";
  
    include("Conexion.php");
    $Con = new conexion();
    $Con->recuperarDatos();
   ?>
  </form>
</body>
</html>