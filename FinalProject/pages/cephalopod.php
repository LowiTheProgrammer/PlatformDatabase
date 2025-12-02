<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Isdaan Ni Lynde | Cephalopod Products!</title>
  <link rel="icon" href="../assets/images/logo.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/styles/style.css">
</head>

<body>
   <div class="logout">
  <div class="cntct">
    <p><strong>Contact Number:</strong> 0950-7707-934</p> </div>
    </div>
  
  <!-- Header -->
  <header id="header">
    <nav class="navbar container">
      <div class="logo">
        <img src="../assets/images/logo.png" alt="Logo" />
      </div>
      
      <input type="checkbox" id="menu-toggle" class="menu-toggle">
      <label for="menu-toggle" class="menu-btn">☰</label>
      
      <ul class="nav-links">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
        <li class="dropdown">
          <a href="./products.php">Products ▼</a>
          <ul class="dropdown-content">
            <li><a href="./fishes.php">Fishes</a></li>
            <li><a href="./shellfish.php">Shellfish</a></li>
            <li><a href="./cephalopod.php">Cephalopod</a></li>
          </ul>
        </li>
        <li><a href="./contact.php">Contacts</a></li> 
      </ul>
    </nav>
  </header> <hr>

<!-- Main -->
<main>
  <section class="product-section">
    <h2>Our Cephalopod Products</h2>
    <div class="product-container">

      <div class="product-card">
        <img src="../assets/images/squid.jfif" alt="Squid">
        <h3>Squid</h3>
        <p>Fresh squid, great for grilling or adobo dishes.</p>
        <form action="checkout.php" method="get">
          <input type="hidden" name="product" value="Squid">
          <button type="submit" class="primary-button">Buy Now!</button>
        </form>
      </div>

      <div class="product-card">
        <img src="../assets/images/octopus.jfif" alt="Octopus"> <br><br>
        <h3>Octopus</h3>
        <p>A seafood delicacy prized for its tender texture and ability to absorb flavors well.</p>
        <form action="checkout.php" method="get">
          <input type="hidden" name="product" value="Octopus">
          <button type="submit" class="primary-button">Buy Now!</button>
        </form>
      </div>

    </div>
  </section>
</main>


<!-- Footer -->
<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Isdaan ni Lynde</h3>
      <p>Your trusted supplier of fresh & frozen seafood in Cebu.</p>
      <p>
        <strong>Address:</strong>
        <a href="https://www.google.com/maps/@10.2490802,123.9541093,3a,75y,92.49h,64.19t/data=!3m7!1e1!3m5!1so5Mmdec7BrgqvwApHz3j-Q!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D25.80934030086634%26panoid%3Do5Mmdec7BrgqvwApHz3j-Q%26yaw%3D92.49332473633098!7i16384!8i8192?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank">
          Roro, Cordova, Cebu
        </a>
      </p>
      <p><strong>Phone:</strong> 0950-7707-934 </p>
      <p><strong>Email:</strong> lynde.ycong@gmail.com</p>
    </div>

    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="./home.php">Home</a></li>
        <li><a href="./about.php">About Us</a></li>
        <li><a href="./products.php">Products</a></li>
        <li><a href="./contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Reach us</h4>
      <ul>
        <li><a href="https://www.facebook.com/lynde.pacaldo.ycong" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
        <li><a href="https://www.instagram.com/luvley_laira/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="https://x.com/Laira_Ngel" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Isdaan ni Lynde. All rights reserved.</p>
  </div>
</footer>
</body>
</html>

