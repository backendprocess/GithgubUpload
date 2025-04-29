<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tubers TV</title>

  <style>
    /* General Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    header {
      background-color: #000;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      height: 70px;
    }

    .logo {
      height: 50px;
      width: auto;
    }

    #main-nav {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    #main-nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    #main-nav a:hover {
      color: #ff3333;
    }

    #menu-toggle {
      display: none;
      font-size: 28px;
      cursor: pointer;
      color: white;
    }

    /* Footer (if you have one) */
    footer {
      background-color: #000;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 20px;
    }

    footer a {
      color: #ff3333;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      #main-nav {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 70px;
        right: 0;
        width: 100%;
        background-color: #000;
        padding: 20px 0;
        transition: all 0.3s ease;
      }

      #main-nav.active {
        display: flex;
      }

      #main-nav a {
        text-align: center;
        padding: 12px 0;
        border-bottom: 1px solid #333;
      }

      .logo {
        height: 40px;
      }

      #menu-toggle {
        display: block;
      }
    }
  </style>

</head>

<body>

<header>
  <img src="assets/images/logo.png" alt="Tubers TV Logo" class="logo" />
  
  <nav id="main-nav">
    <a href="index.php">Home</a>
    <a href="youtube.php">YouTube</a>
    <a href="faq.php">FAQ</a>
    <a href="about.php">About</a>
    <a href="contact_us.php">Contact Us</a>
    <a href="privacy-policy.php">Privacy Policy</a>
  </nav>

  <div id="menu-toggle" onclick="toggleMenu()">☰</div>
</header>

<script>
  function toggleMenu() {
    const nav = document.getElementById('main-nav');
    nav.classList.toggle('active');
  }
</script>

</body>
</html>
