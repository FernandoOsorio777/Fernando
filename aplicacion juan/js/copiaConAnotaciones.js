  // Code goes here - leng javascript
  // crear la aplicacion - a que vamos a aplicar
  // funciones y objetos se tratan como una variable mas
  // el obj app lo guardamos en una variable
  //1- SE DEFINE EL MODULO DE LA APLICACION DE ANGULO
  var Fernando=angular.module('app_Fernando',[]);
  //$scope conecta con el navegador
  //COMPONENTE $scope =contenedor de variables - scope conecta html con este doc cuando se amarra en el body
  // 2- SE CREA EL CONTROLLER - LAS LLAVES Y CORCHETES SE CIERRAN A LO ULTIMO COMO LA ETIQUETA HTML.
  
  Fernando.controller('ControladorFer',['$scope', function($scope) {
  //      PARA TABLAS
  // array - Nombre de la tabla 1
  $scope.tb_lista_archivos=[];
  // array - Nombre de la tabla 2
  $scope.tb_lista_discipulado=[];
  // 3- DECLARACION DE VARIABLES Y ASIGNACION DE VALORES
  // $scope.primerNivel="discipulado";
  // $scope.segundoNivel="mujer";
  // $scope.tercerNivel="videos";
  // 3-  DECLARACION DE VARIABLES Y ASIGNACION DE VALORES EN UN OBJETO JEISON REEMPLAZA EL MANDARLO DESDE EL INDEX
  // SE NECESITAN ENVIAR TRES VARIABLES QUE DAN LA UBICACION DEL NIVEL DE VIDEO, AUDIO
  // $scope.paramUbicacionFer={
    // primerNivel:"discipulado",
  // segundoNivel:"mujer",
  // tercerNivel:"videos"
  // }
  // 4-  SE CARGA EL SET 
  // $scope.nombre_funcion = function(params){
  // primero se define el objeto -----EN BLANCO----- para despues utilizarlo en el set difiere del nombre del set
  $scope.ubicacion={};

  // LA FUNCION FUE CARGADA EN LA LINEA 127 INDEX

  $scope.setUbicacionfer = function( primerNivel , segundoNivel , tercerNivel )
  {
  // IMPRIMIR VALORES  QUE SE RECIBEN DEL INDEX
  //console.log(segundoNivel,tercerNivel);
  //alert(primerNivel+'  '+segundoNivel +' ' +tercerNivel);
  // entra el nuevo valor de la ubicacion
  $scope.ubicacion.primer   = primerNivel;
  $scope.ubicacion.segundo  = segundoNivel;
  $scope.ubicacion.tercer   = tercerNivel;

  // declara una variable anidada para el treeview - espejo
  /*
  $scope.path_treeview ={
   nombre: 'discipulado' , 
   hijos : { nombre :'mujer'}
  }
  */

  // SE CONSTRUYE UN ARRAY PARA DEPOSITAR LA INFORMMACION DE FILTRAR ARCHIVOS----- EL LUGAR INTERESA
  $scope.archivos_filtrados=[];



  //  SE llama LA FUNCION PARA QUE SE PUEDAN UTILIZAR ESTOS OBJETOS DENTRO DEL SET-----EN BLANCO-----
  filtrar_archivos();

  };
  // end set

  // 5- SE ENVIA 
  $scope.getUbicacion = function(){
  return $scope.ubic_tipo_arch ;
  };


  // SE CREA COMO VARIABLE ??????
  var filtrar_archivos = function (){
  	// inicializamos archivos en cero---- poniendo en  Blanco el array PARA QUE NO SE POGAN FILTRO APPEND FILTRO
       $scope.archivos_filtrados =[];


       //Como lo agarra

       angular.forEach( $scope.tb_lista_archivos , function ( R, skip){
         if ( R.segundo_nivel == $scope.ubicacion.segundo && R.tipo_archivo == $scope.ubicacion.tercer){

           $scope.archivos_filtrados.push(R);


          }
        })

  };

  //  ??????????????????????????
  // se llama desde todos en html

  $scope.devolverTodos = function(){
    // SE PUEDEN UTILIZAR DESDE TODO EL AMBIENTE $SCOPE

  $scope.archivos_filtrados= $scope.tb_lista_archivos ;
  $scope.ubicacion.segundo="mujer";
  $scope.ubicacion.tercer="todos";


  };

  $scope.quitarniveles=function(){

    };

  //*********************************************************************************

  //    AUTOMATIZACION DE <table>

  // DEFINICION DE REGISTROS PARA tb_lista_videos
  var R1_video={
  id: "1",
  segundo_nivel: "mujer",
  url :"video/video.mp4" ,                      
  tipo_archivo  :"video",  
  Formato_Archivo: "mp4"  ,                     
  tema : "alimentos",     
  descripcion : "Descripción Vegetales",   
  idioma: "es" ,             
  fecha_subida : "01/08/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }

  var R2_video={
  id: "2",
  segundo_nivel: "mujer",
  url :"video/video2.mp4" ,                      
  tipo_archivo  :"video",    
  Formato_Archivo: "mp4" ,                 
  tema : "alimentos",   
  descripcion : "Descripción Cárnicos",   
  idioma: "es" ,                  
  fecha_subida : "01/05/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }


  var R3_video={
  id: "3",
  segundo_nivel: "mujer",
  url :"video/video3.mp4" ,                      
  tipo_archivo  :"video",   
  Formato_Archivo: "mp4"     ,              
  tema : "alimentos",
  descripcion : "Descripción Lácteos",
  idioma: "es" ,                        
  fecha_subida : "01/03/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }

  var R4_video={
  id: "4",
  segundo_nivel: "mujer",
  url :"video/video3.mp4" ,                      
  tipo_archivo  :"video",     
  Formato_Archivo: "mp4"  ,               
  tema : "Vestido",
  descripcion : "Descripción vestido Mujer", 
  idioma: "es" ,                       
  fecha_subida : "01/03/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }

  var R5_video={
  id: "5",
  segundo_nivel: "fiestas",
  url :"video/video3.mp4" ,                      
  tipo_archivo  :"video",   
  Formato_Archivo: "mp4" ,               
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre",
  idioma: "es" ,                        
  fecha_subida : "01/04/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }


  var R6_audio={
  id: "6",
  segundo_nivel: "mujer",
  url :"audio/audio.mp3" ,                      
  tipo_archivo  :"audio",      
  Formato_Archivo: "mp3"   ,             
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre",   
  idioma: "es" ,                     
  fecha_subida : "01/04/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }

  var R7_audio={
  id: "7",
  segundo_nivel: "mujer",
  url :"audio/audio3.mp3" ,                      
  tipo_archivo  :"audio",    
  Formato_Archivo: "mp3" ,                
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre", 
  idioma: "es" ,                       
  fecha_subida : "01/04/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }


  var R8_doc={
  id: "8",
  segundo_nivel: "mujer",
  url :"php/php8.php" ,                      
  tipo_archivo  :"documento",     
  Formato_Archivo: "php"  ,            
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre", 
  idioma: "es" ,                       
  fecha_subida : "01/04/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }

  var R9_doc={
  id: "9",
  segundo_nivel: "mujer",
  url :"word/doc18.docx" ,                      
  tipo_archivo  :"documento",     
  Formato_Archivo: "docx"  ,            
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre", 
  idioma: "es" ,                       
  fecha_subida : "01/04/2016",                      
  url_imagen : "img/png/folder2.png" ,

  }

  var R10_doc={
  id: "10",
  segundo_nivel: "mujer",
  url :"word/doc1.docx" ,                      
  tipo_archivo  :"documento",     
  Formato_Archivo: "ppt"  ,            
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre", 
  idioma: "es" ,                       
  fecha_subida : "01/04/2016",                      
  url_imagen : "ppt/folder2.png" ,

  }

  var R11_imagen={
  id: "11",
  segundo_nivel: "mujer",
  url :"img/icono/music3.ico" ,                      
  tipo_archivo  :"imagen",    
  Formato_Archivo: "png"    ,              
  tema : "Vestido",
  descripcion : "Descripción vestido Hombre",
  idioma: "es" ,                        
  fecha_subida : "01/04/2016",                      
  url_imagen : "mg/icono/music3.ic" ,

  }





  // las variables SE incrustan en el arreglo lista_videos=[];


  // ADICION DE REGISTROS EN ARRAY TABLA 1 - tb_lista_videos
  $scope.tb_lista_archivos.push(R1_video);
  $scope.tb_lista_archivos.push(R2_video);
  $scope.tb_lista_archivos.push(R3_video);
  $scope.tb_lista_archivos.push(R4_video);
  $scope.tb_lista_archivos.push(R5_video);
  $scope.tb_lista_archivos.push(R6_audio);
  $scope.tb_lista_archivos.push(R7_audio);
  $scope.tb_lista_archivos.push(R8_doc);
  $scope.tb_lista_archivos.push(R9_doc);
  $scope.tb_lista_archivos.push(R10_doc);
  $scope.tb_lista_archivos.push(R11_imagen);

  // SE LLENA  QUEDAN TODOS LOS REGISTROS
  $scope.archivos_filtrados = $scope.tb_lista_archivos;

  // ******************************************************************************************

  }]);





