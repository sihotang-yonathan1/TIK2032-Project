<?php
require_once('../connect.php');

require_once(dirname(__FILE__, 2) .  "/request_handler.php");
require_once(dirname(__FILE__, 2) .  "/response_handler.php");

$http_method = $_SERVER['REQUEST_METHOD'];

class BlogHandler extends RequestHandler {
    function GET(){
        $result = $this->connection->query("
            SELECT 
                id, title, modified_time, 
                content, author 
            FROM
                blog
        ");

        // return data in association array
        $data = $result->fetch_all(MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $data;
    }

    function POST(){
        $prepared_statement = $this->connection->prepare("
            INSERT blog (title, content, modified_time, author)
            VALUE (?, ?, ?, ?)
        ");
    }
}


$handler = new BlogHandler($_SERVER, $connection);
$response = handle_request($handler);


json_response($response);

