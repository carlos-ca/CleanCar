<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculadoraTest extends TestCase
{
     /**
     * pueda de la funcion sumar.
     *
     * @return void
     */
    public function testSumatest()
    {
       //caso de pueda 
       $a=1;
       $b=2;
       $payLoad=['api_token'=>'PuriBH5tCJlJat6czZ6LyqjONgHjxktBupnZYT5sAUAsjUxUFPdA8UkwdR0z'];
       $response=$this->json('POST','/api/suma/'.$a.'/'.$b,$payLoad);
       $response->assertStatus(200);//si hay repuesta 
       $response->assertJson(['r'=>3]);
       $this->assert(true);
    }
}
