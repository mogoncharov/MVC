<?php

namespace App\controllers;

use app\core\Controller;

class ErrorController extends Controller{
    public function index(){
        $this->view->render('error.phtml', 'navigate.phtml');
    }
}