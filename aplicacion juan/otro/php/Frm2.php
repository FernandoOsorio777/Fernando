<? session_start();
   echo "Identificacion de la Sesion :".session_id(); echo "<br>";
   

   include'conectar.php';
echo $ingresar." - ".$borrar." - ".$actualizar;


if($ingresar == "Ingresar registro" and ( $nombre == "" or $apellido == "" or $cedula == "" or $genero == "" or $edad == "" or $dpto == "---" or $mun == "---" or $direccion == "" or $email == "" or $fecha == "")){
      echo "INFORMACION INSUFICIENTE";
} else {
		if($ingresar == "Ingresar registro"){

		      echo "INFORMACION OK";
		 echo $sqladicionar="insert into pastores VALUES ('pastor_id','$nombre','$apellido','$cedula',$genero,$edad,$dpto,$mun,'$direccion','$email','$fecha')";    
		    $result= MYSQL_QUERY($sqladicionar);
		?>

		<?
		}
}

?>


<?
if($borrar == "Borrar registro" and ( $nombre == "" or $apellido == "" or $cedula == "" or $genero == "" or $edad == "" or $dpto == "---" or $mun == "---" or $direccion == "" or $email == "" or $fecha == "")){
      echo "INFORMACION INSUFICIENTE";
}else {
	if($borrar == "Borrar registro"){

	      echo "SE DISPONE A BORRAR";
	 echo $sqlborrar="DELETE FROM pastores WHERE pastor_id=6";    
	    $result= MYSQL_QUERY($sqlborrar);
	    }
 }
?>

<?
if($actualizar == "Actualiza registro" and ( $nombre == "" or $apellido == "" or $cedula == "" or $genero == "" or $edad == "" or $dpto == "---" or $mun == "---" or $direccion == "" or $email == "" or $fecha == "")){
      echo "INFORMACION INSUFICIENTE";
}else {
	if($actualizar == "Actualiza registro"){

	      echo "SE DISPONE A ACTUALIZAR";
	 echo $sqlactualizar="UPDATE pastores set nombre = '$nombre' , apellido = '$apellido' , cedula = '$cedula' , genero =$genero , edad =$edad , dpto =$dpto , mun =$mun , direccion = '$direccion' , email = '$email' , fecha = '$fecha'  WHERE pastor_id=7";    
	    $result= MYSQL_QUERY($sqlactualizar);
	    }
 }
?>










<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	   // solo ubica el Frm dentro de la variable $dominio que esta en conectar.php
	 // parent.location = ("<?echo "$dominio"?>Frm.php");
		  
		
</SCRIPT>



 <!-- SELECT * FROM `pastores` WHERE pastor_id=4 

INSERT INTO `pastores`(`pastor_id`, `nombre`, `apellido`, `cedula`, `genero`, `edad`, `dpto`, `mun`, `direccion`, `email`, `fecha`) VALUES (`pastor_id`, 'fer1','osorio',16716042,1,51,22,1,'encinar','gg@nn.com','2016-03-04')

DELETE FROM `pastores` WHERE pastor_id=5
-->





<DOCTYPE html>

<head>
	<title>TAREA ATZEL</title>
	<link rel="stylesheet" type="text/css" href="../css/ventana.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" languaje="javascript" src="../js/validar.js"></script>
	<script type="text/javascript">
        function AbrirTelon(){
        	$(".ventana").slideDown("slow");
        }
        function CerrarTelon(){
        	$(".ventana").slideUp("slow");
        }
	</script>
	
</head>
<body>

<div class="container">
	<!-- crearemos la ventana de 2 nivel en primer nivel tiene la imagen y en el segundo 
	 tiene el formulario -->
	<div class="ventana">
		<h2>Ventana Modal</h2>
		<!-- dentro de esta background del contenedor ventana transp. crearemos un frm -->
		<div class="form" style="width:515px">
			<!-- cierra todo lo que abarque -->
			
		     
				<!-- el frm lo constituye una inf. que esta en una table -->
				<form class="form1" action="Frm.php" method="post">
					<!-- "../php/bajar_inform.php" -->
					
                       <p id="p1"><a class="cerrar" href="javascript:CerrarTelon();" >Cerrar x</a></p>
					   <div id="divimagen"><img id="imagen"src="../img/kehila.jpg" style="width:55px"></div><br>
					    <div id="divtitulo"><h1 id ="h12">Formulario PASTORES</h1></div>
					    
		                <hr color="red"><br>
						<table >
							<tr>
								<td>Nombre&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="text" value="<? if($nombre != ""){ echo $nombre;} ?>" name="nombre" placeholder=" Ingresa Aqui tu Nombre " title="Diligencia Nombre"></td>
								
							</tr>
							<?
                              if($ingresar == "Ingresar registro" and ($nombre == "" or $nombre == " ")){ 
                               ?>
                               <tr>
                               	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                               	   <td style="color: red">Por favor digite nombre</td></tr>
                               <?	
                              }  
							?>
							<!-- *** -->
							<tr>
								<td>Apellido&nbsp;&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="text" name="apellido" placeholder=" " value="<? if($apellido != ""){ echo $apellido;} ?>" title="Diligencia Apellido"></td>
								
							</tr>
							<?
                              if($ingresar == "Ingresar registro" and ($apellido == "" or $apellido == " ")){
                            ?>
                              	
                              	<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								 <td style="color:red">Por Favor Digite El Apellido</td>
								</tr>
                             <? 
                                 }
                             ?>

							<tr>
								<td>Cedula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>
								<!-- el if si cedula tiene informacion echo deje el valor de cedula en el mismo lugar-->
								<td ><input type="text"  name="cedula" placeholder=" " value="<? if($cedula != ""){ echo $cedula;} ?>" title="Diligencia Cedula" ></td>
							</tr>
							<?
                             if($ingresar == "Ingresar registro" and ($cedula == "" or $cedula == " ")){
                            ?>

                            <tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="color:red">Por Favor Digite Cedula</td>
                            </tr>
                             <? 
                               }
                             ?>
							
							<tr>
							     <td>Genero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</td>							     
							     <td ><input type="radio" name="genero" <? if($genero == "" ){?> checked="checked" <?} ?> name="genero" value="1" <?if ($genero == 1){?> checked="checked" <?}?> >Masculino</td>
							</tr>

							<tr>
                                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td ><input type="radio" name="genero" value="2"  <?if ($genero == 2){?> checked="checked" <?}?>>Femenino</td>

							</tr>
							
							<tr>
								<td>Edad&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="text" name="edad" min="10" max="50" step="10" placeholder=" "  value="<? if($edad != ""){ echo $edad;} ?>" title="Diligencia Edad"  ></td>
							</tr>

                             <?
                             if($ingresar == "Ingresar registro" and ($edad == "" or $edad == " ")){
                            ?>

                            <tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="color:red">Por Favor Digite Edad</td>

                            </tr>
                             <? 
                               }
                             ?>
                            <tr>
								<td>Direccion&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="text" name="direccion" placeholder=" " title="Diligencia Direccion" value="<? if($direccion != ""){ echo $direccion;} ?>"></td>
							</tr>
                           
                            <?
                             if($ingresar == "Ingresar registro" and ($direccion =="" or $direccion == " ")){
                            ?>

                            <tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="color:red">Por Favor Digite Direcccion</td>
                            </tr>
                             <? 
                               }
                             ?>

                           <tr>
                                    <td>Departamento&nbsp;:&nbsp;</td>
		                            <td >
							
											<select name="dpto" style="width:85">

													<option  value="---" <? if($dpto == "" or $dpto == "---"){ ?> selected="selected"  <? }?> >Seleccione Departamento</option>										                      			
													 <option <?if ($dpto == 1){?> selected="selected" <?}?>  value="1">Valle</option>
													 <option  <?if ($dpto == 2){?> selected="selected" <?}?>value="2">Cundinamarca</option>
													                      			

											</select>		
									</td>

							</tr>
                             <!-- va despues del tr -->
                             <?
									if($ingresar == "Ingresar registro" and ($dpto == "" or $dpto == "---")){ 
							 ?>
                                     <tr>
                                           <td>&nbsp;&nbsp;</td>
                                           <td style="color:red">Por Favor Seleccione un Departamento</td>
                                     </tr>
							<?
						       }
						    ?>


                            <tr>
	                            <td>Municipio&nbsp;</td>
	                            <td >
	                                    
										<select name="mun" style="width:85" >

												<option  value="---" <? if($mun=="" or $mun=="---"){ ?> selected="selected"  <? }?> >Seleccione Municipio</option>										                      			
												 <option <?if ($mun == 1){?> selected="selected" <?}?>  value="1">Cali</option>
												 <option  <?if ($mun == 2){?> selected="selected" <?}?>value="2">Bogota</option>
												                      			

										</select>	

										<input type="hidden" name="hidden1" valu="123">	

								</td>
                             </tr>
                              <?
									if($ingresar == "Ingresar registro" and ($mun == "" or $mun == "---")){ 
							 ?>
                                     <tr>
                                           <td>&nbsp;&nbsp;</td>
                                           <td style="color:red">Por Favor Seleccione un Municipio</td>
                                     </tr>
							<?
						       }
						    ?>


							<tr>
								<td>Celular&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="text" name="celular" placeholder=" "  value="<? if($celular != ""){ echo $celular;} ?>" title="Diligencia Celular"  ></td>
							</tr>
                             <?
                             if($ingresar == "Ingresar registro" and ($celular == "" or $celular == " ")){
                            ?>

                            <tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="color:red">Por Favor Digite Celular</td>
                            </tr>
                             <? 
                               }
                             ?>

							<tr>
								<td>Email&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="email" name="email" placeholder=" " value="<? if($email != ""){ echo $email;} ?>" title="Diligencia Email Valido"  ></td>
							</tr>

                             <?
                             if($ingresar == "Ingresar registro" and ($email == "" or $email == " ")){
                            ?>

                            <tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="color:red">Por Favor Digite Email</td>
                            </tr>
                             <? 
                               }
                             ?>

							<!-- <tr>
								<td>Webside&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="url" id="webside" placeholder=" " title="Diligencia URL Valida  con http://www." required ></td>
							</tr> -->
                             <tr>
								<td>Fecha AAAA-MM-DD&nbsp;&nbsp;:&nbsp;</td>
								<td ><input type="text" name="fecha" placeholder=" " min="2012" title="Diligencia Fecha Valida" value="<? if($fecha != ""){ echo $fecha;} ?>" ></td>
							</tr>
                            <?
                             if($ingresar == "Ingresar registro" and ($fecha == "" or $fecha == " ")){
                            ?>

                            <tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="color:red">Por Favor Digite Fecha</td>
                            </tr>
                             <? 
                               }
                             ?>
							<tr>
								<td></td>
								<td><input type="submit" name="ingresar" value="Ingresar registro"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="borrar" value="Borrar registro"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="actualizar" value="Actualiza registro"></td>
							</tr>
						
						</table>
				</form>

		</div>

	</div>
</div>

	<div class="texto">
		<p><b>VALOR AGREGADO - MODAL</b></p>
		<hr width="155px">
		<br>
		<h3><a href="javascript:AbrirTelon();">- Pastores</a></h3>
		<br> 
		



		<div style="width: 100%" >

			    <h5><u>LISTADO  DE REGISTROS  FRM2<u/></h5><br><br>

			    <div style="">
                     <h6>IDENTIFICADOR DEL PASTOR------------ NOMBRE DEL PASTOR</h6>
                </div>
 

 
	      <?  
	        // traemos desde la tabla todos los registros y los despositamos en vectores
	    	$query_listar = "SELECT * FROM pastores order by apellido, nombre asc";
			$result_listar = MYSQL_QUERY($query_listar);
	 		$numrows_listar= mysql_numrows($result_listar);
			for($i=0;$i<$numrows_listar;$i++)

			{?>

	        <div>
	        	<!-- baja los campos que deseamos -->
                    <? echo $p_idcon = mysql_result($result_listar,$i,"pastor_id"); echo "  - ";
                       echo $nombre = mysql_result($result_listar,$i,"nombre"); 
                      echo " <a href='./Frm2.php?accion=editar&id=$p_idcon'>editar</a> - editar <br>";
                      echo " <a href='./Frm2.php?accion=borrar&id=$p_idcon'>borrar</a> - borrar <br>";


                      ?> 

	        </div>

	        

	        <?}?>

	       <? 
	   //      if($verListado == 1){	
												
				// }								}
	            
	              switch($accion){
     											
     										  case "ingresar":
                                                          if($ingresar == "Ingresar registro" and ( $nombre == "" or $apellido == "" or $cedula == "" or $genero == "" or $edad == "" or $dpto == "---" or $mun == "---" or $direccion == "" or $email == "" or $fecha == "")){
															      echo "INFORMACION INSUFICIENTE";
															} else {
																	if($ingresar == "Ingresar registro"){

																	      echo "INFORMACION OK";
																	 echo $sqladicionar="insert into pastores VALUES ('pastor_id','$nombre','$apellido','$cedula',$genero,$edad,$dpto,$mun,'$direccion','$email','$fecha')";    
																	    $result= MYSQL_QUERY($sqladicionar);
																	
																	}
															}

															
											  break;


											  case "editar":



											   break;

											   case "borrar": 

															if($borrar == "Borrar registro" and ( $nombre == "" or $apellido == "" or $cedula == "" or $genero == "" or $edad == "" or $dpto == "---" or $mun == "---" or $direccion == "" or $email == "" or $fecha == "")){
															      echo "INFORMACION INSUFICIENTE";
															}else {
																if($borrar == "Borrar registro"){

																      echo "SE DISPONE A BORRAR";
																 echo $sqlborrar="DELETE FROM pastores WHERE pastor_id=6";    
																    $result= MYSQL_QUERY($sqlborrar);
																    }
															 }
															
											                     
											                     
											    break;

											    default: echo "No es ninguna";
											    

											


											    
               ?>
	                		
	      

		</div>		
				
	</div>	

	
</body>
</html>