<DOCTYPE html>
<html>
<head>
	<title>TAREA ATZEL</title>
	
	
</head>
<body>
	
<? php


$comando="SELECT * FROM ciudades";
$tabla=mysqli_query($conexion, $comando);
$array_fila=mysqli_fetch_row($tabla);

echo $array_fila[0];
?>
	
</body>
</html>