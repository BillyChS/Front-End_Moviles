<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/LABMOVIL/rutas/',
            'headers' => [
                'Accept'     => 'application/json',
            ],
            'http_errors' => false
        ]);
    }
}
