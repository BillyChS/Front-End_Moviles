<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('alumno.php')
            ->getBody();

        $alumnos = json_decode($response);

        $response = $this->client->get('carrera.php')
            ->getBody();

        $carreras = json_decode($response);

        return view('Alumno/index', compact('alumnos', 'carreras'));
    }

    public function store(Request $request)
    {

        $this->client->post('carrera.php', [
            "Codigo_Carrera" => "ADMIN",
            "Nombre" => "Matematicas",
            "Titulo" => "Diploma"
        ]);

        return view('Carrera/index');
    }

    public function showCursos(Request $request)
    {

        $response = $this->client->get('alumno.php?Carrera=' . $request->Carrera)
            ->getBody();

        $alumnos = json_decode($response);
        $carrera = $request->Carrera;
        return view('Alumno/show', compact('alumnos', 'carrera'));
    }

    public function mostrarHistorial($Cedula_Alumno)
    {
        $response = $this->client->get('matricula.php?Cedula_Alumno=' . $Cedula_Alumno)
            ->getBody();

        $alumnos = json_decode($response);

        return view('Alumno/show', compact('alumnos', 'carrera'));
    }
}
