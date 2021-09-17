<?php

declare(strict_types=1);
namespace App\Entity;

final class Sequencia {
    public Numero $num1;
    public Numero $num2;
    

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
     
    }
}