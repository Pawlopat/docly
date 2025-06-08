<?php
include 'config.php';
require_once '../src/Router.php';
require_once '../src/DocumentController.php';

use Docly\Router;

$router = new Router();
$router->get('/', 'DocumentController@form');
$router->post('/generate', 'DocumentController@generate');
$router->dispatch();
