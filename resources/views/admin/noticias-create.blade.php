<?php 

// print_r(@$form['formtitulo']);
// print_r(@$form['formsubtitulo']);
 print_r(@$msg);

?>

@extends('admin.index')
@section('content')
    <!-- Main content -->
    <section class="content">
     
      <form action="{{ URL::to('/') }}/cpanel/blog/save" method="post"  enctype="multipart/form-data" >
      	 {{  csrf_field() }}  
     	

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Agregar nueva noticia
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
                        <input type="text" class="form-control datetimepicker-input" name="titulo" id="titulo"  value="{{ old('titulo') }}" >
                    </div>
                </div>

                 <div class="form-group">
                  <label>Sub Titutlo:</label>
                    <div class="input-group date" data-target-input="nearest">
                        
                        <div class="input-group-append" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-bullhorn" ></i></div>
                        </div>
                        <input type="text" class="form-control datetimepicker-input" name="subtitulo" id="subtitulo"  value="{{ old('subtitulo') }}" >
                    </div>
                </div>

                <!-- /.form group -->
                <label>Descripcion</label>
                 <div class="card-body">
             	 <textarea id="descripcion"  name="descripcion">
	                {{ old('descripcion') }}
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
                        <input type="date" class="form-control "  name="fecha"  id="fecha" data-target="#fecha" value="{{ old('fecha') }}" />
                        
                    </div>
                </div>

                  <div class="form-group">
                  <label>Ubicaci&oacute;n</label>
                  <select class="form-control select2bs4" style="width: 100%;"  id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}"  >
                    	<option disabled="">  ---------Seleccione--------- 				
						<option>Titular
						<option>SubTitular
                  </select>
                </div>


                <div class="form-group">
                  <label>Ubicaci&oacute;n 2</label>
                  <select class="form-control select2bs4" style="width: 100%;"   name="ubicacion2" id="ubicacion2" value="{{ old('ubicacion2') }}"  >
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
                        <input type="text" class="form-control datetimepicker-input" name="orden" id="orden" value="{{ old('orden') }}"  >
                    </div>
                </div>

                <div class="form-group">
                  <label>Modo de Mostrar</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="solo" id="solo" value="{{ old('solo') }}" >
                    <option>Texto Y foto
					<option>Video
                  </select>
                </div>

                <div class="form-group">
                        <label>Video</label>
                        <textarea class="form-control" placeholder="Enter ..."  name="video" id="video" >{{ old('video') }}</textarea>
			 	</div>

			 	 <!----> <div class="form-group">
                        <label>Imagen Principal</label>
                       <input type="file" class="form-control " name="imagen" id="imagen" value="{{ old('imagen') }}" >
                       <hr>
                       <div class="form-group clearfix">
                    
                     
	                      <div class="icheck-primary d-inline">
	                        <input type="checkbox"  name="checkboxPrimary3" id="checkboxPrimary3"  checked="">
	                        <label for="checkboxPrimary3">
	                          Utilizar imagen principal como portada en lectura de noticia
	                        </label>
	                      </div>


	                       	
                      

                    </div>
			 	</div> 

			 

			 	<div class="form-group" style="display:none;"  id="ctn-portada" >
			 		 <label>Imagen de Portada</label>
                      <input type="file" class="form-control " name="portada" id="portada" >
			 	</div>	

			 	  <div class="form-group">
                  <label>Estado</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="estado" id="estado" value="{{ old('estado') }}" >
                    <option>Actual
					<option>Pasado
                  </select>
                </div>

           		    <div class="form-group">
                  <label>Etiquetas</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;"  name="etiqueta[]"  id="etiqueta"   >
                    
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
                    <button id="guardar" name="guardar" class="btn btn-primary col-md-6">GUARDAR</button>
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
 </form>
      <!-- ./row -->
    </section>
    <!-- /.content -->


@endsection('content')