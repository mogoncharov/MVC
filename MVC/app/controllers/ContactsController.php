<?php

namespace app\controllers;

use app\core\Controller;

class ContactsController extends Controller{
    public function index(){
        $this->view->render('contacts.phtml', 'navigate.phtml');
    }
}
?>