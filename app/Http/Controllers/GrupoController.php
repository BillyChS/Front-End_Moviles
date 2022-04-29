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


        return view('Matricula/index', compact('grupos'));
    }
}
