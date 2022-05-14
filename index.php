<?php

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function(){
    return 'Bismillah';
});

$app->run();