<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/dinosaure/[i:id]', 'DinosaureController#dinosaure', 'dinosaures');
$router->map('GET', '/types', 'TypeController#types', 'types');
$router->map('GET', '/type/[i:id]', 'TypeController#type', 'type');
$router->map('GET', '/admin', 'admin\AdminController#home', 'admin');
$router->map('GET', '/admin/category', 'admin\TypeController#categories', 'category');
$router->map('GET', '/admin/category/add', 'admin\TypeController#categoryAdd', 'category-add');
$router->map('POST', '/admin/category/add', 'admin\TypeController#add', 'add-category');
$router->map('GET', '/admin/category/[i:id]/edit', 'admin\TypeController#edit', 'category-edit');
$router->map('POST', '/admin/category/[i:id]/edit', 'admin\TypeController#editAdd', 'edit-category');
$router->map('GET', '/admin/category/[i:id]/delete', 'admin\TypeController#delete', 'category-delete');
$router->map('POST', '/admin/category/[i:id]/delete', 'admin\TypeController#deleteAdd', 'delete-category');
$router->map('GET', '/admin/product', 'admin\DinosaureController#products', 'product');
$router->map('GET', '/admin/product/add', 'admin\DinosaureController#productAdd', 'product-add');
$router->map('POST', '/admin/product/add', 'admin\DinosaureController#add', 'add-product');

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
