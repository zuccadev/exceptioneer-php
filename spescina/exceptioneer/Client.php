<?php

namespace Spescina\Exceptioneer;

class Client
{
    protected $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function send($e)
    {
        $this->httpClient->send($e);
    }
}