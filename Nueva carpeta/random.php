<?php

class Random {

    public function Rnd(){
        
        $random = (microtime(true) );
        $random=$random*$random;
        return $random%100;
        
    }

}

$result = new Random();
echo $result->Rnd();