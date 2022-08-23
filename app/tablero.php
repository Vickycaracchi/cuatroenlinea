<?php

namespace App;

include 'Ficha.php';

interface General_tablero{

  
    public function volver_a_cero();//tablero vacio
    public function insertar_definitivo(int $a, int $b, Ficha $ficha);//Inserta la ficha en el tablero
    public function define_pos_y(int $a, Ficha $ficha);//Se fija en que posición de y debe ir la fica segun la columa ingresada 
    public function casillero_ocupado(int $a, int $b); //se fija si hay una ficha en la posición
   
}


class Tablero implements General_tablero
{
    protected int $horizontal;
    protected int $vertical;

    protected $tablero;


    public function __construct (int $x = 7, int $y = 7) {
      

        $this->horizontal = $x;
        $this->vertical = $y;

        $this->volver_a_cero();

    }
    
    

    
    public function volver_a_cero(){
        for($a = 0; $a < $this->horizontal; $a++){
            for($b = 0; $b < $this->vertical; $b++){
                $this->tablero[$a][$b] = "0";
            }
        }
    }
    
    
    public function insertar_definitivo(int $a, int $b, Ficha $ficha){
        
        $this->tablero[$a][$b] = $ficha;
    }

    public function define_pos_y(int $a, Ficha $ficha){   
        if($this->hayFicha($a,0)){
            throw new Exception("No hay más espacio en la columna");
        }
        
        for($b = 1 ; $b < 7; $b++){
            if($this->casillero_ocupado($a,$b) == FALSE){
                $this->ponerFicha($a,$b,$ficha);

                break;
            }
        }
      
    }

    public function casillero_ocupado(int $a, int $b){
        if($a > 7 || $b > 7){
            throw new Exception("Ingrese nuevos valores, los ingresados estan fueras de las dimensiones del tablero");
           }
        if($this->tablero[$a][$b] != "0")
            return TRUE;
        else
            return FALSE;

    }



}