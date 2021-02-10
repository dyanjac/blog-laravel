<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

                $noticias=\DB::select("SELECT * FROM noticias where estado='actual' order by codNot desc"); 
          return view('admin.noticias', array("datos" => session('datos') , "usuario" => session('user') , "noticias" => $noticias) );
    }


     public function login()
    {   


         // return view('AdminLTE.pages.login', array("datos" => "HOLA MUNDO jojojojoojo") );
          return view('admin.login', array("datos" => "HOLA MUNDO jojojojoojo") );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias-create', array("msg" => "Credenciales Incorrectas!" ) );
    }


     public function acceso(Request $request)
    {           
                $usuario= md5($request['usuario']) ;
                $clave= md5($request['clave']); 

                $sql = "select count(*) as active from usuario where user='$usuario' and pas='$clave' and estado='activo' ";
                $acceso=\DB::select($sql);

                if($acceso[0]->active > 0)
                {
                        $sql = "select *  from usuario where user='$usuario' and pas='$clave' and estado='activo' ";
                        $acceso=\DB::select($sql); 
                        
                        $noticias=\DB::select("SELECT * FROM noticias where estado='actual' order by codNot desc "); 

                        session(['user' => $request['usuario']]);
                        session(['datos' => $acceso ]);

                        return view('admin.noticias', array("datos" => $acceso , "usuario" => $request['usuario'] , "noticias" => $noticias) );

                }else{

                    return view('admin.login', array("msg" => "Credenciales Incorrectas!" ) );
                }

          
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
