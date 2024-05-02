<?php

class Request {
    public string $url;
    public string $method;
    public string | null $data;

    function __construct(
        string $url, string $method = "GET", ?string $data = null, 
        $header = array())
    {
            $this->url = $url;
            $this->method = $method;
            $this->data = $data;
    }
};