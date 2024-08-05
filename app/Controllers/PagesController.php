<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Description of DashboardController
 *
 * @author LordSaudKaric
 */
class PagesController 
{
    public function indexAction()
    {      
        return view('pages.home');
    }
}
