<?php

namespace app\controllers;

use app\core\Controller;

class AboutController extends Controller{
    public function index(){
        $this->view->render('about.phtml', 'navigate.phtml');
    }
}
?>