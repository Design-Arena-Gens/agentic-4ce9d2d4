<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'مرحباً من API',
    'data' => [
        'php_version' => phpversion(),
        'server_time' => date('Y-m-d H:i:s'),
        'timezone' => date_default_timezone_get()
    ]
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
