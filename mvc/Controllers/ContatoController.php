<?php

namespace Controllers;

use Controllers\Controller,
    Views;

class ContatoController extends Controller
{

    public function __construct()
    {
        $this->view = new Views\MainView('contato');
    }

    public function executar()
    {
        $this->view->render(['titulo' => 'Página Contato']);
    }
}
