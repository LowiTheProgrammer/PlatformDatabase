<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];

  $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  if (mysqli_num_rows($query) > 0) {
    // generate reset token
    $token = bin2hex(random_bytes(50));
    mysqli_query($conn, "UPDATE users SET reset_token='$token' WHERE email='$email'");

    // automatically redirect to reset password page
    echo "<script>
      window.location.href = 'resetPass.php?token=$token';
    </script>";
  } else {
    echo "<script>alert('Email not found.');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | Isdaan ni Lynde</title>
  <link rel="icon" href="../assets/images/logo.png" type="image/png" />
  <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body id="forgot">
  <div class="forgot-container">
    <h2>Find your account</h2> <hr>
    <p>Please enter your email to search your account.</p>

    <form method="POST">
      <input type="email" name="email" placeholder="Enter email" required>
      <button type="submit">Reset Password</button>
    </form>

    <p class="login-link">Remembered Password? <a href="../index.php">Login</a></p>
  </div>
</body>
</html>
