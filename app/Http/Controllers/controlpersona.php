<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlpersona extends Controller
{
    public function ingresar(){

        return view('ingresarP');

    }

    public function mostrar(){
        return view('mostrarP');
        
    }

    public function ingresar2(Request $dato){
        

        $nombre =$dato->nombre;
        $apellido= $dato->apellido;
        $cedula= $dato->cedula;
        $promedio= $dato->promedio;


        $arreglo= array("$nombre","$apellido", "$cedula", "$promedio");

        return view('mostrarP', compact('arreglo'));

    }





}
