<?php

namespace app\controllers;

use app\core\Controller;

class InfoController extends Controller{
    public function index(){
        $this->view->render('info.phtml', 'navigate.phtml');
    }
}
?>