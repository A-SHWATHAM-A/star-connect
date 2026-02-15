<?php

// ================================
// ZWITCH UPI COLLECT PHP PROXY
// ================================

// ---- CONFIG ----
$API_KEY = "e4f5c46a-de93-4ce5-bf99-401b83b7cb89";
$SECRET_KEY = "176e08769de2e8dad119fd8db2b493a960895efef80f93fefac55a04cad099fd";
$ACCOUNT_ID = "va_1xXSWeXivgoG0OTY33tPMSYlF";
// ak_test_ytXgGTy3GKCgdtH2hDCW4aMNo4kJcU3HjNKc
// sk_live_usaJxMLZGeYbPyxJGFjUHnZUtNvFZ16Ilolc

// ---- SECURITY HEADERS ----
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// ---- HANDLE PREFLIGHT ----
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// ---- ONLY ALLOW POST ----
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        "status" => false,
        "message" => "Only POST method allowed"
    ]);
    exit();
}

// ---- GET INPUT DATA ----
$input = json_decode(file_get_contents("php://input"), true);

// ---- VALIDATION ----
if (!$input) {
    http_response_code(400);
    echo json_encode([
        "status" => false,
        "message" => "Invalid JSON input"
    ]);
    exit();
}

$upi = $input['upi'] ?? '';
$amount = $input['amount'] ?? '';
$orderId = $input['orderId'] ?? '';

if (!$upi || !$amount || !$orderId) {
    http_response_code(400);
    echo json_encode([
        "status" => false,
        "message" => "Missing required fields (upi, amount, orderId)"
    ]);
    exit();
}

// ---- CREATE AUTH ----
$auth = base64_encode($API_KEY . ":" . $SECRET_KEY);

// ---- ZWITCH URL ----
$url = "https://api.zwitch.io/v1/accounts/$ACCOUNT_ID/payments/upi/collect";

// ---- PAYLOAD ----
$payload = json_encode([
    "remitter_vpa_handle" => $upi,
    "amount" => (int)$amount,
    "expiry_in_minutes" => 5,
    "remark" => "Payment Order " . $orderId,
    "merchant_reference_id" => $orderId
]);

// ---- CURL REQUEST ----
$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => [
        "Authorization: Basic " . $auth,
        "Content-Type: application/json"
    ],
    CURLOPT_TIMEOUT => 30
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode([
        "status" => false,
        "message" => curl_error($ch)
    ]);
    curl_close($ch);
    exit();
}

curl_close($ch);

// ---- RETURN ZWITCH RESPONSE ----
http_response_code($httpCode);
echo $response;
