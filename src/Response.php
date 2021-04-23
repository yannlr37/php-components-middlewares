<?php

namespace PhpComponents\Middlewares;


class Response extends Message implements ResponseInterface {

    protected $status;

    public function __construct()
    {
        $this->status = 200;
        parent::__construct();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}