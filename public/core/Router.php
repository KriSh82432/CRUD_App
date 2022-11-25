<?php

require 'Requests.php';

class Router{
    public Request $request;
    protected array $routes = [];
    public function __construct()
    {
        $this->request = new Request();
    }
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }
    public function resolve(){
        $path = $this->request->getPath();
        echo '<pre>';
        var_dump($path);
        echo '</pre>';
        exit;
    }
}