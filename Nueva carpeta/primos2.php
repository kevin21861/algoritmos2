<?php
class Random {
    public function Primo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

   

    public function generar($cantidad) {
        $contador = 0;
        $numero = 2;
        while ($contador < $cantidad) {
            $rnd = rand(1, 5000000);
            if ($this->Primo($numero)) {
                echo $rnd . " es primo".PHP_EOL;
                $contador++;
            }
            $numero++;
        }
    }
}

$cantidad = 1000;
$primoGenerador = new Random();
$primoGenerador->generar($cantidad);
?>