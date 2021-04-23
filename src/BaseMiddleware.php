<?php

namespace PhpComponents\Middlewares;

class BaseMiddleware implements MiddlewareInterface {

    public function process(RequestInterface $request, RequestHandlerInterface $delegate): ResponseInterface
    {
        $response = $delegate->dispatch($request);
        if (is_null($response)) {
            $response = new Response();
        }
        $response = $this->handle($request, $response);
        return $response;
    }

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}