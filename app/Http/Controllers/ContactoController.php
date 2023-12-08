<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function ver(){

        $contactos=contacto::all();

        return view('vercontactos', compact('contactos'));
    }


    public function create(){

        return view('agregarcontacto');
    }

    public function store(Request $request){

        $contacto= new contacto;
        $contacto->id=$request->id;
        $contacto->nombre=$request->nombre;
        $contacto->apellido=$request->apellido;
        $contacto->telefono=$request->telefono;
       $contacto->save();

       return redirect()->route('contacto.ver');




    }
}
