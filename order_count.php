<?php
require '../db.php';

header('Content-Type: application/json');

try {
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM payment");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode(['count' => $result['count']]);
} catch (Exception $e) {
    echo json_encode(['error' => 'Failed to fetch order count']);
}
