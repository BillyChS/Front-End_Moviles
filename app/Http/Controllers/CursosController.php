<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('cursos.php')
            ->getBody();

        $cursos = json_decode($response);

        $response = $this->client->get('ciclo.php')
            ->getBody();

        $ciclos = json_decode($response);

        $response = $this->client->get('carrera.php')
            ->getBody();

        $carreras = json_decode($response);

        return view('Curso/index', compact('cursos', 'ciclos', 'carreras'));
    }

    public function showCursos(Request $request)
    {
        $response = $this->client->get('cursos.php?Codigo_Carrera=' . $request->Carrera)
            ->getBody();

        $cursos = json_decode($response);

        $response = $this->client->get('carrera.php?Codigo_Carrera=' . $request->Carrera)
            ->getBody();

        $carrera = json_decode($response);;

        $carrera = $carrera->Nombre;
        return view('Curso/show', compact('cursos', 'carrera'));
    }

    public function destroy($Codigo_Curso)
    {
        //dd($Codigo_Curso);
        $response = $this->client->delete('cursos.php?Codigo_Curso=' . $Codigo_Curso)
            ->getBody();

        return redirect()->route('carrera.index');
    }

    public function store(Request $request)
    {

        $this->client->post('cursos.php', [
            'json' => [
                'Codigo_Curso' => $request->Codigo_Curso,
                'Codigo_Carrera' => $request->Codigo_Carrera,
                'No_Ciclo' => $request->No_Ciclo,
                'Nombre' => $request->Nombre,
                'Creditos' => $request->Creditos,
                'Horas_Semanales' => $request->Horas_Semanales
            ]
        ]);

        return redirect()->route('carrera.index');
    }

    public function edit(Request $request)
    {

        $this->client->put('cursos.php?Codigo_Curso=' . $request->Codigo_Curso, [
            'json' => [
                'Codigo_Curso' => $request->Codigo_Curso,
                'Codigo_Carrera' => $request->Codigo_Carrera,
                'No_Ciclo' => $request->No_Ciclo,
                'Nombre' => $request->Nombre,
                'Creditos' => $request->Creditos,
                'Horas_Semanales' => $request->Horas_Semanales
            ]
        ]);
        return redirect()->route('carrera.index');
    }

    public function showCurso($Codigo_Curso)
    {
        $response = $this->client->get('cursos.php?Codigo_Curso=' . $Codigo_Curso)
            ->getBody();

        $curso = json_decode($response);

        $response = $this->client->get('ciclo.php')
            ->getBody();

        $ciclos = json_decode($response);

        $response = $this->client->get('carrera.php')
            ->getBody();

        $carreras = json_decode($response);

        return view('Carrera/mostrarCurso', compact('curso', 'ciclos', 'carreras'));
    }
}
