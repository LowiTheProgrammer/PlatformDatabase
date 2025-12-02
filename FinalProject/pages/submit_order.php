<?php
// --- DATABASE CONNECTION ---
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "isdaan_db";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// --- GET FORM DATA ---
$product  = $_POST['product']  ?? "";
$quantity = $_POST['quantity'] ?? "";
$name     = $_POST['name']     ?? "";
$contact  = $_POST['contact']  ?? "";
$address  = $_POST['address']  ?? "";

// --- INSERT INTO DATABASE ---
$stmt = $conn->prepare(
    "INSERT INTO orders (product, quantity, name, contact, address) VALUES (?, ?, ?, ?, ?)"
);
$stmt->bind_param("sisss", $product, $quantity, $name, $contact, $address);
$success = $stmt->execute();
$stmt->close();
$conn->close();

// Fallback: If no contact is sent, use "none"
$contact_safe = !empty($contact) ? urlencode($contact) : "none";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order Status</title>
    <link rel="icon" href="../assets/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body class="checkout">
    <main>
        <section class="checkout-section">
            <?php if ($success): ?>
                <h1 class="checkh1">Thank You for Ordering!</h1>
                <p>Your order has been successfully submitted.</p>

                <div class="order-summary">
                    <h2>Order Summary</h2>
                    <p><strong>Product:</strong> <?php echo htmlspecialchars($product); ?></p>
                    <p><strong>Kilo:</strong> <?php echo htmlspecialchars($quantity); ?></p>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                    <p><strong>Contact:</strong> <?php echo htmlspecialchars($contact); ?></p>
                    <p><strong>Address:</strong><br><?php echo nl2br(htmlspecialchars($address)); ?></p>
                </div>

                <br>
                <div class="order-buttons">
                    <!-- Return Home -->
                    <a href="./home.php" class="primaryy-button">Return Home</a>
                    <!-- View My Orders (always clickable because of fallback) -->
                    <a href="my_orders.php?contact=<?php echo $contact_safe; ?>" class="primaryy-button">View My Orders</a>
                </div>
            <?php else: ?>
                <h1 class="checkh1" style="color:red;">Order Failed</h1>
                <p>Something went wrong. Please try again.</p>
                <a href="checkout.php?product=<?php echo urlencode($product); ?>" class="primaryy-button">Go Back</a>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
