<?php

namespace App;

include 'Ficha.php';

interface General_Tableros{

  
 
}


class Tablero implements General_Tableros
{
    protected int $horizontal;
    protected int $vertical;


    public function __construct (int $x = 7, int $y = 7) {
      
        $this->horizontal = $x;
        $this->vertical = $y;
    }

}