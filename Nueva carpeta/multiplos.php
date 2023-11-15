<?php

class Multiplos{

    public function multiplos($limite){
        $suma = 0;
        for ($i=1; $i < $limite; $i++) { 
            if ($i % 3 == 0 ||$i % 5 == 0){
                $suma = $suma + $i;
            }
        }

        return $suma;

    }


}

    $limite = 1000;
    $operacion = new Multiplos();
    echo $operacion->multiplos($limite);
