<?php

namespace App;

class Ganador {
    
    public function ganador_definitivo(Tablero $tablero, int $x, int $y){
        if($this->ganador_horizontal($tablero,$x,$y)==TRUE || $this->ganador_vertical($tablero,$x,$y)==TRUE){
            return  $tablero->casillero($x, $y);
        }
        else
            return "no hay ganador"
    }

    protected function ganador_horizontal(Tablero $tablero, int $x, int $y){

        $ficha = $tablero->casillero($x, $y);
        $contador_color = 0;
        for($i = 0; $i <7; $i++){
            if($ficha == $tablero->casillero($i, $y)){
                $contador_color++;
            }//si ficha (que tiene almacenado su color) es igual al casillero en el que nos encontramos suma uno al contador de color
            else{
                $contador_color = 0; //si ficha (que tiene almacenado su color) NO es igual al casillero en el que nos encontramos reinicia el contador
            }
        }
        if($contador_color <= 4){
            return TRUE; //una vez recorrido todo la fila si el contador llego a 4(o supero) devolvemos TRUE o FALSE en el caso contrario
        }
        else{
            return FALSE; 
        }
    }


    protected function ganador_vertical(Tablero $tablero, int $x, int $y){

        $ficha = $tablero->casillero($x, $y);
        $contador_color = 0;
        for($i = 0; $i <7; $i++){
            if($ficha == $tablero->casillero($x, $i)){
                $contador_color++;
            }//si ficha (que tiene almacenado su color) es igual al casillero en el que nos encontramos suma uno al contador de color
            else{
                $contador_color = 0; //si ficha (que tiene almacenado su color) NO es igual al casillero en el que nos encontramos reinicia el contador
            }
        }
        if($contador_color <= 4){
            return TRUE; //una vez recorrido todo la columna si el contador llego a 4(o supero) devolvemos TRUE o FALSE en el caso contrario
        }
        else{
            return FALSE; 
        }
    }
}