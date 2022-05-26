<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    //
    public function index()
    {
        // $response = $this->client->get('login.php')
        //     ->getBody();

        // $carreras = json_decode($response);



        return view('auth/login');
    }

    public function input( Request $request)
    {
        $this->client->post('login.php', [
            'json' => [
                "Cedula" => $request->Cedula,
                "Nombre" => $request->Clave
            ]
        ]);

        return redirect()->route('carrera.index');
    }


   


}
