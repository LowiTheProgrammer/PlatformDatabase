<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
  $result = mysqli_query($conn, $check);

  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username or Email already exists!');</script>";
  } else {
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
      echo "<script>alert('Account created successfully!'); window.location='../index.php';</script>";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | Isdaan ni Lynde</title>
  <link rel="icon" href="../assets/images/logo.png" type="image/png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="../assets/styles/style.css" />
</head>
<body class="register">
  <div class="signup-container">
    <h1>Isdaan ni Lynde</h1>
    <div class="form-card">
      <h2>Sign up</h2>
      <form method="POST" action="">
        <div class="input-group">
          <i class="fa-solid fa-user"></i>
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
          <i class="fa-solid fa-key"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn">Create Account</button>
        <p>Already have an account? <a href="../index.php">Login</a></p>
      </form>
    </div>
  </div>
</body>
</html>
