<?php
header('Content-Type: application/json');

// Sample data to return
$response = [
    'status' => 'success',
    'message' => 'Hello, this is your API response!'
];

echo json_encode($response);
?>
