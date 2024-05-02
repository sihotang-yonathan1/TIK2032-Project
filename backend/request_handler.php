<?php
require_once(dirname(__FILE__) . "/model/request.php");

function GET($request, $connection){
    return null;
}

function POST($request, $connection){
    return null;
}

function DELETE($request, $connection){
    return null;
}

function PATCH($request, $connection){
    return null;
}


// function request_handler($request, $connection){
//     $http_method = $request['REQUEST_METHOD'];
    
//     $response = null;
//     match ($http_method) {
//         "GET" => ($response = GET($request, $connection)),
//         "POST" => ($response = POST($request, $connection)),
//         "PATCH" => ($response = PATCH($request, $connection)),
//         "DELETE" => ($response = DELETE($request, $connection))
//     };

//     return $response;
// }

class RequestHandler {
    public $request;
    public $connection;
    
    function __construct($request, mysqli | PDO | null $connection = null){
        $this->request = $request;
        $this->connection = $connection;
    }

    public function GET(){
        return null;
    }

    public function POST(){
        return null;
    }

    function PATCH(){
        return null;
    }

    function DELETE(){
        return null;
    }

}

function handle_request(RequestHandler &$handler){
    $http_method = $handler->request['REQUEST_METHOD'];

    $response = null;
    match ($http_method) {
        "GET" => ($response = $handler->GET()),
        "POST" => ($response = $handler->POST()),
        "PATCH" => ($response = $handler->PATCH()),
        "DELETE" => ($response = $handler->DELETE())
    };
    return $response;
}
