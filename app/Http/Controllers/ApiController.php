<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function mm()
    {
        $response = Http::get('https://thevirustracker.com/free-api?countryTotal=MM');
        $data = $response->json();
        // $total = $data[];

        return new ApiResource($data);
        // print_r($data['countrydata']);
    }
}
