<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;


class CountriesController extends Controller
{
    // https://restcountries.eu/rest/v2/currency/MXN
      public function form(){
             //$usuario=$_GET['name'];

        $cliente= new Client();
                $respuestas=$cliente->get('https://restcountries.eu/rest/v2/currency/MXN'.'pais');

        
        $rapi=json_decode($respuestas->getBody()->getContents(), true);
        return view('contries.contries);
     
    }
  
       
}
       

