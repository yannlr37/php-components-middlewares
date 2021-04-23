<?php

namespace PhpComponents\Middlewares;

class ExampleMiddleware extends BaseMiddleware {

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $body['test'] = 'add by TestMiddleware';
        $response->setBody($body);
        return $response;
    }
}