<?php

require 'core/Application.php';

$app = new Application();

$app->router->get('/', function(){
    return 'Hello WOrld';
});

$app->run();