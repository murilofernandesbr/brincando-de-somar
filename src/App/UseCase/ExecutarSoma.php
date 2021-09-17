<?php

declare(strict_types=1);
namespace App\UseCase;

use App\Entity\Sequencia;

final class ExecutarSoma {
    public function execute(Sequencia $sequencia) {

        $soma = $sequencia->num1 + $sequencia->num2;
        

        $soma = $num1 + $num2;


        
        
        return $this->$soma;

        
    }
}