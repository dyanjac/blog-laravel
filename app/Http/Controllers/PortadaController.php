<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PortadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $portadas=\DB::select('SELECT DATE_FORMAT(noticias.fecha, "%M %d %Y") ffecha,noticias.* FROM noticias where ver="Titular" and estado="Actual" order by orden limit 0,5');

        $noticias=\DB::select('SELECT DATE_FORMAT(noticias.fecha, "%M %d %Y") ffecha,noticias.*  FROM  noticias where ver="SubTitular" and estado="Actual"  order by  orden;');
        
        $mercadeo1=\DB::select('SELECT DATE_FORMAT(nmercadeos.fecha, "%M %d %Y") ffecha,nmercadeos.*  FROM  nmercadeos where ver="Titular" and estado="Actual"  order by  orden   limit 0,6');    

        $noticia_mercadeo=\DB::select('SELECT DATE_FORMAT(nmercadeos.fecha, "%M %d %Y") ffecha,nmercadeos.*  FROM  nmercadeos where ver="SubTitular" and estado="Actual"  order by  orden limit 0,20');

        $etiqueta=\DB::select('SELECT * from etiqueta');

        $sql="";

        if(count($mercadeo1) < 7 ){

           
            $sql.='SELECT DATE_FORMAT(nmercadeos.fecha, "%M %d %Y") ffecha,nmercadeos.*  FROM  nmercadeos where ver="SubTitular" and estado="Actual"  order by  orden limit 0,1;';
   

            $noticia_extend=\DB::select($sql);

            $noticias[6]=$noticia_extend[0];
        }

        return view('index',array('portadas' => $portadas ,'noticias' => $noticias , "mercadeo1" => $mercadeo1 , "noticias_mercadeo" => $noticia_mercadeo , "etiqueta" => $etiqueta ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
