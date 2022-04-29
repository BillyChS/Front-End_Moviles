<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('ciclo.php')
            ->getBody();
        $ciclos = json_decode($response);

        $response = $this->client->get('carrera.php')
            ->getBody();
        $carreras = json_decode($response);



        return view('OfertaAcademica/index', compact('ciclos', 'carreras'));
    }

    public function show(Request $request)
    {


        $response = $this->client->get('cursos.php?Codigo_Carrera=' . $request->Carrera . '&' . 'No_Ciclo=' . $request->No_Ciclo)
            ->getBody();

        $cursos = json_decode($response);

        return view('OfertaAcademica/show', compact('cursos'));
    }
}
