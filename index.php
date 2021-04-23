<?php

use PhpComponents\Middlewares\Request;
use PhpComponents\Middlewares\Dispatcher;
use PhpComponents\Middlewares\ExampleMiddleware;

require_once 'vendor/autoload.php';

$request = Request::createFromGlobals();
var_dump($request);

$dispatcher = new Dispatcher();
$dispatcher->pipe(new ExampleMiddleware());
$response = $dispatcher->dispatch($request);

var_dump($response);