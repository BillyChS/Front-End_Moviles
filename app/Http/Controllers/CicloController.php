<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CicloController extends Controller
{
    //
    public function index()
    {
        $response = $this->client->get('ciclo.php')
            ->getBody();

        $ciclos = json_decode($response);

        return view('Ciclo/index', compact('ciclos'));
    }
}
