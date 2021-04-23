<?php

namespace PhpComponents\Middlewares;

class ZboubMiddleware extends BaseMiddleware {

    public function handle(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $body = $response->getBody();
        $body['zboub'] = 'Zboub !!';
        $response->setBody($body);
        return $response;
    }
}