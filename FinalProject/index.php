<?php
include './pages/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query user from database
  $query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // Verify hashed password
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $row['username'];
      echo "<script>alert('Login successful!'); window.location='./pages/home.php';</script>";
      exit();
    } else {
      echo "<script>alert('Incorrect password!');</script>";
    }
  } else {
    echo "<script>alert('Username not found!');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Isdaan Ni Lynde</title>
  <link rel="icon" href="./assets/images/logo.png" type="image/png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="./assets/styles/style.css" />
</head>

<body>
  <div id="login">
    <div class="content">
      <!-- LEFT SIDE -->
      <div class="left-section">
        <div class="logoo">
          <img src="./assets/images/logo.png" alt="mylogo">
        </div>
        <div class="welcome-text">
          <h1>Welcome to<br>Isdaan ni Lynde</h1>
          <p>
            Supplying Cebu with the freshest seafood — directly from the ocean to your table.
            Quality, trust, and freshness in every catch.
          </p>
        </div>
      </div>

      <!-- RIGHT SIDE -->
      <div class="cardform">
        <h2>Login</h2>
        <form method="POST" action="">
          <div class="input-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="username" placeholder="Username" required />
          </div>

          <div class="input-group">
            <i class="fa-solid fa-key"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>

          <div class="options">
            <label><input type="checkbox" /> Remember me</label>
            <a href="pages/forgotPass.php">Forgot Password?</a>
          </div>

          <button type="submit" class="login-btn">Login</button>

          <p class="register">Don’t have an account? <a href="pages/register.php">Register</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
