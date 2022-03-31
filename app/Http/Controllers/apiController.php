<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function mostrarEdad(Request $peticion){
        $nombre=$peticion->nombre;
        $URL= new \GuzzleHttp\Client();
        $response= $URL->request('GET', 'https://api.agify.io/?name='.$nombre);
        $datos=json_decode($response->getBody()->getContents(), true);
        return view('apiedad', ['datos' => $datos]);
    }
}
