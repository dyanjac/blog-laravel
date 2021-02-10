<?php 

// print_r(@$form['formtitulo']);
// print_r(@$form['formsubtitulo
// print_r(@$msg);

?>

@extends('admin.index')
@section('content')
    <!-- Main content -->
    <section class="content">
     
      <form action="{{ URL::to('/') }}/cpanel/mercadeo/update" method="post"  enctype="multipart/form-data" >
      	 {{  csrf_field() }}  
     	

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Agregar nueva noticia {{$visibility}}
              </h3>
            </div>
            <!-- /.card-header -->
           
          </div>
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nueva Noticia</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="form-group">
                  <label>Titutlo:</label>
                    <div class="input-group date"  data-target-input="nearest">
                        
                        <div class="input-group-append"  data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-bullhorn" ></i></div>
                        </div>
                        <input type="text" class="form-control datetimepicker-input" name="titulo" id="titulo"  value="{{ @$noticia[0]->titulo }}" >
                    </div>
                </div>

                 <div class="form-group">
                  <label>Sub Titutlo:</label>
                    <div class="input-group date" data-target-input="nearest">
                        
                        <div class="input-group-append" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-bullhorn" ></i></div>
                        </div>
                        <input type="text" class="form-control datetimepicker-input" name="subtitulo" id="subtitulo"  value="{{ @$noticia[0]->subTitulo }}" >
                    </div>
                </div>

                <!-- /.form group -->
                <label>Descripcion</label>
                 <div class="card-body">
             	 <textarea id="descripcion"  name="descripcion">
	                {{ @$noticia[0]->descripcion }}
	              </textarea>
	            </div>
	            <div class="card-footer">
	              
	            </div>

                <!-- Date range -->
                <div class="form-group">
                  <label>Fecha:</label>
                    <div class="input-group date"  data-target-input="nearest">
                        
                    	<div class="input-group-append" data-target="#fecha" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                        <input type="date" class="form-control "  name="fecha"  id="fecha" data-target="#fecha" value="{{ @$noticia[0]->fecha }}" />
                        
                    </div>
                </div>

                  <div class="form-group">
                  <label>Ubicaci&oacute;n</label>
                  <select class="form-control select2bs4" style="width: 100%;"  id="ubicacion" name="ubicacion" value="{{ @$noticia[0]->ver }}"  >
                    	<option disabled="">  ---------Seleccione--------- 				
						<option>Titular
						<option>SubTitular
                  </select>
                </div>


                <div class="form-group">
                  <label>Ubicaci&oacute;n 2</label>
                  <select class="form-control select2bs4" style="width: 100%;"   name="ubicacion2" id="ubicacion2" value="{{ @$noticia[0]->ver2 }}"  >
                    	<option disabled="">  ---------Seleccione--------- 				
						<option>Titular
						<option>SubTitular
                  </select>
                </div>

                <div class="form-group">
                  <label>Nro de Orden:</label>
                    <div class="input-group "  data-target-input="nearest">
                        
                        <div class="input-group-append"  data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-bullhorn" ></i></div>
                        </div>
                        <input type="text" class="form-control datetimepicker-input" name="orden" id="orden" value="{{ @$noticia[0]->orden }}"  >
                    </div>
                </div>

                <div class="form-group">
                  <label>Modo de Mostrar</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="solo" id="solo" value="{{ @$noticia[0]->tipo }}" >
                    <option>Texto Y foto
					<option>Video
                  </select>
                </div>

                <div class="form-group">
                        <label>Video</label>
                        <textarea class="form-control" placeholder="Enter ..."  name="video" id="video" >{{ @$noticia[0]->video }}</textarea>
			 	</div>


			 	 <!----> <div class="form-group">

                        <?php

                          function url_exists( $url = NULL ) {
 
                          if( empty( $url ) ){
                              return false;
                          }
                       
                          $options['http'] = array(
                              'method' => "HEAD",
                              'ignore_errors' => 1,
                              'max_redirects' => 0
                          );
                          $body = @file_get_contents( $url, NULL, stream_context_create( $options ) );
                          
                          // Ver http://php.net/manual/es/reserved.variables.httpresponseheader.php
                          if( isset( $http_response_header ) ) {
                              sscanf( $http_response_header[0], 'HTTP/%*d.%*d %d', $httpcode );
                       
                              // Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
                              $accepted_response = array( 200, 301, 302 );
                              if( in_array( $httpcode, $accepted_response ) ) {
                                  return true;
                              } else {
                                  return false;
                              }
                           } else {
                               return false;
                           }
                      }
                          

                          if(url_exists("http://www.caracasdigital.com/nmercadeos/".$noticia[0]->fotos)) {
                            ?>
			 	 	              	<img src="http://www.caracasdigital.com/nmercadeos/{{@$noticia[0]->fotos}}" class="form-control" style="width: 100px;height: 75px;" > 
                         

                        <?php }else{
                          ?>
                           <img src="{{ asset('nmercadeos/'.$noticia[0]->fotos) }}" class="form-control" style="width: 200px;height: 150px;" > 
                         
                         
                        <?php
                         }
                        ?>

                          <label>Imagen Principal</label>
                       <input type="file" class="form-control " name="imagen" id="imagen" value="{{ @$noticia[0]->fotos }}" >
                       <hr>
                       <div class="form-group clearfix">
                    
                     
	                      <div class="icheck-primary d-inline">
	                        <input type="checkbox"  name="checkboxPrimary3" id="checkboxPrimary3"  <?php if( isset($noticia[0]->img_portada)){  }else{  echo 'checked=""'; }  ?> >
	                        <label for="checkboxPrimary3">
	                          Utilizar imagen principal como portada en lectura de noticia
	                        </label>
	                      </div>


	                       	
                      

                    </div>
			 	</div> 

			 

			 	<div class="form-group"  <?php if( isset($noticia[0]->img_portada)){ echo 'style="display:block;"'; }else{  echo 'style="display:none;"'; }  ?>  id="ctn-portada" >

          <?php
                      if(isset($noticia[0]->img_portada))
                      {
                                
                       if(url_exists("http://www.caracasdigital.com/noticias/portada/".$noticia[0]->img_portada)) {
                            ?>
                          <img src="http://www.caracasdigital.com/noticias/portada/{{@$noticia[0]->img_portada}}" class="form-control" style="width: 100px;height: 75px;" > 
                         

                        <?php }else{
                          ?>
                           <img src="{{ asset('noticias/portada/'.$noticia[0]->img_portada) }}" class="form-control" style="width: 200px;height: 150px;" > 
                         
                         
                        <?php
                         }

                         }
                        ?>

			 		 <label>Imagen de Portada</label>
                      <input type="file" class="form-control " name="portada" id="portada" >
			 	</div>	

			 	  <div class="form-group">
                  <label>Estado</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="estado" id="estado" value="{{ @$noticia[0]->estado }}" >
                    <option>Actual</option>
					          <option>Pasado</option>
                  </select>
                </div>

           		    <div class="form-group">
                  <label>Etiquetas</label>


                   <label>{{@$noticia[0]->etiquetas}}</label>
                  <select class="select2" multiple="multiple" data-placeholder="{{ @$noticia[0]->etiquetas }}" style="width: 100%;"  name="etiqueta[]"  id="etiqueta"   >
                    
                  	<?php foreach ($etiqueta as $key => $value) {
                  		?>
                  		 <option>{{$value->etiqueta}}</option>
                  	<?php }
                  	?>
                  


                  </select>
                </div>
              	

           		    <div class="form-group ">
           		    	<div class="row col-md-12">
           		    	<a href="{{ URL::to('/') }}/cpanel/" id="guardar" name="guardar" class="btn btn-danger col-md-6">CANCELAR</a>
           		    	<button id="guardar" name="guardar" class="btn btn-primary col-md-6">ACTUALIZAR</button>
           		    	</div>
           		    </div>	
                <!-- /.form group -->

                <!-- Date and time range -->
            
                <!-- /.form group -->
              </div>
                <div class="card-footer">
                
                </div>
              <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      <input type="hidden" name="codigoblog" id="codigoblog" value="{{ @$noticia[0]->codigo }}">

      <input type="hidden" name="oldetiqueta" id="oldetiqueta" value="{{ @$noticia[0]->etiquetas }}">
   
      <input type="hidden" name="img_portada" id="img_portada" value="{{ @$noticia[0]->img_portada }}">
      <input type="hidden" name="idblog" id="idblog" value=" {{ @$noticia[0]->id }}" >
 </form>
      <!-- ./row -->
    </section>
    <!-- /.content -->


@endsection('content')