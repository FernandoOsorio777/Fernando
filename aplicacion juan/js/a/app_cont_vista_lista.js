angular.module('app_Fernando',['datatables']).controller('ControladorFer', function($scope,DTOptionsBuilder,DTColumnBuilder ){

      // DEFINICION DE VARIABLES.
      vmddbb =this;
      $scope.tb_lista_archivos      = [];
      $scope.tb_lista_discipulado   = [];
      $scope.ubicacion              = {};
      // objeto tipo jeison var jsonArray ={ 0: {....} , 1 : {...} }
      $scope.archivos_filtrados     = [];
      vmddbb.archivos_filtrados     = $scope.archivos_filtrados;
      vmddbb.dtOptions = DTOptionsBuilder.newOptions()
      .withOption("bLengthChange", true)
      //paginacion
      .withPaginationType('full_numbers').withDisplayLength(4)
       .withOption( 'sDom',
            "<'dt-toolbar padding-5'<'col-xs-12 col-sm-6 input'f><'col-sm-6 col-xs-12 hidden-xs select'l>r>"+
                            "t"+
      "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'pagination col-xs-12 col-sm-6'p>>")
      .withLanguage({
            "sEmptyTable":     "No hay informacion a mostrar",
            "sInfo":           "Mostrando _START_ hasta _END_ de _TOTAL_ ",
            "sInfoEmpty":      "Mostrando 0 hasta 0 de 0 ",
            "sInfoFiltered":   "(filtered from _MAX_ total entries)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Mostrar _MENU_ Registros",
            "sLoadingRecords": "Loading...",
            "sProcessing":     "Processing...",
            "sSearch":         "Buscar:",
            "sZeroRecords":    "No matching records found",
            "oPaginate": {
                "sFirst":    "Inicio",
                "sLast":     "Fin",
                "sNext":     "Próximo  ",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": activate to sort column ascending",
                "sSortDescending": ": activate to sort column descending"
            }
        });;
      

      $scope.setUbicacionfer = function( primerNivel , segundoNivel , tercerNivel , idioma )
      {
        $scope.ubicacion.primer   = primerNivel;
        $scope.ubicacion.segundo  = segundoNivel;
        $scope.ubicacion.tercer   = tercerNivel;
        $scope.ubicacion.idioma   = idioma;

        $scope.archivos_filtrados=[];
        filtrar_archivos();
        devolverTodos();
      };


      $scope.getUbicacion = function()
      {
        return $scope.ubic_tipo_arch ;
      };
      


      var filtrar_archivos = function ()
      {
              $scope.archivos_filtrados   = [];
              angular.forEach( $scope.tb_lista_archivos , function ( R, skip)
              {
                        if ( R.segundo_nivel == $scope.ubicacion.segundo && R.tipo_archivo == $scope.ubicacion.tercer && R.idioma == $scope.ubicacion.idioma )
                        {
                          $scope.archivos_filtrados.push(R);
                        }
                        vmddbb.archivos_filtrados = $scope.archivos_filtrados;
              });
      };



      $scope.devolverTodos = function()
      {
         $scope.archivos_filtrados= $scope.tb_lista_archivos ;
         vmddbb.archivos_filtrados = $scope.archivos_filtrados;
        


        $scope.ubicacion.segundo="mujer";
        $scope.ubicacion.tercer="todos";

      };


      $scope.limpiarpantalla=function()
      {
         $scope.ubicacion.segundo="";
         $scope.ubicacion.tercer="";
         // alert("hola");
        
      };



      // REGISTROS  ---------------------------------------------------------------------------
     

      var R1_video=
      {
        id              : "1",
        segundo_nivel   : "mujer",
        url             : "video/video.mp4" ,                      
        tipo_archivo    : "video",  
        Formato_Archivo : "mp4"  ,                     
        tema            : "alimentos",     
        descripcion     : "Descripción Vegetales",   
        idioma          : "en" ,             
        fecha_subida    : "01/08/2016",                      
        url_imagen      : "img/png/folder2.png" 
      };

      var R2_video=
      {
        id              : "2",
        segundo_nivel   : "mujer",
        url             : "video/video2.mp4" ,                      
        tipo_archivo    : "video",    
        Formato_Archivo : "mp4" ,                 
        tema            : "alimentos",   
        descripcion     : "Descripción Cárnicos",   
        idioma          : "es" ,                  
        fecha_subida    : "01/05/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      };

      var R3_video=
      {
        id              : "3",
        segundo_nivel   : "mujer",
        url             : "video/video3.mp4" ,                      
        tipo_archivo    : "video",   
        Formato_Archivo : "mp4"     ,              
        tema            : "alimentos",
        descripcion     : "Descripción Lácteos",
        idioma          : "es" ,                        
        fecha_subida    : "01/03/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      };

      var R4_video=
      {
        id              : "4",
        segundo_nivel   : "mujer",
        url             : "video/video3.mp4" ,                      
        tipo_archivo    : "video",     
        Formato_Archivo : "mp4"  ,               
        tema            : "Vestido",
        descripcion     : "Descripción vestido Mujer", 
        idioma          : "es" ,                       
        fecha_subida    : "01/03/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      };

      var R5_video=
      {
        id              : "5",
        segundo_nivel   : "fiestas",
        url             : "video/video3.mp4" ,                      
        tipo_archivo    : "video",   
        Formato_Archivo : "mp4" ,               
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre",
        idioma          : "es" ,                        
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      };


      var R6_audio=
      {
        id              : "6",
        segundo_nivel   : "mujer",
        url             : "audio/audio.mp3" ,                      
        tipo_archivo    : "audio",      
        Formato_Archivo : "mp3"   ,             
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre",   
        idioma          : "es" ,                     
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      }


      var R7_audio=
      {
        id: "7",
        segundo_nivel   : "mujer",
        url             : "audio/audio3.mp3" ,                      
        tipo_archivo    : "audio",    
        Formato_Archivo : "mp3" ,                
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre", 
        idioma          : "es" ,                       
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      };


      var R8_doc=
      {
        id              : "8",
        segundo_nivel   : "mujer",
        url             : "php/php8.php" ,                      
        tipo_archivo    : "documento",     
        Formato_Archivo : "php"  ,            
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre", 
        idioma          : "es" ,                       
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "img/png/folder2.png" ,
      };


      var R9_doc=
      {
        id              : "9",
        segundo_nivel   : "mujer",
        url             : "word/doc18.docx" ,                      
        tipo_archivo    : "documento",     
        Formato_Archivo : "docx"  ,            
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre", 
        idioma          : "en" ,                       
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "img/png/folder2.png" ,

      };

      var R10_doc=
      {
        id              : "10",
        segundo_nivel   : "mujer",
        url             : "word/doc1.docx" ,                      
        tipo_archivo    : "documento",     
        Formato_Archivo : "ppt"  ,            
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre", 
        idioma          : "es" ,                       
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "ppt/folder2.png" ,

      };

      var R11_imagen=
      {
        id              : "11",
        segundo_nivel   : "mujer",
        url             : "img/icono/music3.ico" ,                      
        tipo_archivo    : "imagen",    
        Formato_Archivo : "png"    ,              
        tema            : "Vestido",
        descripcion     : "Descripción vestido Hombre",
        idioma          : "es" ,                        
        fecha_subida    : "01/04/2016",                      
        url_imagen      : "mg/icono/music3.ic" ,

      };


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

      // SE LLENA  -- QUEDAN TODOS LOS REGISTROS.
      $scope.archivos_filtrados = $scope.tb_lista_archivos;


});





