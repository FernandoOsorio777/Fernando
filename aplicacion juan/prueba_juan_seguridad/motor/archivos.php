<?php
	$directorio 	= opendir( "." ); 	
	while ( $archivo = readdir( $directorio ) ) 
	{
	    if ( is_dir( $archivo ) )
	    {
	    }
	    else
	    {
	    	$contenido_head 	= " <script> document.oncontextmenu = function(){return false;};</script>";
			$contenido 			= file_get_contents( $archivo );
			$archivoYExtension 	= explode (  ".", $archivo );
			
			if ( $archivoYExtension[ 1 ] == 'xhtml' )
			{
				$separacionHead 	= explode (  "<head>", $contenido );
				$contenidoHead 		= $separacionHead [ 0 ]."<head>". $contenido_head . $separacionHead[ 1 ];
				$separacionBody 	= explode (  "<body" , $contenidoHead );
				$contenidoBody		= explode (  ">" , $separacionBody[ 1 ]);
				$dentroCuerpo		= explode (  'style="' , $contenidoBody[ 0 ]);
				if ( isset( $dentroCuerpo[ 1 ] ) )
				{
	    			$contenido_body 	= " id='Netzaj_490_530_B-3' lang='en-US' xml:lang='en-US' onkeydown='return false'  draggable='false' style='-webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;".str_replace('"',"",$dentroCuerpo[ 1 ] )."'";
				}else
				{
	    			$contenido_body 	= " onkeydown='return false'  draggable='false' style='-webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;'";
				}
				
				$separacionBody2 		= explode (  "<div" , $contenido );
				
				$tmp_response 	= explode("<body", $contenido);
				echo strstr($tmp_response[1], '>');
				$contenidoTotal 		= $separacionBody [ 0 ]."<body ". $contenido_body.strstr($tmp_response[1], '>');
				
				file_put_contents( $archivoYExtension[ 0 ]."_mod.".$archivoYExtension[ 1 ] , $contenidoTotal );								
			}			

	    }
	} 
?>