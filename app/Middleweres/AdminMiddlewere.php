<?php

declare(strict_types=1);

namespace App\Middleweres;

class AdminMiddlewere 
{
    public function handle() 
    {
        if (1 != 1) {
            die('There is error in middlewere!');
        }
    }
}
