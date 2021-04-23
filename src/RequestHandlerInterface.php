<?php

namespace PhpComponents\Middlewares;

interface RequestHandlerInterface {

    public function pipe(MiddlewareInterface $middleware);

    public function dispatch(RequestInterface $request);
}