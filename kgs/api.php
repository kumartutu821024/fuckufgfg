<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Target API
$target_url = "https://api.thescholarverse.site/kgs/api?" . $_SERVER['QUERY_STRING'];

// Simple fetch
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

$response = curl_exec($ch);
curl_close($ch);

// If CURL fails, try simple fallback
if (!$response) {
    $response = @file_get_contents($target_url);
}

echo $response;
?>