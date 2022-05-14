<?php

require 'vendor/autoload.php';

// Create new app instance 
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

// we can store items in the container 
// it uses singleton pattern! meaning 
// we are not reinstantiating this every time 
$container = $app->getContainer();


$app->get('/', function(){
    echo $this->something;
});

$app->run();
// phpinfo(); 

