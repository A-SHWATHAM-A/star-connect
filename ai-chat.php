<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = $input['message'] ?? '';

if (!$userMessage) {
    echo json_encode(['reply' => 'Please say something.']);
    exit;
}

// Example simple AI reply (replace with your OpenAI / GPT API)
$replies = [
  "Tell me your birth details to get a detailed reading.",
  "I sense good energy around your career today.",
  "Today’s stars favor personal growth and peace.",
  "Your planetary alignment shows positive change ahead."
];
$reply = $replies[array_rand($replies)];

echo json_encode(['reply' => $reply]);
?>
