<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $baseUrl = env('API_URL');

        $this->app->singleton(Client::class, function ($app) use ($baseUrl) {
            return new Client(
                [
                    'base_uri' => $baseUrl,
                    'headers' => [
                        'Accept'     => 'application/json',
                    ],
                    'http_errors' => false
                ]
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
