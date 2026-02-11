<?php

header("Content-Type: application/json");

$data = file_get_contents("php://input");

if (!$data) {
    http_response_code(400);
    echo json_encode(["error" => "No data received"]);
    exit;
}

$ch = curl_init("https://hooks.zapier.com/hooks/catch/1997286/uea8m3w/");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

curl_close($ch);

http_response_code($httpCode);
echo $response;
