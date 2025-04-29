<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Frequently Asked Questions - Tubers TV</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f9f9f9 0%, #e8f0fe 100%);
      color: #222;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 100px 20px 40px;
    }

    .faq-image-top {
      text-align: center;
      margin-bottom: 30px;
    }

    .faq-image-top img {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #0056b3;
      font-size: 42px;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .faq-intro {
      text-align: center;
      margin: 0 auto 50px;
      max-width: 800px;
    }

    .faq-intro p {
      font-size: 20px;
      color: #555;
      line-height: 1.8;
    }

    .faq-section {
      margin-top: 30px;
    }

    .faq-item {
      background: #fff;
      margin-bottom: 20px;
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }

    .faq-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .faq-item h3 {
      font-size: 24px;
      color: #0056b3;
      margin-bottom: 15px;
    }

    .faq-item p,
    .faq-item ul li {
      font-size: 18px;
      color: #444;
      line-height: 1.7;
    }

    .faq-item ul {
      margin: 10px 0 0 20px;
      list-style-type: disc;
    }

    .contact-note {
      text-align: center;
      margin-top: 50px;
      font-size: 20px;
      color: #333;
    }

    .contact-note a {
      color: #0056b3;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .contact-note a:hover {
      color: #003c80;
    }

    .highlight-box {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 60px;
      gap: 20px;
    }

    .highlight-item {
      background: #0056b3;
      color: #fff;
      flex: 1;
      padding: 25px;
      border-radius: 10px;
      text-align: center;
      min-width: 250px;
      max-width: 350px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
    }

    .highlight-item h4 {
      font-size: 22px;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .highlight-item p {
      font-size: 18px;
      line-height: 1.6;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
      .faq-image-top img {
        max-height: 250px;
      }

      h1 {
        font-size: 32px;
      }

      .faq-item h3 {
        font-size: 20px;
      }

      .faq-intro p,
      .faq-item p,
      .faq-item ul li {
        font-size: 16px;
      }

      .highlight-box {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>

<div class="container">

  <!-- Top Image -->
  <div class="faq-image-top">
    <img src="assets/SubUsed/group-discussion.jpg" alt="Team Discussion">
  </div>

  <h1>Frequently Asked Questions</h1>

  <div class="faq-intro">
    <p>
      Tubers TV is a "Unique" Television Channel designed to help Content Creators and YouTubers gain reach, visibility, and subscribers.  
      Here are some frequently asked questions to guide you. Still curious? Contact us anytime!
    </p>
  </div>

  <!-- FAQ Section -->
  <div class="faq-section">

    <div class="faq-item">
      <h3>How can Tubers TV Channel help you?</h3>
      <p>
        Tubers TV is uniquely designed to boost your reach, visibility, and subscriber count through television exposure.
      </p>
    </div>

    <div class="faq-item">
      <h3>Who is the promoter of Tubers TV?</h3>
      <p>
        Tubers TV is promoted by SITI Networks Limited, India's largest Multi-System Operator (MSO) with over 11.3 million digital customers.
      </p>
    </div>

    <div class="faq-item">
      <h3>What is my benefit as a YouTuber?</h3>
      <ul>
        <li>Get your name and social media handles on SITI Cable Channel.</li>
        <li>Video links added to descriptions for better traffic.</li>
        <li>Hashtags using your channel name for more exposure.</li>
      </ul>
    </div>

    <div class="faq-item">
      <h3>Which type of content is allowed?</h3>
      <p>
        All content types are welcome, except communal, political, or adult material. Content must be original and copyright-owned.
      </p>
    </div>

    <div class="faq-item">
      <h3>How many videos are required per month?</h3>
      <p>
        You can submit 4, 8, 12, or 16 videos monthly. Contract YouTubers must create at least one exclusive TV-only video.
      </p>
    </div>

    <div class="faq-item">
      <h3>Preferred content language?</h3>
      <p>Bengali and/or Hindi are preferred.</p>
    </div>

    <div class="faq-item">
      <h3>How to join Tubers TV?</h3>
      <p>
        Simply provide your KYC/ID documents and sign a basic contract to join.
      </p>
    </div>

    <div class="faq-item">
      <h3>Is there a joining fee?</h3>
      <p>No, joining Tubers TV is absolutely free.</p>
    </div>

    <div class="faq-item">
      <h3>How will Tubers TV promote my content?</h3>
      <ul>
        <li>Television broadcast</li>
        <li>Instagram, Facebook, YouTube promotions</li>
        <li>Official Tubers TV social media support</li>
        <li>Offline hoardings and banners</li>
      </ul>
    </div>

  </div>

  <!-- Contact Note -->
  <div class="contact-note">
    <p>
      Still have questions? <br>
      <a href="https://wa.me/919051433311" target="_blank">WhatsApp us</a> or email: 
      <a href="mailto:tubers.channels@icncl.com">tubers.channels@icncl.com</a>.
    </p>
  </div>

  <!-- Highlights -->
  <div class="highlight-box">
    <div class="highlight-item">
      <h4>Boost Your Channel</h4>
      <p>Get TV exposure and grow your subscriber base faster.</p>
    </div>
    <div class="highlight-item">
      <h4>Absolutely Free</h4>
      <p>No joining fee! Focus on your creativity, we promote you.</p>
    </div>
    <div class="highlight-item">
      <h4>Community Growth</h4>
      <p>Join India's fastest-growing creator community.</p>
    </div>
  </div>

</div>

<!-- Include Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
