<?php

declare(strict_types=1);

use App\Entity\Numero;
use App\Entity\Sequencia;
use App\UseCase\ExecutarSoma;
use PHPUnit\Framework\TestCase;

final class executarSomaTest extends TestCase {
    public function testSoma() : void {
        $sequenciaSoma = new Sequencia(new Numero(2),new Numero(2));
        $executarSoma = new ExecutarSoma(); 
        
        $this->assertEquals($executarSoma->execute($sequenciaSoma),4);
    }    
}