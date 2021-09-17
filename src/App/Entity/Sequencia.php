<?php

declare(strict_types=1);
namespace App\Entity;

final class Sequencia {
    public Numero $numero1;
    public Numero $numero2;
    
    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;     
    }
}