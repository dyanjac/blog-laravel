

@extends('admin.index')
@section('content')
 <div class="content">
      <div class="container-fluid">
        <div class="row">

        	  <div class="col-12">
       
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">LISTADO DE NOTICIAS TI & TELECOM </h3>
                <br><a href="{{ URL::to('/') }}/cpanel/blog/create" ><div class="btn btn-primary rigth"> Crear Nuevo</div></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>	Titulo	</th>
                    <th>Ubicacion</th>
                    <th>	Click</th>
                    <th>	Ord.</th>
                    <th> Opciones</th>
                    <th> codnot</th>
                   

                  </tr>
                  </thead>
                  <tbody>

                 <?php 

                 foreach ($noticias as $key => $value) {
                 ?>	

                 	<tr>
                    <td>{{$value->fecha}}</td>
                    <td>{{$value->titulo}}
                    </td>
                    <td>{{$value->ver}}</td>
                    <td> {{$value->click}}</td>
                    <td>{{$value->orden}}</td>

                    
                    <td>
                    	<a onclick="eliminarnoticia({{$value->codNot}});"> <i class="fa fa-trash"  style="cursor:pointer;padding: 5px;"></i></a>
                    	<a href="{{ URL::to('/') }}/cpanel/blog/edit/{{$value->codNot}}"><i class="fa fa-edit" style="cursor:pointer;padding: 5px;"></i></a> 
                    </td>
                    <td>{{$value->codNot}}</td>
                  </tr>

                 <?php } 	

                 ?>
                  
                
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Fecha</th>
                    <th>	Titulo	</th>
                    <th>Ubicacion</th>
                    <th>	Click</th>
                    <th>	Ord.</th>
                    <th> Opciones</th>
                    <th> codnot</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
	      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <form action="{{ URL::to('/') }}/cpanel/blog/delete/" id="formdelete" name="formdelete" method="POST">
           {{  csrf_field() }} 
           <input type="hidden" name="codigo" id="codigo" >
    </form>
@endsection('content')