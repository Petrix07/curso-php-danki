<?php


class Application
{

    const   INCLUDE_PATH      = 'http://localhost/curso-php-danki/project-mvc-basic/',
            INCLUDE_FULL_PATH = self::INCLUDE_PATH . 'Views/pages/templates/';

    public function executer()
    {
        $url = ucfirst(isset($_GET['url']) ?  explode('/', $_GET['url'])[0] : 'Home');
        $url .= "Controller";
        if (file_exists('Controllers/' . $url . '.php')) {
            $className = 'Controllers\\' . $url;
            $controller = new $className();
            $controller->executer();
        } else {
            die('Não existe esta página');
        }
    }
}
