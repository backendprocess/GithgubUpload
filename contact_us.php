<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>

  <style>
    /* Reset and basic styles */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #1a1a1a;
      color: #fff;
    }

    /* Page structure */
    .contact-page {
      min-height: calc(100vh - 120px); /* Adjust if footer is taller */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 40px 20px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      background-color: #2b2b2b;
      border-radius: 8px;
      padding: 30px 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
      font-size: 2.4rem;
      text-align: center;
      margin-bottom: 10px;
    }

    p {
      text-align: center;
      font-size: 1rem;
      color: #d3d3d3;
      margin-bottom: 20px;
    }

    /* Form styles */
    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .form-group {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .form-group.full-width {
      flex-basis: 100%;
    }

    label {
      font-size: 1rem;
      margin-bottom: 8px;
      color: #ccc;
    }

    input, select, textarea {
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #444;
      border-radius: 5px;
      background-color: #3a3a3a;
      color: #fff;
    }

    input:focus, select:focus, textarea:focus {
      outline: none;
      border-color: #007BFF;
    }

    textarea {
      resize: none;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .btn-submit, .btn-reset {
      padding: 10px 20px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-submit {
      background-color: #007BFF;
      color: #fff;
    }

    .btn-submit:hover {
      background-color: #0056b3;
    }

    .btn-reset {
      background-color: #444;
      color: #fff;
    }

    .btn-reset:hover {
      background-color: #666;
    }

    /* Contact Info */
    .contact-info {
      margin-top: 30px;
      background-color: #3a3a3a;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
      line-height: 1.8;
    }

    .contact-info a {
      color: #007BFF;
      text-decoration: none;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    /* Response message */
    .response-message {
      margin-top: 20px;
      text-align: center;
      font-size: 1rem;
      padding: 10px;
      border-radius: 5px;
      display: none;
    }

    .response-message.success {
      background-color: #28a745;
      color: white;
    }

    .response-message.error {
      background-color: #dc3545;
      color: white;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
      }
      .buttons {
        flex-direction: column;
        gap: 10px;
      }
      .contact-info {
        font-size: 0.9rem;
      }
    }

    @media (max-width: 480px) {
      .form-row {
        flex-direction: column;
      }
      .contact-info {
        font-size: 0.8rem;
      }
    }
  </style>
</head>

<body>

<div class="contact-page">
  <div class="container">
    <h1>Contact Us</h1>
    <p>Please fill out the form below to reach us for assistance or feedback.</p>

    <form id="contactForm" class="contact-form">
      <!-- Country and Mobile Number -->
      <div class="form-row">
        <div class="form-group">
          <label for="country">Select your country</label>
          <select id="country" name="country" required>
            <option value="">--Select--</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Australia">Australia</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="mobile">Mobile Number</label>
          <input type="tel" id="mobile" name="mobile" placeholder="+91" required>
        </div>
      </div>

      <!-- Email -->
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email ID</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
      </div>

      <!-- Details -->
      <div class="form-row">
        <div class="form-group full-width">
          <label for="details">Detail Your Feedback/Issue</label>
          <textarea id="details" name="details" rows="5" placeholder="Describe your issue or feedback" required></textarea>
        </div>
      </div>

      <!-- Buttons -->
      <div class="form-row buttons">
        <button type="submit" class="btn-submit">Submit</button>
        <button type="reset" class="btn-reset">Reset</button>
      </div>
    </form>

    <!-- Message will appear here -->
    <div id="responseMessage" class="response-message"></div>

    <!-- Contact Information -->
    <div class="contact-info">
      <p><strong>Contact Person:</strong> Indrani Mukherjee</p>
      <p><strong>Company:</strong> Siti Networks</p>
      <p><strong>Department:</strong> Tubers TV Department</p>
      <p><strong>Address:</strong> Street Number 26, EP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091, 14th Floor</p>
      <p><strong>Phone:</strong> <a href="tel:9051433311">9051433311</a></p>
      <p><strong>Email:</strong> <a href="mailto:tubers.channels@icncl.com">tubers.channels@icncl.com</a></p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- AJAX Submit Script -->
<script>
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const responseDiv = document.getElementById('responseMessage');

    fetch('send_contact_form.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(result => {
      if (result.includes('successfully')) {
        responseDiv.className = 'response-message success';
      } else {
        responseDiv.className = 'response-message error';
      }
      responseDiv.textContent = result;
      responseDiv.style.display = 'block';
      form.reset(); // Reset form if needed
    })
    .catch(error => {
      responseDiv.className = 'response-message error';
      responseDiv.textContent = 'An error occurred while sending the message.';
      responseDiv.style.display = 'block';
      console.error('Error:', error);
    });
  });
</script>

</body>
</html>
