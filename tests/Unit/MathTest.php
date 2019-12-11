<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MathTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function


      $response = $this->json('GET', '/math/suma', ['a' => 1,'b'=>1]);

        $response
            ->assertJson([
                'resultado' => 2
            ]);
        
}