<? session_start();
   echo "Identificacion de la Sesion :".session_id();
   

   include_once "conectar.php";

   $nombre=$_GET['nombre']."<br>";
   $apellido =$_GET['apellido']."<br>";
   $cedula =$_GET['cedula']."<br>";
   $edad =$_GET['dpto']."<br>";
   $genero=$_GET['genero']."<br>";   
   $dpto =$_GET['mun']."<br>";   
   $mun =$_GET['edad']."<br>";
   $direccion=$_GET['direccion']."<br>";
   $celular=$_GET['celular']."<br>";
   $email =$_GET['email']."<br>";
   $fecha =$_GET['fecha']."<br>";


   echo $comandoSql="INSERT INTO pastores (nombre,email) VALUES ('".$nombre."','".$apellido."','".$cedula."','".$edad."','".$genero."','".$dpto."','".$mun."','".$direccion."','".$celular."','".$email."','".$fecha."')";
   //$insertar=$conexion->query("$comandoSql") or die (mysql_errno());
 



?>