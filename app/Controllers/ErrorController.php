<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Description of ErrorController
 *
 * @author LordSaudKaric
 */
class ErrorController 
{    
    public static function handle()
    {
        http_response_code(404);
        return view('pages.error');
    }
}
