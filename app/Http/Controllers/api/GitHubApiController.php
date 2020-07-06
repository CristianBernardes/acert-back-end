<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Providers\ApiServiceProvider;

class GitHubApiController extends Controller
{
    public function searchForUser($user)
    {
        //Consultando a api do GitHub
        $apiGitHub = new ApiServiceProvider;
        $response = $apiGitHub->getGitUser($user);
        return $response;
    }
}
