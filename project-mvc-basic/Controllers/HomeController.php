<?php

namespace Controllers;

use Controllers\Controller,
    \Views\MainView;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->view = new MainView('home');
    }

    public function executer()
    {
        $this->view->render(['title' => 'Home']);
    }
}
