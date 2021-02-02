<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/dinosaure/[i:id]', 'DinosaureController#dinosaure', 'dinosaures');
$router->map('GET', '/types', 'TypeController#types', 'types');
$router->map('GET', '/type/[i:id]', 'TypeController#type', 'type');

$match = $router->match();

if(is_array($match)) {

    $target = explode('#', $match['target']);
    $controllerName = '\Dinodico\Controllers\\' . $target[0];
    $methodName = $target[1];

    $controller = new $controllerName();
    $controller->$methodName($match['params']);

} else {
    http_response_code(404);
    $controller = new \Dinodico\Controllers\MainController();
    $controller->error404();
}
