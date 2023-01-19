<?php

namespace Controllers;

use Controllers\Controller,
    \Views\MainView;

class SobreController extends Controller
{

    public function __construct()
    {
        $this->view = new MainView('sobre');
    }

    public function executer()
    {
        $this->view->render(['title' => 'Sobre']);
    }
}
