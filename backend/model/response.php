<?php

class Response {
    public string | null $body;
    
    function json(){
        if ($this->body != null){
            return json_decode($this->body);
        }
    }

    function text(){
        return $this->body;
    }
}