<?php

class Primos{

    public function FunPrimos($numero){
        if ($numero <= 1) {
            return false;
        }

        if ($numero == 2) {
            return true;
        }

        if ($numero % 2== 0) {
            return false;
        }

        $divisor = 5;
        while ($divisor * $divisor <= $numero) {
            if ($numero % $divisor == 0) {
                return false;
            }
           $divisor = $divisor + 2;
        }
            return false;
    }


}

    $numero = 100;
    $resultado = new Primos();
    if ($resultado-> FunPrimos($numero)) {
       echo $numero." Primo";
    } else {
        echo $numero." no es primo";
    }
    

