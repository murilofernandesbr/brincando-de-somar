<?php

declare(strict_types=1);
namespace App\Entity;

final class Numero {
    public int $numero;

    public function __construct(int $numero)
    {
      $this->numero = $numero;
    }

    
    
    
}