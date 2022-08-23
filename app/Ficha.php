<?php
namespace App;


interface General_Fichas{

    public function guardar_color(); 
}


class Ficha implements General_Fichas
{
    protected string $color_ficha;
    

    public function __construct($color){
		$this->color_ficha = $color;
	}

    public function guardar_color(){
        return $this->color_ficha;
    }

}