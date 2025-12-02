<?php 
session_start();

$product = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : null;

if (!$product) {
    die("<h2 style='color:red;'>No product selected.</h2>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Checkout - <?= $product ?></title>
  <link rel="icon" href="../assets/images/logo.png" type="image/png" />
  <link rel="stylesheet" href="../assets/styles/style.css" />
</head>
<body class="checkout">
  <main>
    <section class="checkout-section">
      <h1 class="checkh1">Checkout</h1>
      <p>You are buying: <strong><?= $product ?></strong></p>

      <form action="submit_order.php" method="post">
        <input type="hidden" name="product" value="<?= $product ?>" />
        
        <label for="quantity">Kilo:</label><br />
        <input type="number" id="quantity" name="quantity" min="1" value="1" required /><br /><br />
        
        <label for="name">Your Name:</label><br />
        <input type="text" id="name" name="name" required /><br /><br />
        
        <label for="contact">Contact Number:</label><br />
        <input type="text" id="contact" name="contact" required /><br /><br />
        
        <label for="address">Delivery Address:</label><br />
        <textarea id="address" name="address" rows="4" required></textarea><br /><br />
        
        <button type="submit" class="primaryy-button">Confirm Purchase</button>
      </form>
    </section>
  </main>
</body>
</html>
