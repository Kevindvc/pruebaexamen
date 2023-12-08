<?php

namespace App\Http\Controllers;

use App\Models\directorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DirectorioController extends Controller
{
    public function index(){

        $directorios=directorio::all();
        return view('directorio',compact('directorios'));
    }

    public function create(){

        return view('crearEntrada');
    }

    public function store(Request $request){

        $directorio= new directorio;
        $directorio->CodigoEntrada=$request->CodigoEntrada;
        $directorio->nombre=$request->nombre;
        $directorio->apellido=$request->apellido;
        $directorio->correo=$request->correo;
        $directorio->telefono=$request->telefono;
        $directorio->save();
        return redirect()->route('directorio.index');


    }


    public function buscar(){

        return view('buscar');
    }

    public function delete(){

        $directorios=directorio::all();
        return view('eliminar',compact('directorios'));
    }

    public function destroy($codigoEntrada){

        $directorio=directorio::find($codigoEntrada);
        $directorio->delete();

        return redirect()->route('directorio.index');

    }

}
