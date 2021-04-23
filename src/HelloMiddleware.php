<?php

namespace PhpComponents\Middlewares;

class HelloMiddleware extends BaseMiddleware {

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $body['hello'] = 'Hello You';
        $response->setBody($body);
        return $response;
    }
}