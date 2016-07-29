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
	    	$contenido_body 	= " onkeydown='return false' style='-webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;' draggable='false' ";
			$contenido 			= file_get_contents( $archivo );
			$archivoYExtension 	= explode (  ".", $archivo );
			
			if ( $archivoYExtension[ 1 ] == 'xhtml' )
			{
				$separacionHead 	= explode (  "<head>", $contenido );
				$contenidoHead 		= $separacionHead [ 0 ]."<head>". $contenido_head . $separacionHead[ 1 ];
				$separacionBody 	= explode (  "<body" , $contenidoHead );
				$contenidoBody 		= $separacionBody [ 0 ]."<body ". $contenido_body . $separacionBody[ 1 ];
				file_put_contents( $archivoYExtension[ 0 ]."_mod.".$archivoYExtension[ 1 ] , $contenidoBody );				
			}			
	    }
	} 

?>