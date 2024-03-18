<?php

namespace App\Controllers;

use Core\Logger;
use Core\View;

class HomeController
{
    // TODO: Implement
    public $logger;

    public function __construct()
    {
        $this->logger = new Logger('storage/logs/app.log');
    }

    public function index()
    {
        $this->logger->writeLog(date("Y-m-d H:i:s") .' - Home Page Visited');
        View::render('index');
    }

    public function about()
    {
        $this->logger->writeLog(date("Y-m-d H:i:s") .' - About Page Visited');
        View::render('about');
    }

    public function contact()
    {
        $this->logger->writeLog(date("Y-m-d H:i:s") .' - Contact Page Visited');
        View::render('contact');
    }
}
