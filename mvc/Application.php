<?php

class Application
{

    public function executar()
    {
        //echo 'executando';
        $url = ucfirst(isset($_GET['url']) ?  explode('/', $_GET['url'])[0] : 'Home');
        $url .= "Controller";
        if (file_exists('Controllers/' . $url . '.php')) {
            $className = 'Controllers\\' . $url;
            $controller = new $className();
            $controller->executar();
        } else {
            die('Não existe esta página');
        }
    }
}
