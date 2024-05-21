<?php

$request = $_SERVER['REQUEST_URI'];
// echo $request;

switch ($request){
    case '/':
        require 'home.php';
        break;

    case '/home';
            require 'home.php';
            break;

    case '/home.php';
            require 'home.php';
            break;
    
    case '/login':
        require 'login.php';
        break;
    
    case '/registration':
        require 'registration.php';
        break;

    case '/dashboard':
        require 'dashboard.php';
        break;

    case '/index.php':
        require 'home.php';
        break;
}