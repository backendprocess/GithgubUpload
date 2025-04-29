<!-- Video Section -->
<section id="video-section">
  <video id="introVideo" autoplay loop playsinline controls preload="auto">
    <source src="assets/videos/intro.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>

<style>
  #video-section {
    text-align: center;
    background-color: #000;
    padding: 20px;
  }

  #video-section video {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  }

  @media (max-width: 768px) {
    #video-section video {
      max-height: 350px;
    }
  }

  @media (max-width: 480px) {
    #video-section video {
      max-height: 250px;
    }
  }
</style>

<script>
  // Some browsers block autoplay with sound
  document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('introVideo');

    video.play().catch(error => {
      // If autoplay with sound fails, show controls to user
      console.log('Autoplay with sound failed:', error);
      video.muted = true;
      video.play();
    });
  });
</script>
