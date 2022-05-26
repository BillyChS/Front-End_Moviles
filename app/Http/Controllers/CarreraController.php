<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{

    //
    public function index()
    {
        $response = $this->client->get('carrera.php')
            ->getBody();

        $carreras = json_decode($response);



        return view('carrera.index', compact('carreras'));
    }


    public function edit($Codigo_Carrera)
    {
        $response = $this->client->get('carrera.php')
            ->getBody();

        $cursos = json_decode($response);

        $ciclos = $this->client->get('ciclo.php')
            ->getBody();

        $ciclos = json_decode($ciclos);

        return view('Carrera/edit', compact('cursos', 'Codigo_Carrera', 'ciclos'));
    }


    public function destroy($Codigo_Carrera)
    {
        $response = $this->client->delete('carrera.php?Codigo_Carrera=' . $Codigo_Carrera)
            ->getBody();

        return redirect()->route('carrera.index');
    }



    //Muestra la carrera asociada 
    public function show($Carrera)
    {
        $response = $this->client->get('carrera.php?Codigo_Carrera=' . $Carrera)
            ->getBody();

        $carreras = json_decode($response);

        return view('Carrera/show', compact('carreras'));
    }



    public function store(Request $request)
    {

        $user = $this->client->post('carrera.php', [
            'json' => [
                "Codigo_Carrera" => $request->Codigo_Carrera,
                "Nombre" => $request->Nombre,
                "Titulo" => $request->Titulo
            ]

        ])->getBody();

        $datos = json_decode($user);

        // if($datos['ROL']==1){
        return redirect()->route('carrera.index');
        // }
        // else if($datos['ROL']==2){
        //     //
        // }


        return redirect()->route('carrera.index');
    }
}
