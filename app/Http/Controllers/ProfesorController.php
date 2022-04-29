<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('profesor.php')
            ->getBody();

        $profesores = json_decode($response);

        return view('Profesor/index', compact('profesores'));
    }

    public function store(Request $request)
    {

        $this->client->post('cursos.php', [
            "Codigo_Carrera" => "ADMIN",
            "Nombre" => "Matematicas",
            "Titulo" => "Diploma"
        ]);

        return view('Carrera/index');
    }
}
