<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('grupo.php')
            ->getBody();

        $grupos = json_decode($response);

        return view('Grupo/index', compact('grupos'));
    }

    public function showGrupos($Codigo_Curso)
    {
        $response = $this->client->get('grupo.php?Codigo_Curso=' . $Codigo_Curso)
            ->getBody();

        $grupo = json_decode($response);


        $response = $this->client->get('grupo.php')
            ->getBody();

        $grupos = json_decode($response);

        $response = $this->client->get('cursos.php')
            ->getBody();

        $cursos = json_decode($response);

        $response = $this->client->get('profesor.php')
            ->getBody();

        $profesores = json_decode($response);


        return view('Grupo/edit', compact('grupo', 'grupos', 'cursos', 'profesores', 'Codigo_Curso'));
    }

    public function edit($Codigo_Curso)
    {
        $response = $this->client->get('grupo.php?Codigo_Curso=' . $Codigo_Curso)
            ->getBody();

        $grupos = json_decode($response);
        return view('Grupo/modificarGrupo', compact('grupos'));
    }

    public function store(Request $request)
    {
        return $request;
        $this->client->post('grupo.php', [
            'json' => [
                'Numero_Grupo' => $request->Numero_Grupo,
                'No_Ciclo' => $request->No_Ciclo,
                'Nombre_Curso' => $request->Codigo_Curso,
                'Cedula_Profesor' => $request->Cedula_Profesor,
                'Horario' => $request->Horario,
            ]
        ]);

        return redirect()->route('grupo.index');
    }
}
