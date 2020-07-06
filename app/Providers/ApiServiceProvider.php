<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;

class ApiServiceProvider extends ServiceProvider
{

    private $gitClient;

    public function __construct()
    {
        $this->gitClient = new Client(['base_uri' => 'https://api.github.com/users/']);

        $this->acertClient = new Client([
            'base_uri' => 'https://apiweb-enwzofr76a-uc.a.run.app/auth/login',
            'headers' => [
                'token' => '7e8230ae820bd5f3d4f022489415dbb1',
                'usuario' => '2143',
                'senha' => '123456'
            ]
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
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

    public function getGitUser($user)
    {
        try {
            $res = $this->gitClient->request('GET', $user);
            return $res->getBody();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            if ($response && $response->getStatusCode() == 404) {
                return response()->json(['message' => 'Usuário não encontrado']);
            } else {
                throw $e;
            }
        }
    }

    public function getInfoApiAcert()
    {
        try {
            $res = $this->acertClient->request('GET');
            return $res->getBody();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            if ($response && $response->getStatusCode() == 404) {
                return response()->json(['message' => 'Informação não encontrada']);
            } else if ($response && $response->getStatusCode() == 500) {
                return response()->json(['message' => 'Erro interno de servidor']);
            } else {
                throw $e;
            }
        }
    }
}
