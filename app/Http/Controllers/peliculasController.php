<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelicula;
use App\Models\actor;

class peliculasController extends Controller
{
    public function mostrarPelicula(){
        $pelicula=pelicula::all();
        return view('index', ['peliculas'=>$pelicula]);
    }

    public function detallePelicula($id){
        $pelicula=pelicula::find($id);
        $actor=actor::where('pelicula_id',$id)->get();
        return view('pelicula',['pelicula'=>$pelicula, 'actores'=>$actor]);
    }
}
