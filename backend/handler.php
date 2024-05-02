<?php

include_once(dirname(__FILE__) . '/model/request.php');
include_once(dirname(__FILE__) . '/model/response.php');

function json_handler(Request $request, Response $response){
    header('Content-Type: application/json');
    return json_encode($response->body);
}