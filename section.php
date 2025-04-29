<!-- Hero Section -->
<section class="hero">
  <img src="assets/SubUsed/Tubers-home-scaled.jpg" alt="Hero Image showcasing Tubers TV" class="hero-image" />
</section>

<!-- Recognition Callout Section -->
<section class="recognition-callout">
  <div class="image-container">
    <img src="assets/images/mobile-hand.jpg" alt="A phone in hand with content displayed" class="recognition-image" />
  </div>
  <div class="text-container">
    <div class="callout-badge">AN HONEST QUESTION</div>
    <h2>Is your content getting its due recognition?</h2>
    <p>
      After you put in your 100% and more, is your content getting enough viewers? Are enough people watching it on YouTube?
    </p>
    <a href="https://wa.me/919051433311" target="_blank" class="chat-now" aria-label="Chat with us on WhatsApp">
      💬 LET US HELP YOU – CHAT NOW!
    </a>
  </div>
</section>

<!-- Content Creator of the Month Section -->
<?php include 'content_creator.php'; ?>

<?php
// Include the Video Section
include 'video.php';

// Include the Testimonials Section
include 'testimonials.php';
?>

<!-- Styles -->
<style>
  /* General Section Styling */
  section {
    margin: 0;
    padding: 0;
  }

  /* Hero Section */
  .hero {
    width: 100%;
    overflow: hidden;
    position: relative;
  }

  .hero .hero-image {
    width: 100%;
    max-width: 1920px;
    height: auto;
    display: block;
    margin: 0 auto;
    object-fit: contain;
  }

  /* Recognition Callout Section */
  .recognition-callout {
    background-color: #f4f4f4;
    color: #111;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 50px 20px;
    gap: 20px;
  }

  .recognition-callout .image-container {
    flex: 1;
    min-width: 300px;
    max-width: 500px;
    text-align: center;
  }

  .recognition-callout .recognition-image {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    object-fit: contain;
  }

  .recognition-callout .text-container {
    flex: 1;
    min-width: 300px;
    max-width: 600px;
    padding: 20px;
  }

  .callout-badge {
    background-color: #ff5f5f;
    color: #fff;
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
    display: inline-block;
  }

  .recognition-callout h2 {
    font-size: 28px;
    margin-bottom: 15px;
    line-height: 1.4;
  }

  .recognition-callout p {
    font-size: 16px;
    color: #333;
    margin-bottom: 25px;
    line-height: 1.6;
  }

  .chat-now {
    display: inline-block;
    background-color: #25d366;
    color: #fff;
    padding: 12px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
    text-align: center;
  }

  .chat-now:hover {
    background-color: #1da851;
    transform: translateY(-3px);
  }

  /* Responsive Design for Recognition Callout */
  @media (max-width: 768px) {
    .recognition-callout {
      flex-direction: column;
      padding: 40px 15px;
    }

    .recognition-callout h2 {
      font-size: 24px;
    }

    .recognition-callout p {
      font-size: 14px;
    }

    .chat-now {
      padding: 10px 16px;
      font-size: 14px;
    }
  }

  @media (max-width: 480px) {
    .recognition-callout {
      padding: 30px 10px;
    }

    .recognition-callout h2 {
      font-size: 20px;
    }

    .recognition-callout p {
      font-size: 12px;
    }

    .chat-now {
      padding: 8px 12px;
      font-size: 12px;
    }
  }
</style>

<!-- Dynamic Header Height Adjuster Script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header'); // Adjust selector if needed
    const hero = document.querySelector('.hero');

    if (header && hero) {
      const updateHeroPadding = () => {
        const headerHeight = header.offsetHeight;
        hero.style.marginTop = headerHeight + 'px';
      };

      updateHeroPadding();
      window.addEventListener('resize', updateHeroPadding); // Recalculate on window resize
    }
  });
</script>
