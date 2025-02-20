<?php

use CloudCastle\Core\Api\Common\Log\Log;
use CloudCastle\Core\Api\Request\Request;
use CloudCastle\Core\Api\Response\ApiResponse;
use CloudCastle\Core\Api\Router\Router;

include_once '../App/bootstrap.php';

try {
    $request = Request::getInstance();
    $response = Router::run();
    
    if(empty($response->data) && !is_bool($response->data)) {
        $response->code = 204;
    }
    
    http_response_code($response->code);
    
    echo $response;
} catch (Throwable $exception) {
    Log::write($exception);
    $data['data'] = [];
    $data['data']['success'] = false;
    $data['data']['error'] = true;
    $data['code'] = (int)$exception->getCode();
    $data['message'] = $exception->getMessage();
    $data['success'] = false;
    
    if(config('app')->debug) {
        $data['errors'] = $exception->getTrace();
    }
    
    if($data['code'] > 599){
        $data['code'] = 500;
    }
    
    http_response_code($data['code']);
    echo new ApiResponse(...$data);
}