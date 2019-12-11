<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /** @test */
    function usuarios_home(){
        $this->get('/usuario')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /** @test */
    function usuarios_nombre(){
        $this->get('/usuario/Carloncho')
            ->assertStatus(200)
            ->assertSee('Usuario Carloncho');
    }
    
    /** @test */
    function usuario_datos(){
        $this->get('/usuario/Carlos/19/Perú')
            ->assertStatus(200)
            ->assertSee('Hola Carlos, tienes 19 años y eres de Perú.');
    }
}
