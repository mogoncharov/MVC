<?php

namespace app\controllers;

use app\core\Controller;

class HomeController extends Controller{
    public function index(){
        $this->view->render('home.phtml', 'navigate.phtml');
    }
}
?>