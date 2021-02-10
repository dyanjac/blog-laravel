<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function url_exists( $url = NULL ) {
 
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


    public function index()
    {
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                 $etiqueta=\DB::select('SELECT * from etiqueta');
          return view('admin.noticias-create' , array( "datos" => session('datos') , "usuario" => session('user') , "etiqueta" => $etiqueta ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function contarclick($noticia){

            /**

              Al ingresar a la vista por algun motivo se ejecuta un evento de recargar que produce 2 load generando , la ejecucion del update 2 veces.

            **/

            if (session()->exists('key') ) {

            
                   session()->flush(['key']);
                
              }else{

                  $id=$noticia[0]->codNot;
                  $sql="";
                  $sql="update noticias set  click=click+1   where codNot='$id' "; 
                  $aumentar=  \DB::select($sql);
                  $sql=str_replace("'", " ", $sql);

              session(['key' => 1]);

              $inserta=  \DB::select(" insert into log values ( null,'".$sql."',now() )  "); // Registro de log desarrollo
            }
    }


    public function show(Request $request,$id)
    {

         // $etiqueta=\DB::select('SELECT * from etiqueta');
         // return view('noticia',array('id' => $id, "etiqueta" => $etiqueta  ));
    }


    public function articulos_rel($etiqueta=null){

      $noticia_rel=null;

      //$etiqueta='["Tecnologia","Comercio Electronico"]';
      $etiqueta=str_replace("[","",$etiqueta);
      $etiqueta=str_replace("]","",$etiqueta);
      $etiqueta=explode(",",$etiqueta);

      $i=0;
      $query="";
      foreach( $etiqueta as $key => $value){
          
          $query.= $i > 0 ? " or dtl_noticias.etiquetas  like '%".$value."%'" : " dtl_noticias.etiquetas  like '%".$value."%' " ;
      $i++;

      }
    
     return $noticia_rel=  \DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias  on noticias.codNot=dtl_noticias.codNot where ".$query."  order by noticias.fecha desc limit 0,6");

      if(!count($noticia_rel) > 0){

        return $noticia_rel;

      }else{

         return $noticia_rel="SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias  on noticias.codNot=dtl_noticias.codNot where ".$query."  order by noticias.fecha desc limit 0,6";
      }

    }


     public function articulos_antpos($id=null){

      $noticia_rel=0;
      $codant=($id-1);
      $codpos=($id+1);

      
       $sql="SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias on noticias.codNot=dtl_noticias.codNot where noticias.codNot in ($codant) 
        union all 
        SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias on noticias.codNot=dtl_noticias.codNot where noticias.codNot in ($codpos)";

      $noticia_rel=  \DB::select($sql);

      if(!count($noticia_rel) > 0){}

        return $noticia_rel;
      

    }




    public function articulos($title,$id=null)
    {
         $title_ruta=str_replace("-", " ", $title); 
         $noticia="";




        //$noticia=\DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.* FROM noticias where titulo like '%$title_ruta%';");
           $noticia=  \DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias  on noticias.codNot=dtl_noticias.codNot where noticias.titulo like '%$title_ruta%' limit 0,1 ;");


        if(!count($noticia) > 0){

            //$noticia=  \DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.* FROM noticias where codNot='$id'; ");
            $noticia=  \DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias  on noticias.codNot=dtl_noticias.codNot where noticias.codNot='$id' limit 0,1 ;");
                       

        }

         

           //$noticiaid=\DB::select("SELECT * FROM noticias where codNot='6944';");
            $etiqueta=\DB::select('SELECT * from etiqueta ');

            $val_articulos_antpos=null;
            $val_articulos_rel=null;
            $eti_noticia=null;
            $this->contarclick($noticia);
            $val_articulos_antpos=$this->articulos_antpos($noticia[0]->codNot);

            // $eti_noticia=$noticia[0]->etiquetas;
            // $eti_noticia=str_replace("[", "(", $eti_noticia);
            // $eti_noticia=str_replace("]", ")", $eti_noticia);
            // $eti_noticia=\DB::select('SELECT * from etiqueta where etiqueta in '.$eti_noticia);

            

              if($noticia[0]->etiquetas){

              $eti_noticia=$noticia[0]->etiquetas;
              $eti_noticia=str_replace("[", "(", $eti_noticia);
              $eti_noticia=str_replace("]", ")", $eti_noticia);
              $eti_noticia=\DB::select('SELECT * from etiqueta where etiqueta in '.$eti_noticia);
      
             }
              
              $val_articulos_rel=$this->articulos_rel($noticia[0]->etiquetas);

         return view('noticia',array('id' => $id, "etiqueta" => $etiqueta , "title" => $title , "noticia" => $noticia ,"articulosantpos" => $val_articulos_antpos, "etiquetas_rel" => $val_articulos_rel , "eti_noticia" => $eti_noticia ));

    }


public function searchtitulo($title)
    {
         $title_ruta=str_replace("-", " ", $title); 
         $noticia="";

        //$noticia=\DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.* FROM noticias where titulo like '%$title_ruta%';");

        $noticia=  \DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias  on noticias.codNot=dtl_noticias.codNot where noticias.titulo like '%$title_ruta%' limit 0,1 ;");

        if(!count($noticia) > 0){

             return redirect('/');

        }else{

                $this->contarclick($noticia);

        } 
        

         //$noticiaid=\DB::select("SELECT * FROM noticias where codNot='6944';");
         $etiqueta=\DB::select('SELECT * from etiqueta ');
                
                
         return view('noticia',array('id' =>  $noticia[0]->codNot, "etiqueta" => $etiqueta , "title" => $title , "noticia" => $noticia));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         $url=false;
         $etiqueta=\DB::select('SELECT * from etiqueta');
         $noticia=  \DB::select("SELECT DATE_FORMAT(noticias.fecha, '%M %d %Y') ffecha,noticias.codNot as codigo,noticias.*,dtl_noticias.* FROM noticias left join dtl_noticias  on noticias.codNot=dtl_noticias.codNot where noticias.codNot='$id' limit 0,1 ;");

           $visibility="";


        // $portada=$noticia[0]->img_portada;

         return view('admin.noticias-update',array("datos" => session('datos') , "usuario" => session('user') , "etiqueta" => $etiqueta ,  "noticia" => $noticia,"visibility" => $visibility  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
  public function update(Request $request)
    {   

          $input = $request->all();
        //print_r(@$form['formtitulo']);
        //print_r(@$form['formsubtitulo']);
        
    





        

                //Storage::put('avatars/1', $content);
                // Storage::disk('local')->put($Imagen, 'Contents');

     //if($request->has(['codigoblog', 'solo', 'titulo','subTitulo', 'descripcion', 'fecha', 'ubicacion', 'ubicacion2', 'orden', 'estado'])) {
     if($request->has(['codigoblog', 'solo' ])) {
        
        $solo= $input['solo'];
        $titulo=$input['titulo'];
        $descripcion=$input['descripcion'];
       // $Imagen= $input['imagen'] ? $input['imagen'] : null ;
        $video=$input['video'];
        $fecha=$input['fecha'];
        $ubicacion=$input['ubicacion'];
        $ubicacion2=$input['ubicacion2'];
        $subTitulo=$input['subtitulo'];
        $orden=$input['orden'];
        $boletin=0;
        $estado=$input['estado'];
        $etiqueta= isset($input['etiqueta']) ? $input['etiqueta'] : null ;
        $oldetiqueta=$input['oldetiqueta'];
        $nombre_portada=NULL;
        $codnot=$input['codigoblog'];
        $imagen_portada=$input['img_portada'];
      
        $checkportada= isset($input['checkboxPrimary3']) ? 1 : 0 ;

        $id=$input['idblog'];

             $nombre_portada = "";
             $nombre="";

            if($request->has(['imagen'])) { 

              if ($request->file('imagen')->isValid()){  

                      $file = $request->file('imagen'); 
                    
                      $nombre =  time()."_".$file->getClientOriginalName();
                     
                      $path_imagen =    $request->file('imagen')->move(public_path().'/noticias/', $nombre);

                       $sql="update noticias set fotos='$nombre' where codNot=$codnot ";

                       $dtlnoticia=\DB::select($sql);

                        if($checkportada == 1){
                          
                           $dtl_etiq=\DB::select("update dtl_noticias set  img_portada ='$nombre' where id=$id");
                        }


                   }

            } 
           

              $sql="update noticias set titulo='$titulo',descripcion='$descripcion',fecha='$fecha',ver='$ubicacion',ver2='$ubicacion2',subTitulo='$subTitulo',orden='$orden',boletin='$boletin',tipo='$solo',estado='$estado' ,video='$video' where codNot=$codnot ";
                $noticia=\DB::select($sql);


                
                if($checkportada == 0)
                {

                  if( isset($request['portada'])){
                        if($request->file('portada')->isValid()){ 

                           $file = $request->file('portada'); 
                           $nombre_portada =  time()."_".$file->getClientOriginalName();
                          // $path_portada = $request->file('portada')->storeAs('noticias/portada', $nombre_portada); 
                           $path_portada =  $request->file('portada')->move(public_path().'/noticias/portada/', $nombre_portada); //---perfect
                          // $dtl_etiq=\DB::select("update dtl_noticias set  img_portada ='$nombre_portada' where id=$id"); 
                          
                           }
                    } 
                
                }
                       
                
                    $etiqueta=  $etiqueta ?  json_encode($etiqueta) : $oldetiqueta;
                    $portada=  isset($request['portada']) ?  $request['portada'] : $nombre_portada;
           
             if( $request->has('idblog') and isset($request['etiqueta']) ) {

                

                
                   if ($request->has('etiqueta')){ $dtl_etiq=\DB::select("update dtl_noticias set etiquetas='$etiqueta'  where id=$id"); }

                  if ($request->has('portada')){ $dtl_etiq=\DB::select("update dtl_noticias set  img_portada ='$nombre_portada' where id=$id"); }

                }else{

               
                 $dtl_etiq=\DB::select("insert into dtl_noticias values( NULL,$codnot,'$etiqueta','$nombre_portada')");

                }



               
                $noticia=  \DB::select("SELECT * FROM noticias where estado='actual' order by fecha desc");
                   

                return view('admin.noticias' , array( "datos" => session('datos') , "usuario" => session('user') , "noticias" => $noticia ) );


           
            
       }else{



        //print_r( $input);
        return back()->withInput(); 

        }     
    }

   
    public function save(Request $request)
    {


        $input = $request->all();
        //print_r(@$form['formtitulo']);
        //print_r(@$form['formsubtitulo']);
        
        $solo=$input['solo'];
        $titulo=$input['titulo'];
        $descripcion=$input['descripcion'];
        $Imagen=$input['imagen'];
        $video=$input['video'];
        $fecha=$input['fecha'];
        $ubicacion=$input['ubicacion'];
        $ubicacion2=$input['ubicacion2'];
        $subTitulo=$input['subtitulo'];
        $orden=$input['orden'];
        $boletin=0;
        $estado=$input['estado'];
        $etiqueta=$input['etiqueta'];
        
        $nombre_portada=NULL;

         $checkportada = isset($input['checkboxPrimary3']) ? 1 : 0 ;


        

            //Storage::put('avatars/1', $content);
           // Storage::disk('local')->put($Imagen, 'Contents');

            $path_portada = "";

            if ($request->file('imagen')->isValid()){  
                $file = $request->file('imagen'); 
                $nombre =  time()."_".$file->getClientOriginalName();
          

                // $path_imagen = $request->file('imagen')->storeAs('public/noticias/', $nombre);  //---->ok

               // $path_imagen = Storage::putFileAs('public/noticias', request()->file('imagen'), $nombre);
               

                 $path_imagen =    $request->file('imagen')->move(public_path().'/noticias/', $nombre); //---perfect

               
                
                  $path_imagen=$nombre;

                  if($checkportada == 1 ){ $nombre_portada=$nombre;  } 

                  if($checkportada == 0 ){

                      if($request->has('portada')){
                           if ($request->file('portada')->isValid())
                            { 

                             $file = $request->file('portada'); 
                             $nombre_portada =  time()."_".$file->getClientOriginalName();

                             $path_portada =  $request->file('portada')->move(public_path().'/noticias/portada/', $nombre_portada); //---perfect

                          }

                    } 

                  }

                    
               



             $etiqueta = json_encode($etiqueta);


             $codi=\DB::select("SELECT max(codNot) as codi FROM noticias;");
            // $obj = json_encode($request);
           // Storage::disk('local')->put('Noticia/solicitud_.json', $obj);

             $codigo=$codi[0]->codi; 

              $descripcion=str_replace("'","´",$descripcion);
             // $descripcion=htmlentities($descripcion);
             // $descripcion=htmlspecialchars($descripcion);

              $titulo=str_replace("'","´",$titulo);
            //  $titulo=htmlentities($titulo);
           //   $titulo=htmlspecialchars($titulo);

               $subTitulo=str_replace("'","´",$subTitulo);
             // $subTitulo=htmlentities($subTitulo);
             // $subTitulo=htmlspecialchars($subTitulo);


            $checkportada=$input['checkboxPrimary3'];
            $sql="insert into noticias  values (0,'$solo','$checkportada.$titulo','$descripcion','$path_imagen','$video','$fecha','$ubicacion','$ubicacion2','$subTitulo','$orden',0,'$boletin','$estado')";
            $noticia=\DB::select($sql);


            if(isset($codigo)){

              $dtl_etiq=\DB::select("insert into dtl_noticias values( NULL,$codigo,'$etiqueta','$nombre_portada')");

            }
            
            if ($request->has('etiqueta')){  }

             
           
            $noticia=  \DB::select("SELECT * FROM noticias where estado='actual' order by fecha");
               

            return view('admin.noticias' , array( "datos" => session('datos') , "usuario" => session('user') , "noticias" => $noticia ) );


            }else{  

             $request->flash();

             return view('admin.noticias-create' , array( "datos" => session('datos') , "usuario" => session('user') , "msg" => "ERROR CARGANDO LA IMAGEN" ) );
            //   return back()->withInput(); 

            } 
            

            

       // if ($request->filled('imagen')) { }else{

              

       //       $request->flash();
       //       return view('admin.noticias-create' , array( "datos" => session('datos') , "usuario" => session('user') , "msg" => "ERROR CARGANDO LA IMAGEN" ) );
       //  }


        
         
        

        
    }  
    
     public function delete(Request $request)
    {
       //echo $request['codigo'];
        $id=$request['codigo'];
        $sql="delete from noticias where codNot='$id'";
        $noticiadel=\DB::select($sql);

      return redirect('cpanel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       echo $id;
    }
}
