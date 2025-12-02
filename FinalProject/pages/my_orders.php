<?php
// --- DATABASE CONNECTION ---
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "isdaan_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- Get customer contact ---
$contact = $_GET['contact'] ?? null;
if (!$contact) {
    echo "No contact number provided.";
    exit;
}

// --- Fetch orders for this customer ---
$stmt = $conn->prepare("SELECT * FROM orders WHERE contact = ? ORDER BY created_at DESC");
$stmt->bind_param("s", $contact);
$stmt->execute();
$result = $stmt->get_result();
$orders = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="icon" href="../assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body class="checkout">

    <main>
        <section class="checkout-section">
            <h1 class="checkh1">My Orders</h1>

            <?php if (empty($orders)): ?>
                <p>No orders found.</p>
            <?php else: ?>
                <?php foreach ($orders as $order): ?>
                    <div class="order-card">
                        <p><strong>Product:</strong> <?php echo htmlspecialchars($order['product']); ?></p>
                        <p><strong>Quantity:</strong> <?php echo htmlspecialchars($order['quantity']); ?></p>
                        <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
                        <p><strong>Contact:</strong> <?php echo htmlspecialchars($order['contact']); ?></p>
                        <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($order['address'])); ?></p>

                        <div class="order-actions">
                            <!-- Delete Order -->
                            <a href="delete_order.php?id=<?php echo $order['id']; ?>&contact=<?php echo urlencode($contact); ?>" class="primaryyy-button" style="background:red;">
                                Delete
                            </a>
                            <!-- Add More -->
                            <a href="products.php?product=<?php echo urlencode($order['product']); ?>&contact=<?php echo urlencode($contact); ?>" class="primaryyy-button">
                                Add More
                            </a>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            <?php endif; ?>

            <br>
            <div class="return">
                <a href="./home.php" class="primaryy-button">Return Home</a>
            </div>
        </section>
    </main>

</body>
</html>
