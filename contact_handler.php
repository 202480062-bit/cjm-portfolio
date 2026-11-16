<?php
/**
 * PHP Backend Contact & Project Inquiry Handler
 * Careen Joana Mariano Portfolio Website
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$storageFile = __DIR__ . '/assets/inquiries.json';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $inquiries = [];
    if (file_exists($storageFile)) {
        $raw = file_get_contents($storageFile);
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $inquiries = $decoded;
        }
    }
    echo json_encode([
        'status' => 'success',
        'count' => count($inquiries),
        'inquiries' => array_slice(array_reverse($inquiries), 0, 10)
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method not allowed. Please submit via POST.'
    ]);
    exit;
}

// Support both JSON body and standard form-urlencoded POST
$input = json_decode(file_get_contents('php://input'), true);
if (!is_array($input)) {
    $input = $_POST;
}

$name = trim(strip_tags($input['name'] ?? ''));
$email = trim(strip_tags($input['email'] ?? ''));
$service = trim(strip_tags($input['service'] ?? 'General Creative Inquiry'));
$budget = trim(strip_tags($input['budget'] ?? 'Flexible'));
$message = trim(strip_tags($input['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please fill in your name, email address, and project message.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter a valid email address.'
    ]);
    exit;
}

$newInquiry = [
    'id' => uniqid('inq_', true),
    'name' => $name,
    'email' => $email,
    'service' => $service,
    'budget' => $budget,
    'message' => $message,
    'submitted_at' => date('Y-m-d H:i:s')
];

$existing = [];
if (file_exists($storageFile)) {
    $decoded = json_decode(file_get_contents($storageFile), true);
    if (is_array($decoded)) {
        $existing = $decoded;
    }
}
$existing[] = $newInquiry;

if (!is_dir(dirname($storageFile))) {
    mkdir(dirname($storageFile), 0777, true);
}
file_put_contents($storageFile, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode([
    'status' => 'success',
    'message' => "Thank you, {$name}! Your {$service} inquiry has been received by Careen Joana Mariano.",
    'inquiry' => $newInquiry
]);
?>
