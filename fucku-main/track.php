<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$file = 'users.json';
$data = [];

if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true) ?: [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $deviceId = $input['deviceId'] ?? '';

    if ($deviceId) {
        $data[$deviceId] = [
            'lastSeen' => time(),
            'ua' => $_SERVER['HTTP_USER_AGENT'],
            'ip' => $_SERVER['REMOTE_ADDR']
        ];
        file_put_contents($file, json_encode($data));
    }
}

echo json_encode(['status' => 'ok', 'total' => count($data)]);
