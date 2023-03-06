<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';

    private function splitURL()
    {
        // to avoid passing an empty url to get route: replace by home
        $URL = $_GET['url'] ?? 'home';
        // seperate parts of given URL
        // (needs to receive string)
        $URL = explode('/', $URL);
        return $URL;
    }

    public function loadController()
    {
        // loadController will call splitURL to find URL called and load
        // requested page
        $URL = $this->splitURL();
        // find the file to be loaded
        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        } else {
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = "_404";
        }

        $controller = new $this->controller();
        call_user_func_array([$controller, $this->method], []); //'a' => 'something', 'b' => 'something else'
    }

}