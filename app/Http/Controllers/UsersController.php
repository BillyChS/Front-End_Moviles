<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $response = $this->client->get('carrera.php')
            ->getBody();

        $users = json_decode($response);
        dd($users);
        return view('users', compact($users));
    }

    public function post(Request $request)
    {
        $this->client->post('/cursos', [
            'Codigo_Curso' => $request->name
        ]);
    }
}
