<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidarController extends Controller
{
    //
    public function validar_certificado(Request $request){
        // $request->validate([
        //     'nombre' => 'required',
        //     'apellido' => 'required',
        //     'email' => 'required|email',
        //     'telefono' => 'required|numeric',
        //     'certificado' => 'required|file|mimes:pdf|max:1024',
        // ]);
        return $request->all();
    }
}
