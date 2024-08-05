<?php


/**
* View render
* @param string $view
* @param array $vars
* @param string $type
* @return type mixed
*/
if (!function_exists('view')) 
{
    function view (string $view, array $vars = [], string $type = 'blade'): mixed
    {
        return \Phplama\View\View::render($view, $vars, $type);
    }   
}

/**
* Request get
* @param string $key
* @return type mixed
*/
if (!function_exists('request')) 
{
    function request (string $key): mixed
    {
        return \Phplama\Http\Request::value($key);
    }   
}


/**
* Redirect to path
* @param string $path
* @return type mixed
*/
if (!function_exists('redirect')) 
{
    function redirect (string $path): mixed
    {
        return \Phplama\Url\Url::redirect($path);
    }   
}


/**
* Redirect to previous page
* @param string $path
* @return type mixed
*/
if (!function_exists('previous')) 
{
    function previous (): mixed
    {
        return \Phplama\Url\Url::previous();
    }   
}

/**
* Url path
* @param string $path
* @return type mixed
*/
if (!function_exists('url')) 
{
    function url (string $path): mixed
    {
        return \Phplama\Url\Url::path($path);
    }   
}

/**
* Asset path
* @param string $path
* @return type mixed
*/

if (!function_exists('asset')) 
{
    function asset (string $path): mixed
    {
        return \Phplama\Url\Url::path('asset/' . $path);
    }   
}


/**
* Dump and die
* @param mixes $data
* @return type void
*/
if (!function_exists('dnd')) 
{
    function dnd (mixed $data, bool $die = true): void
    {
        echo '<pre>';
        echo '<div style="padding: 4px; font-size: 16px; background: #000; color:MediumSeaGreen; text-align: left;">';
        print_r($data);
        echo '</div>';
        echo '</pre>';
        if ($die) die;
    }   
}

/**
* Get Session by the given key
* @param string $path
* @return type mixed
*/
if (!function_exists('session')) 
{
    function sessoion (string $key): mixed
    {
        return Phplama\Session\Session::get($key);
    }   
}

/**
* Flash Session by the given key
* @param string $path
* @return type mixed
*/
if (!function_exists('flash')) 
{
    function flash (string $key): mixed
    {
        return Phplama\Session\Session::flash($key);
    }   
}


/**
* links
* @param string|int $current_page
* @param string|int $pages
* @return type string
*/
if (!function_exists('links')) 
{
    function links (string|int $current_page, string|int $pages): string
    {
        return App\Models\DbModel::links($current_page, $pages);
    }   
}


/**
* Table auth
* @param string|int $current_page
* @param string|int $pages
* @return type string
*/
if (!function_exists('auth')) 
{
    function auth (string $table): string
    {
        $auth = Phplama\Session\Session::get($table) ?: Phplama\Cookie\Cookie::get($table);
        
        return \App\Models\DbModel::table($table)->where('id', $auth)->fetch();
    }   
}