<?php

use Slim\Http\Request;

require '../vendor/autoload.php';
$config['displayErrorDetails'] = true;
// $config['addContentLengthHeader'] = false;

// $config['db']['host']   = 'localhost';
// $config['db']['user']   = 'user';
// $config['db']['pass']   = 'password';
// $config['db']['dbname'] = 'exampleapp';

// Create app
$app = new \Slim\App(['settings' => $config]);

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

$app->get('/', function($request, $response){
    return $this->view->render($response, 'home.twig');
    // return 'Bismillah';
})->setName('home');


$app->get('/contact', function($request, $response){
    $this->view->render($response, 'contact.html');
});

$app->post('/contact', function($request, $response){
    // return $this->render($request, 'contact');
    //catch and display the POST params
    echo $_POST['name'];
    // or
    echo $request->getParam('name');
    //or
    echo '<pre>';
    var_dump($request->getParams());
    echo '</pre>';

    die('Contact');
})->setName('contact');

$app->run();