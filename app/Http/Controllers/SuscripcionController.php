<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $etiqueta=\DB::select('SELECT * from etiqueta');
          // echo "ok";
       return view('suscripcion',array( "etiqueta" => $etiqueta , "activeMenu" => "suscribirse"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro(Request $request)
    {
    $pais="";
    $name = stripcslashes($request['name']);
    $empresa = stripcslashes($request['empresa']);
    $cargo = stripcslashes($request['cargo']);
    $ciudad = stripcslashes($request['ciudad']);
    $email = stripcslashes($request['email']);
    $subject = stripcslashes($request['subject']);
        $saliente="info@caracasdigital.com";
    $contactMessage =  
        "Mensaje:
        Nombre   : $name
        Empresa  : $empresa
        Pais     : $pais
        Cargo    : $cargo
        Ciudad   : $ciudad
        E-mail   : $email
        -----
        El envío de IP:$_SERVER[REMOTE_ADDR]";      
    

        mail('info@caracasdigital.com', $subject, $contactMessage, "From: $saliente");
        //mail('soporte@joelcristobal.com', $subject, $contactMessage, "From: $saliente");

    $contactMessag =  
        "Felicitaciones $name , ha sido registrada al Newsletter Semanal gratuito de caracasgigital.com.
        
        ---------------------------------------------------------
        OFERTA ESPECIAL:
        
        SUSCRIPCIÓN REVISTA IMPRESA  6 EDICIONES ANUALES COSTO ANUAL SOLO EN LA GRAN CARACAS Bs. 100
        
        Porfavor ingresa al siguiente enlace para confirmar su  SUSCRIPCIÓN de REVISTA IMPRESA  
                
        http://www.caracasdigital.com/index.php?keyword=c&c=$email
                
        ---------------------------------------------------------       
        Si usted tiene alguna pregunta, por favor, no dude en ponerse en contacto.
        
        Saludos cordiales       
        
        Caracas Digital
        www.caracasdigital.com
        prensa@caracasdigital.com 
        central 0212-861.27.50 / 861.54.27";        
        
        mail($email,'Suscripción al Newsletter', $contactMessag, "From: $saliente");




    }


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
