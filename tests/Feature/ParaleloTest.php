<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Paralelo;
use function PHPUnit\Framework\assertJson;

class ParaleloTest extends TestCase
{   
    //agregamos el refreshdatabase para que la base de datos se migre y resetee nuevamente
    use RefreshDatabase;
    public function test_example(): void
    {
    // creamos dos paralelos de prueba

    Paralelo::factory()->create([ 'nombre'=>'P1']);
    Paralelo::factory()->create([ 'nombre'=>'P2']);

    // $response = $this->get('/');
    $response = $this->getJson('api/paralelos');
    
        $response->assertStatus(200)
        ->assertJsonFragment([ 'nombre'=>'P1'])
        ->assertJsonFragment([ 'nombre'=>'P2']);
    }
}
