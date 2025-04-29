<?php
// Include the header
include 'header.php';
?>

<div class="container">
  <div class="header">
    <h1 class="page-title">Tubers TV on YouTube</h1>
    <p class="page-description">
      Explore our latest videos, playlists, and exclusive content!
    </p>
  </div>

  <!-- Featured Video -->
  <div class="featured-video" id="featuredVideo">
    <!-- Featured video will load here -->
  </div>

  <!-- Video Grid -->
  <div class="video-grid" id="videoGrid">
    <!-- Videos will be loaded dynamically -->
  </div>

  <!-- Pagination -->
  <div class="pagination" id="pagination">
    <span id="pageInfo" class="page-info">1/156</span>
    <button id="prevButton" class="pagination-button">Previous</button>
    <button id="nextButton" class="pagination-button">Next</button>
  </div>
</div>

<script>
  const API_KEY = 'AIzaSyBfwcTEAu6KTUDABLMFglRkfTkA_OyAkoE'; // Your YouTube API Key
  const CHANNEL_ID = 'UCqNL_jUVIaSPhB9-1ZbFLGA'; // Your YouTube Channel ID
  const featuredVideoDiv = document.getElementById('featuredVideo');
  const videoGrid = document.getElementById('videoGrid');
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');
  const pageInfo = document.getElementById('pageInfo');
  let nextPageToken = '';
  let prevPageToken = '';
  let currentPage = 1;
  const totalPages = 156; // Replace with the total number of pages if available

  async function fetchVideos(pageToken = '') {
    try {
      const response = await fetch(`https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet,id&order=date&maxResults=8&pageToken=${pageToken}`);
      if (!response.ok) {
        throw new Error(`HTTP Error: ${response.status}`);
      }
      const data = await response.json();

      if (!pageToken) {
        featuredVideoDiv.innerHTML = '';
        videoGrid.innerHTML = '';
      }

      if (!pageToken) {
        const featuredVideo = data.items[0];
        if (featuredVideo.id.kind === "youtube#video") {
          featuredVideoDiv.innerHTML = `
            <iframe
              src="https://www.youtube.com/embed/${featuredVideo.id.videoId}"
              allowfullscreen
              class="featured-video-frame">
            </iframe>
            <h2 class="featured-video-title">${featuredVideo.snippet.title}</h2>
          `;
        }
      }

      data.items.slice(1).forEach(video => {
        if (video.id.kind === "youtube#video") {
          const videoElement = document.createElement('div');
          videoElement.classList.add('video-item');
          videoElement.innerHTML = `
            <iframe
              src="https://www.youtube.com/embed/${video.id.videoId}"
              allowfullscreen
              class="video-frame">
            </iframe>
            <h3 class="video-title">${video.snippet.title}</h3>
          `;
          videoGrid.appendChild(videoElement);
        }
      });

      nextPageToken = data.nextPageToken || '';
      prevPageToken = data.prevPageToken || '';
      updatePagination();
    } catch (error) {
      console.error('Error fetching videos:', error);
    }
  }

  function updatePagination() {
    pageInfo.textContent = `${currentPage}/${totalPages}`;
    prevButton.style.display = currentPage > 1 ? 'inline-block' : 'none';
    nextButton.style.display = nextPageToken ? 'inline-block' : 'none';
  }

  prevButton.addEventListener('click', () => {
    if (prevPageToken) {
      currentPage--;
      fetchVideos(prevPageToken);
    }
  });

  nextButton.addEventListener('click', () => {
    if (nextPageToken) {
      currentPage++;
      fetchVideos(nextPageToken);
    }
  });

  fetchVideos();
</script>

<!-- Include the footer -->
<?php include 'footer.php'; ?>

<!-- Styles -->
<style>
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 100px 20px 20px 20px; /* Top padding for header fix */
  }

  .page-title {
    font-size: 36px;
    color: #2c3e50;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-bottom: 20px;
  }

  .page-description {
    font-size: 18px;
    color: #555;
    text-align: center;
    margin-bottom: 40px;
  }

  .featured-video-frame {
    width: 100%;
    height: 500px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  }

  .featured-video-title {
    margin-top: 15px;
    text-align: center;
    color: #2c3e50;
    font-size: 24px;
    font-weight: bold;
  }

  .video-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 10px;
  }

  .video-item {
    text-align: center;
  }

  .video-frame {
    width: 100%;
    height: 200px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .video-title {
    margin-top: 10px;
    text-align: center;
    color: #555;
    font-size: 16px;
    font-weight: bold;
  }

  .pagination {
    text-align: center;
    margin-top: 30px;
  }

  .page-info {
    font-size: 18px;
    color: #2c3e50;
    margin-right: 15px;
    font-weight: 600;
  }

  .pagination-button {
    padding: 10px 25px;
    font-size: 16px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: none;
    transition: background-color 0.3s;
  }

  .pagination-button:hover {
    background-color: #2874a6;
  }

  /* Mobile responsive adjustments */
  @media (max-width: 768px) {
    .featured-video-frame {
      height: 300px;
    }
    .video-frame {
      height: 180px;
    }
    .page-title {
      font-size: 28px;
    }
    .page-description {
      font-size: 16px;
    }
  }

  @media (max-width: 480px) {
    .featured-video-frame {
      height: 220px;
    }
    .video-frame {
      height: 150px;
    }
    .page-title {
      font-size: 24px;
    }
    .page-description {
      font-size: 14px;
    }
  }
</style>
<?php
// Include the header
include 'header.php';
?>

<div class="container">
  <div class="header">
    <h1 class="page-title">Tubers TV on YouTube</h1>
    <p class="page-description">
      Explore our latest videos, playlists, and exclusive content!
    </p>
  </div>

  <!-- Featured Video -->
  <div class="featured-video" id="featuredVideo">
    <!-- Featured video will load here -->
  </div>

  <!-- Video Grid -->
  <div class="video-grid" id="videoGrid">
    <!-- Videos will be loaded dynamically -->
  </div>

  <!-- Pagination -->
  <div class="pagination" id="pagination">
    <span id="pageInfo" class="page-info">1/156</span>
    <button id="prevButton" class="pagination-button">Previous</button>
    <button id="nextButton" class="pagination-button">Next</button>
  </div>
</div>

<script>
  const API_KEY = 'AIzaSyBfwcTEAu6KTUDABLMFglRkfTkA_OyAkoE'; // Your YouTube API Key
  const CHANNEL_ID = 'UCqNL_jUVIaSPhB9-1ZbFLGA'; // Your YouTube Channel ID
  const featuredVideoDiv = document.getElementById('featuredVideo');
  const videoGrid = document.getElementById('videoGrid');
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');
  const pageInfo = document.getElementById('pageInfo');
  let nextPageToken = '';
  let prevPageToken = '';
  let currentPage = 1;
  const totalPages = 156; // Replace with the total number of pages if available

  async function fetchVideos(pageToken = '') {
    try {
      const response = await fetch(`https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet,id&order=date&maxResults=8&pageToken=${pageToken}`);
      if (!response.ok) {
        throw new Error(`HTTP Error: ${response.status}`);
      }
      const data = await response.json();

      if (!pageToken) {
        featuredVideoDiv.innerHTML = '';
        videoGrid.innerHTML = '';
      }

      if (!pageToken) {
        const featuredVideo = data.items[0];
        if (featuredVideo.id.kind === "youtube#video") {
          featuredVideoDiv.innerHTML = `
            <iframe
              src="https://www.youtube.com/embed/${featuredVideo.id.videoId}"
              allowfullscreen
              class="featured-video-frame">
            </iframe>
            <h2 class="featured-video-title">${featuredVideo.snippet.title}</h2>
          `;
        }
      }

      data.items.slice(1).forEach(video => {
        if (video.id.kind === "youtube#video") {
          const videoElement = document.createElement('div');
          videoElement.classList.add('video-item');
          videoElement.innerHTML = `
            <iframe
              src="https://www.youtube.com/embed/${video.id.videoId}"
              allowfullscreen
              class="video-frame">
            </iframe>
            <h3 class="video-title">${video.snippet.title}</h3>
          `;
          videoGrid.appendChild(videoElement);
        }
      });

      nextPageToken = data.nextPageToken || '';
      prevPageToken = data.prevPageToken || '';
      updatePagination();
    } catch (error) {
      console.error('Error fetching videos:', error);
    }
  }

  function updatePagination() {
    pageInfo.textContent = `${currentPage}/${totalPages}`;
    prevButton.style.display = currentPage > 1 ? 'inline-block' : 'none';
    nextButton.style.display = nextPageToken ? 'inline-block' : 'none';
  }

  prevButton.addEventListener('click', () => {
    if (prevPageToken) {
      currentPage--;
      fetchVideos(prevPageToken);
    }
  });

  nextButton.addEventListener('click', () => {
    if (nextPageToken) {
      currentPage++;
      fetchVideos(nextPageToken);
    }
  });

  fetchVideos();
</script>

<!-- Include the footer -->
<?php include 'footer.php'; ?>

<!-- Styles -->
<style>
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 100px 20px 20px 20px; /* Top padding for header fix */
  }

  .page-title {
    font-size: 36px;
    color: #2c3e50;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-bottom: 20px;
  }

  .page-description {
    font-size: 18px;
    color: #555;
    text-align: center;
    margin-bottom: 40px;
  }

  .featured-video-frame {
    width: 100%;
    height: 500px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  }

  .featured-video-title {
    margin-top: 15px;
    text-align: center;
    color: #2c3e50;
    font-size: 24px;
    font-weight: bold;
  }

  .video-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 10px;
  }

  .video-item {
    text-align: center;
  }

  .video-frame {
    width: 100%;
    height: 200px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .video-title {
    margin-top: 10px;
    text-align: center;
    color: #555;
    font-size: 16px;
    font-weight: bold;
  }

  .pagination {
    text-align: center;
    margin-top: 30px;
  }

  .page-info {
    font-size: 18px;
    color: #2c3e50;
    margin-right: 15px;
    font-weight: 600;
  }

  .pagination-button {
    padding: 10px 25px;
    font-size: 16px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: none;
    transition: background-color 0.3s;
  }

  .pagination-button:hover {
    background-color: #2874a6;
  }

  /* Mobile responsive adjustments */
  @media (max-width: 768px) {
    .featured-video-frame {
      height: 300px;
    }
    .video-frame {
      height: 180px;
    }
    .page-title {
      font-size: 28px;
    }
    .page-description {
      font-size: 16px;
    }
  }

  @media (max-width: 480px) {
    .featured-video-frame {
      height: 220px;
    }
    .video-frame {
      height: 150px;
    }
    .page-title {
      font-size: 24px;
    }
    .page-description {
      font-size: 14px;
    }
  }
</style>
