<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Isdaan Ni Lynde | Contacts!</title>
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

    <main>
  <!-- Main -->
  <p class="intro-text">Looking for a reliable supplier of fish, shrimps, and other fresh seafood? Don't hesitate to contact us today!</p>
  
  <section class="contact-section">
    <div class="contact-flex">
      <div class="contact-info">
        <p>
          <strong>📍 Location:</strong>
          <a href="https://www.google.com/maps/@10.2490802,123.9541093,3a,75y,92.49h,64.19t/data=!3m7!1e1!3m5!1so5Mmdec7BrgqvwApHz3j-Q!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D25.80934030086634%26panoid%3Do5Mmdec7BrgqvwApHz3j-Q%26yaw%3D92.49332473633098!7i16384!8i8192?entry=ttu" target="_blank">
            Roro, Cordova, Cebu
          </a>
        </p>
        <p><strong>📱 Phone:</strong> 0950-7707-934</p>
        <p><strong>📧 Email:</strong>
          lynde.ycong@gmail.com
        </p>
        <p><strong>📆 Business Hours:</strong> Monday to Sunday, 6:00 AM – 6:00 PM</p>

        <div class="social-section">
          <p><i class="fab fa-facebook-f"></i> <strong>Facebook:</strong>
            <a href="https://www.facebook.com/lynde.pacaldo.ycong" target="_blank">Lynde Ycong</a>
          </p>
          <p><i class="fab fa-instagram"></i> <strong>Instagram:</strong>
            <a href="https://www.instagram.com/luvley_laira/" target="_blank">Lyra Ycong</a>
          </p>
          <p><i class="fab fa-twitter"></i> <strong>Twitter:</strong>
            <a href="https://x.com/Laira_Ngel" target="_blank">Lyra Ycong</a>
          </p>
        </div>
      </div>

      <div class="map-section">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!4v1746755715711!6m8!1m7!1so5Mmdec7BrgqvwApHz3j-Q!2m2!1d10.24908017524431!2d123.9541093252326!3f106.66642437870613!4f-14.430839476875562!5f0.7820865974627469"
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <section id="form">
    <div class="container form-container">
      <h1>Send your inquiries</h1>
      <form action="./thankyou.php" method="POST">
        <div class="form-row">
          <div class="form-group">
            <label for="firstName">First name</label>
            <input type="text" id="firstName" name="first_name" placeholder="Enter first name" required>
          </div>
          <div class="form-group">
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" name="last_name" placeholder="Enter last name" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter email" required>
        </div>

        <div class="form-group">
          <label for="contact-number">Contact Number</label>
          <input type="number" id="contact-number"
            placeholder="Enter contact number"
            inputmode="numeric"
            pattern="[0-9]{11}"
            maxlength="11"
            name="contact"
            required>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" placeholder="Enter message" name="message" rows="5" required></textarea>
        </div>

        <button class="primary-button" type="submit">Send Message</button>
      </form>
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
