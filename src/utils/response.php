<?php

function _httpResponse ($body = "", $statusCode = 0, $contentType = "application/json") {
    $response = new stdClass();
    $response->isBase64Encoded = false;
    $response->statusCode = $statusCode;
    $response->headers = ["Content-Type" => $contentType];
    $response->body = json_encode($body);
    return $response;
};

function successResponse ($body = "", $statusCode = 200, $contentType = "application/json") {
    return _httpResponse($body, $statusCode, $contentType);
};

function errorResponse ($body = "", $statusCode = 400, $contentType = "application/json") {
    return _httpResponse($body, $statusCode, $contentType);
};
