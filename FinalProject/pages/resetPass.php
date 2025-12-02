<?php
include 'config.php';

if (isset($_GET['token'])) {
  $token = $_GET['token'];

  // Check if token exists
  $query = mysqli_query($conn, "SELECT * FROM users WHERE reset_token='$token'");
  if (mysqli_num_rows($query) == 0) {
    echo "<script>alert('Invalid or expired token!'); window.location='forgotPass.php';</script>";
    exit();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPass = $_POST['new_password'];
    $confirmPass = $_POST['confirm_password'];

    if ($newPass === $confirmPass) {
      $hashed = password_hash($newPass, PASSWORD_DEFAULT);
      mysqli_query($conn, "UPDATE users SET password='$hashed', reset_token=NULL WHERE reset_token='$token'");
      echo "<script>alert('Password reset successfully!'); window.location='../index.php';</script>";
    } else {
      echo "<script>alert('Passwords do not match!');</script>";
    }
  }
} else {
  echo "<script>alert('No token provided!'); window.location='forgotPass.php';</script>";
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password | Isdaan ni Lynde</title>
  <link rel="icon" href="../assets/images/logo.png" type="image/png" />
  <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body id="forgot">
  <div class="forgot-container">
    <h2>New password</h2> <hr>
    <p>Please create a new password you don't use on any other site.</p>

    <form method="POST">
      <input type="password" name="new_password" placeholder="New Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm New Password" required>
      <button type="submit">Update Password</button>
    </form>

    <p class="login-link">Back to <a href="../index.php">Login</a></p>
  </div>
</body>
</html>
