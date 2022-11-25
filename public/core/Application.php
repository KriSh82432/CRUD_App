<?php

require 'Router.php';

class Application{
    public Router $router;

    public function __construct()
    {
        $this->router = new Router();   
    }
    public function run(){
        echo "su";
        $this->router->resolve();
    }
}