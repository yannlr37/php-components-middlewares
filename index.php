<?php

use PhpComponents\Middlewares\Request;
use PhpComponents\Middlewares\Response;
use PhpComponents\Middlewaress\Dispatcher;
use PhpComponents\Middlewares\TestMiddleware;
use PhpComponents\Middlewares\HelloMiddleware;
use PhpComponents\Middlewares\ZboubMiddleware;

require_once 'vendor/autoload.php';

$body = [
    'firstname' => 'Yann',
    'lastname' => 'LA ROSA'
];

$request = new Request;
$request->withBody($body);

$dispatcher = new Dispatcher();
$dispatcher->pipe(new TestMiddleware());
$dispatcher->pipe(new HelloMiddleware());
$dispatcher->pipe(new ZboubMiddleware());
$response = $dispatcher->dispatch($request);

