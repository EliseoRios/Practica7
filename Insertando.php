<html lang="es">
<head>
 <title>Insertando...</title>
 <link href="Estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
 <?php
     $Nombre=$_POST['txtNombre'];
     $Telefono=$_POST['txtTelefono'];
     $Correo=$_POST['txtCorreo'];
	 
	 include("Conexion.php");
	 $Con = new conexion();
	 $Con->Insertar($Nombre,$Telefono,$Correo);
 ?>
</body>
</html>