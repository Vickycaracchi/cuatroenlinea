<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class thirdTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_comprueba_empezar_con_rojo()
    {
        $jugar = file_get_contents('https://4enlinea.ddev.site/jugar/1');//comprueba si se ingreso un rojo
        $this->assertTrue(substr_count($jugar,'bg-red-500') == 1);
    }

    public function test_comprueba_siguiente_azul()
    {
        $jugar = file_get_contents('https://4enlinea.ddev.site/jugar/1');//comprueba si el siguiente a ingresar es azul

        $this->assertTrue(substr_count($jugar,'bg-sky-500') == 7);
    }
}

