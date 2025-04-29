<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us - Tubers TV</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: url('assets/SubUsed/background2.jpg') no-repeat center center/cover;
      background-attachment: fixed;
      padding-top: 90px; /* Header space */
      color: #1a237e; /* Outer Text Color */
    }

    /* Container */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 50px 20px;
    }

    /* Headings */
    h1 {
      font-size: 3rem;
      text-align: center;
      color: #1a237e; /* Deep Blue */
      margin-bottom: 30px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-size: 2rem;
      text-align: center;
      color: #3949ab; /* Lighter Blue */
      margin-bottom: 20px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* About Section */
    .about-box {
      display: flex;
      flex-wrap: wrap;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
      margin-bottom: 50px;
    }

    .about-text, .about-image {
      flex: 1 1 500px;
      padding: 30px;
    }

    .about-text p {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 20px;
      text-align: justify;
      color: #000; /* Black Text inside boxes */
    }

    .about-text strong {
      color: #b71c1c; /* Dark Red for highlights */
      font-weight: bold;
    }

    .about-image img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    }

    /* Highlight Features */
    .highlight-box {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .highlight-item {
      background: rgba(255, 255, 255, 0.95);
      padding: 25px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
      transition: 0.3s;
      color: #000; /* Black inside cards */
    }

    .highlight-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .highlight-item h4 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #3949ab; /* Blue Heading inside Card */
    }

    .highlight-item p {
      font-size: 1rem;
      line-height: 1.6;
      color: #000; /* Black Paragraphs */
    }

    /* Responsive */
    @media (max-width: 768px) {
      h1 { font-size: 2.2rem; }
      h2 { font-size: 1.8rem; }
      .about-box {
        flex-direction: column;
      }
    }
  </style>

</head>

<body>

<div class="container">
  <h1>About Us</h1>

  <div class="about-box">
    <div class="about-text">
      <h2>Who Are We?</h2>
      <p>
        Established in <strong>1994</strong>, SITI Networks has been a pioneer in delivering high-quality entertainment services in West Bengal for over <strong>25 years</strong>. Our mission is to bring uninterrupted, high-quality entertainment to millions of households across the region.
      </p>
      <p>
        Recognized with prestigious awards such as the <strong>ET Bengal Corporate Awards</strong> and <strong>IBEF Top Brands</strong>, SITI Networks continues to be a trusted name in the entertainment industry, offering robust and innovative solutions to meet the evolving needs of our audience.
      </p>
    </div>
    <div class="about-image">
      <img src="assets/SubUsed/siti-network.jpg" alt="SITI Network Overview">
    </div>
  </div>

  <div class="highlight-box">
    <div class="highlight-item">
      <h4>The Largest MSO</h4>
      <p>
        SITI Networks is part of the <strong>Essel Group</strong>, featuring a robust Digital Cable Network, Broadband Services, and HD offerings. It is one of India's leading Multi-System Operators (MSOs).
      </p>
    </div>
    <div class="highlight-item">
      <h4>Comprehensive Channels</h4>
      <p>
        Operating a bouquet of <strong>19 high-quality indigenous TV channels</strong> across various genres, SITI Channels are viewer favorites in West Bengal, offering a diverse range of entertainment options.
      </p>
    </div>
    <div class="highlight-item">
      <h4>Expansive Reach</h4>
      <p>
        Our network spans <strong>40 lakh homes</strong> across West Bengal, delivering premium entertainment to millions of loyal viewers every day.
      </p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
