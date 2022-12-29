<?php

session_start();

require __DIR__ . "/src/init.php";

if(!isset($_SERVER['PATH_INFO'])){
    $pathinfo = $_SERVER['REQUEST_URI'];
}else {
    $pathinfo =  $_SERVER['PATH_INFO'];
}

//$pathinfo = $_SERVER['PATH_INFO'];


$routes = [
    '/index' => [
        'controller' => 'homeController',
        'method' => 'showStart'
    ],
    '/blog/' => [
        'controller' => 'homeController',
        'method' => 'showStart'
    ],
    '/blogposts' => [
        'controller' => 'postsController',
        'method' => 'allPosts'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'singlePost'
    ],
    '/login' => [
        'controller' => 'userController',
        'method' => 'login'
    ],
    '/register' => [
        'controller' => 'userController',
        'method' => 'register'
    ],
    '/dashboard' => [
        'controller' => 'userController',
        'method' => 'dashboard'
    ],
    '/logout' => [
        'controller' => 'userController',
        'method' => 'logout'
    ],

];

if (isset($routes[$pathinfo])){
    $route = $routes[$pathinfo];
    $controller = $container->make($route['controller']);
    $method = $route['method'];
    $controller->$method();
}