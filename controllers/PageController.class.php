<?php
require_once 'Controllers.class.php';
class PageController extends Controllers
{
    public function home()
    {
        require_once dirname(__DIR__) . '/views/accueil.view.php';
    }
    
    public function show($view, $data = []) 
    {
        require_once dirname(__DIR__) . '/views/' . $view . '.view.php';
    }

    public static function error404()
    {
        require_once dirname(__DIR__) . '/views/error/e404.php';
        header("HTTP/1.0 404 Not Found");
    } 
}       