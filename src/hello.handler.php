<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/utils/response.php';

return function ($event) {
    
    return successResponse([
        "message" => "Hello from PHP " . PHP_VERSION,
        "event" => $event
    ]);
};