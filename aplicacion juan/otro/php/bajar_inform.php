<?php
session_start();
if (isset($_GET['boton_env'])) {
   echo "<u>EL BOTON DE ENVIO EXISTE</u><br>";
   echo "Nombre   :"."  ".$_GET['nombre']."<br>";
   echo "Apellido :"."  ".$_GET['apellid']."<br>";
   echo "Cedula   :"."  ".$_GET['cedula']."<br>";
   echo "Edad     :"."  ".$_GET['edad']."<br>";
   echo "Direccion:"."  ".$_GET['direccion']."<br>";
   echo "Cedlular :"."  ".$_GET['celular']."<br>";
   echo "Email    :"."  ".$_GET['email']."<br>";
   echo "Fecha    :"."  ".$_GET['fecha']."<br>";
   
   echo "Identificacion de la Sesion :".session_id();
} else {

	echo "no es nuestro boton";
}


?>