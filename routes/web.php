<?php

use App\Controllers\PagesController;
use Phplama\Router\Route;

Route::notFound('ErrorController');

Route::get('/', 'PagesController@index');