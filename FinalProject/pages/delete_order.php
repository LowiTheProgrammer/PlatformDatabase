<?php
// --- DATABASE CONNECTION ---
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "isdaan_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// --- Get order ID and contact ---
$id = $_GET['id'] ?? null;
$contact = $_GET['contact'] ?? null;

if ($id) {
    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// Redirect back to order history
header("Location: my_orders.php?contact=" . urlencode($contact));
exit;
