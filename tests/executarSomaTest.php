<?php

declare(strict_types=1);

use App\Entity\Numero;
use App\Entity\Sequencia;
use App\UseCase\ExecutarSoma;
use PHPUnit\Framework\TestCase;

final class executarSomaTest extends TestCase {
    public function testSoma() {
        $num1 = new Numero(1);
       
        $num2 = new Numero(2);
        

        

        $sequenciaSoma = new Sequencia($num1 , $num2 );
        
        

         $executarSoma = new ExecutarSoma(); 
        

        return $executarSoma->execute($sequenciaSoma);
    }

    
}