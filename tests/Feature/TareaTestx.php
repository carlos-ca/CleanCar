<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Guzzlehttp\Exception\GuzzleException;
use Guzzlehttp\Exception\RequestException;

class TareaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRemoto()
    {
        $cliente = new Client();
        $respuesta = $cliente
        ->post("http://192.168.1.54:8000/api/tareas/nuevo/",[
            'form_params' =>[
                'api_token'=>'UhabA9ciWZQrdtVF5UWz6TYWQDnuL1QfTHimmLdI4hk0m7JWACrrQkh02X7o',
                'name'=>'prueba12345',
                'description'=>'description',
                'estatus'=>'estatus',
                'soa'=>true
            ]
        ]);
        $estados= $respuesta ->getStatusCode();
        if ($estados='200') {
            $this->assertTrue(true);
            
        }else {
            throw new Exception("Error Respuesta Incorrecta", 1);
            
        }
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testLocalTest()
    {
        $response = $this->json('/tareas/nuevo',[
            'api_token'=>'IvRG9V0TkIcCRp8mnD968JNWWWeL6E8iJVSUNmSZ6C4nLL3oWhnABfGWvPoV',
            'name'=>'prueba12345',
            'description'=>'description',
            'estatus'=>'estatus',
            'soa'=>true
        ]);

        $response->assertStatus(200);
    }

}
