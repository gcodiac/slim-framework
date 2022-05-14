<?php

require 'vendor/autoload.php';

// Create new app instance 
$app = new \Slim\App;

// we can store items in the container 
// it uses singleton pattern! meaning 
// we are not reinstantiating this every time 
$container = $app->getContainer();

// add item to the container 
$container['greeting'] = function (){
    echo 'HI <br>';
    return 'Hello from the container <br>';
    // for example db
    // return new PDO('...');
};

// for example db
$container['db'] = function (){
    // return new PDO('...');

};

// When someone lands on '/' we 
// Call back function or a closure 
$app->get('/', function(){
    echo $this->greeting;
    echo $this->greeting;
    echo $this->greeting;
    return 'Home Page <br>';
});

$app->get('/contact', function(){
    return 'Contact';
});


$app->run();
// phpinfo(); 

