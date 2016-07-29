<?php


$hostname = "localhost";
$username = "fernandosorio";
$password = '$Fernando$@#';
$dbName   = "fernando_fundamentosvida";

$dominio = "http://www.fernandosorio.org/php/";

@mysql_connect($hostname,$username,$password) ;
@mysql_select_db("$dbName") ;

?>