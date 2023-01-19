<?php

namespace Views;

class MainView
{

    const TITLE_PAGE = 'Projeto MVC Básico';

    private $fileName;
    private $header;
    private $footer;
    public $menuItems = ['Home', 'Sobre', 'Contato'];

    public function __construct(String $fileName, $header = 'header', $footer = 'footer')
    {
        $this->fileName = $fileName;
        $this->header   = $header;
        $this->footer   = $footer;
    }

    public function render($arr = [])
    {
        include('pages/templates/' . $this->header   . '.php');
        include('pages/'           . $this->fileName . '.php');
        include('pages/templates/' . $this->footer   . '.php');
    }
}
