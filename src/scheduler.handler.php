<?php

require __DIR__ . '/../vendor/autoload.php';

return function ($event) {
    
    $message = [
        "message" => "Hello from CRON Scheduler",
        "event" => json_encode($event)
    ];

    print_r($message);
};