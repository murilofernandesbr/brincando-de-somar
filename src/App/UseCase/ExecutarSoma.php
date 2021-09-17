<?php

declare(strict_types=1);
namespace App\UseCase;

use App\Entity\Sequencia;

final class ExecutarSoma {
    public function execute(Sequencia $sequencia) {
       return $sequencia->numero1->numero + $sequencia->numero2->numero;                
   }
}