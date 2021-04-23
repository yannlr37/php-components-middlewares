<?php

namespace PhpComponents\Middlewares;

interface MiddlewareInterface {

    public function process(RequestInterface $request, RequestHandlerInterface $delegate): ResponseInterface;

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface;
}