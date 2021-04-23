<?php

namespace PhpComponents\Middlewares;

class Request extends Message implements RequestInterface {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Generate request object, filled with superglobal values
     * @return Request
     */
    public static function createFromGlobals()
    {
        $request = new Request();
        $body = [
            'get' => $_GET,
            'post' => $_POST,
            'request' => $_REQUEST,
            'server' => $_SERVER,
            'files' => $_FILES
        ];
        $request->setBody($body);
        return $request;
    }

}