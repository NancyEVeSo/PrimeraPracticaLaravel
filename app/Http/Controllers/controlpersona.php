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


}
