<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('carrera.php')
            ->getBody();

        $carreras = json_decode($response);



        return view('Matricula/index', compact('carreras'));
    }
}
