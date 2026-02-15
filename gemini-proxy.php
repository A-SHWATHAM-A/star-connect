<?php
header("Content-Type: application/json");

$apiKey = "AIzaSyD7yJnbLa3e2ERDHlkLsRW3DrLtet5Yapg"; // Replace with your Gemini API key
$input = json_decode(file_get_contents("php://input"), true);
$prompt = $input["prompt"] ?? "Hello!";

$url = "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-pro:generateContent?key=$apiKey";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
  "contents" => [[ "parts" => [["text" => $prompt]] ]]
]));

$response = curl_exec($ch);
if (curl_errno($ch)) {
  echo json_encode(["error" => curl_error($ch)]);
  exit;
}
curl_close($ch);

echo $response;
?>
