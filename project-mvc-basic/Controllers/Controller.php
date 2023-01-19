<?php

namespace Controllers;

use Controllers\interfaces\IController;

abstract class Controller implements IController
{
    protected $view;
    protected $model;

    public function executer()
    {
        $this->view->render();
    }
}
