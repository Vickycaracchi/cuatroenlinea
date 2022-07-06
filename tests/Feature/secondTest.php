<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class secondTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_comprueba_mitad_vacia()
    {
        $jugar = file_get_contents('https://4enlinea.ddev.site/jugar/111222333444555666777');

        $this->assertTrue((substr_count($jugar,'bg-gray-200')) == 21); //comprueba si la mitad de recuadros estan vacios
        
        
    }

    public function test_comprueba_mitad_con_rojos()
    {
        $jugar = file_get_contents('https://4enlinea.ddev.site/jugar/111222333444555666777');//comprueba la cantidad de recuadros rojos

        $this->assertTrue(substr_count($jugar,'bg-red-500') == 11);
    }


    public function test_comprueba_mitad_con_celestes()
    {
        $jugar = file_get_contents('https://4enlinea.ddev.site/jugar/111222333444555666777');//comprueba la cantidad de recuadros celestes

        $this->assertTrue(substr_count($jugar,'bg-sky-500') == 17);
    }
}



