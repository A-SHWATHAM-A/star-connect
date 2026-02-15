<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// -------------------------------
// Allow only GET
// -------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(["status" => false, "message" => "Only GET allowed"]);
    exit;
}

// -------------------------------
// Get Query Parameters
// Example:
// ?orderId=12345&amount=99&name=Shub&phone=9876543210

$orderId = $_GET['orderId'] ?? null;
$amount  = $_GET['amount'] ?? "";
$name    = $_GET['name'] ?? "";
$phone   = $_GET['phone'] ?? "";

if (!$orderId) {
    echo json_encode(["status" => false, "message" => "OrderId missing"]);
    exit;
}

if (!ctype_digit($orderId)) {
    echo json_encode(["status" => false, "message" => "Invalid orderId"]);
    exit;
}

if (!is_numeric($amount) || $amount <= 0) {
    echo json_encode(["status" => false, "message" => "Invalid amount"]);
    exit;
}

if (strlen($orderId) < 5) {
    echo json_encode(["status" => false, "message" => "Invalid orderId"]);
    exit;
}

// -------------------------------
// Indiplex Credentials
// -------------------------------
$username = "INDI180";
$password = "MjAyNTA1MTQxNjQzMjE=";
$xApiKey  = "kcS1L9mbbw7DQOSm_a1aV-SHIitL7pxu5j3wRnlCJes";

$auth = base64_encode($username . ":" . $password);

// -------------------------------
// API Payload
// -------------------------------
$payload = [
    "orderId" => $orderId,
    "sellerIdentifier" => "SINDI25AACB41A0",
    "amount" => (string)$amount,
    "expiryInMinutes" => "10"
];

// -------------------------------
// Call Indiplex API Directly
// -------------------------------
$ch = curl_init("https://api1.indiplex.co.in/api/v1/seller/regupiintent");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload),
    CURLOPT_HTTPHEADER => [
        "Authorization: Basic $auth",
        "x-api-key: $xApiKey",
        "Content-Type: application/json"
    ],
    CURLOPT_TIMEOUT => 30
]);

$response = curl_exec($ch);

if ($response === false) {
    echo json_encode(["status" => false, "message" => curl_error($ch)]);
    curl_close($ch);
    exit;
}

curl_close($ch);

$res = json_decode($response, true);

// -------------------------------
// Validate API Response
// -------------------------------
if (!isset($res['data']) || $res['data']['status'] !== "SUCCESS") {
    echo json_encode([
        "status" => false,
        "message" => "Indiplex API failed",
        "api_response" => $res
    ]);
    exit;
}

// -------------------------------
// Generate UPI Deep Link
// -------------------------------
$seller = $res['data']['sellerInfo'];

$upiLink = "upi://pay?" .
    "pa=" . urlencode($seller['vpa']) .
    "&pn=" . urlencode($seller['payeeName']) .
    "&mc=" . $seller['mcc'] .
    "&tr=" . $res['data']['orderId'] .
    "&am=" . $res['data']['amount'] .
    "&cu=INR";

// -------------------------------
// Final JSON Response
// -------------------------------
echo json_encode([
    "status" => true,
    "orderId" => $res['data']['orderId'],
    "amount" => $res['data']['amount'],
    "upiLink" => $upiLink
]);
