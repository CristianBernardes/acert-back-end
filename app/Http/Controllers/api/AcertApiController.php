<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Providers\ApiServiceProvider;

class AcertApiController extends Controller
{
    public function getInfo()
    {
        //Consultando a api da acert
        $apiAcert = new ApiServiceProvider;
        $response = $apiAcert->getInfoApiAcert();
        return $response;
    }
}
