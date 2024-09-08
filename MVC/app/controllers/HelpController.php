<?php

namespace App\controllers;

use app\core\Controller;

class HelpController extends Controller{
    public function index(){
        $this->view->render('help.phtml', 'navigate.phtml');
    }
}