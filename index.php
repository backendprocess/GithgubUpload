<?php
// Include the header
include 'header.php';

// Include the main content sections
include 'section.php'; // This includes the video section
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tubers TV</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <img src="assets/images/logo.png" alt="Tubers TV Logo" class="logo">
  <nav id="menu">
    <a href="index.php">Home</a>
    <a href="youtube.php">YouTube</a>
    <a href="faq.php">FAQ</a>
    <a href="about.php">About</a>
    <a href="contact_us.php">Contact Us</a>
    <a href="privacy-policy.php">Privacy Policy</a>
  </nav>
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
</header>

<!-- Include the footer -->
<?php include 'footer.php'; ?>

<script>
  function toggleMenu() {
    const menu = document.getElementById("menu");
    if (menu) {
      menu.classList.toggle("active");
    }
  }
</script>

<style>
  /* General Styles */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #000;
    color: white;
    padding: 10px 20px;
  }

  .logo {
    max-width: 100px;
  }

  nav {
    display: flex;
    gap: 15px;
  }

  nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
  }

  nav a:hover {
    color: #ff3333;
  }

  .menu-toggle {
    display: none;
    font-size: 24px;
    color: white;
    cursor: pointer;
  }

  /* Content Creator Section */
  .content-creator-section {
    background: #f3f3f3;
    padding: 40px 20px;
    text-align: center;
  }

  .content-creator-section h2 {
    font-size: 2rem;
    color: #ff3333;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .creator-box {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    text-align: center;
  }

  .creator-box img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 15px;
  }

  .creator-box h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
  }

  .creator-box p {
    font-size: 1.2rem;
    color: #555;
  }

  /* Mobile Responsive Styles */
  @media (max-width: 768px) {
    nav {
      display: none;
      flex-direction: column;
      background-color: #000;
      position: absolute;
      top: 100%;
      right: 0;
      width: 100%;
      padding: 10px 0;
    }

    nav.active {
      display: flex;
    }

    .menu-toggle {
      display: block;
    }
  }
</style>

</body>
</html>