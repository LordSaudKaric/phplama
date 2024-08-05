<?php
declare(strict_types=1);

use Phplama\Exceptions\Whoops;
use Phplama\File\File;
use Phplama\Http\Request;
use Phplama\Http\Response;
use Phplama\Router\Route;
use Phplama\Session\Session;

class Application
{
    public static function run(): void
    {
        // Whoops PHP errors for cool kids
        Whoops::handle(ENV, DEBUG);
        // Start sesion if not starder
        Session::start();
        // Handle the Request
        Request::handle();
        // Require all routes directory
        File::require_directory('routes');
        
        $uri = Request::url()?:'/';
        $method = Request::post('__METHOD') ?? Request::method();
        
        $data = Route::handle($uri, $method);
        
        Response::output($data);
    }
}