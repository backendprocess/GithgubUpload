<?php
// Content Creator of the Month data
$content_creators = [
    [
        "month" => "May 2025",
        "name" => "Sreetama Paul",
        "channel_name" => "Bong Passionate Traveller",
        "success_story" => "Sreetama's channel 'Bong Passionate Traveller' inspired thousands with her unique travel vlogs and storytelling, reaching over 50k subscribers in May 2025.",
        "image" => "assets/contentcreator/Sreetama.jpg" // Image path
    ],
];
?>

<div class="content-creator-section">
    <h2>Content Creator of the Month</h2>
    <?php foreach ($content_creators as $creator): ?>
    <div class="creator-box">
        <div class="creator-image">
            <img src="<?php echo $creator['image']; ?>" alt="<?php echo $creator['name']; ?>">
        </div>
        <div class="creator-details">
            <h3><?php echo $creator['month']; ?>: <?php echo $creator['name']; ?></h3>
            <h4>Channel: <?php echo $creator['channel_name']; ?></h4>
            <p><?php echo $creator['success_story']; ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<style>
    .content-creator-section {
        background: linear-gradient(to bottom, #fff, #f3f3f3);
        padding: 60px 20px;
        text-align: center;
    }

    .content-creator-section h2 {
        font-size: 2.5rem;
        color: #ff0000;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .creator-box {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin: 20px auto;
        max-width: 900px;
        text-align: left;
    }

    .creator-image {
        flex: 1 1 300px;
        margin-right: 20px;
    }

    .creator-image img {
        width: 100%;
        max-width: 300px;
        height: auto;
        object-fit: cover;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        border: 5px solid #ff0000;
    }

    .creator-details {
        flex: 2 1 500px;
    }

    .creator-details h3 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .creator-details h4 {
        font-size: 1.5rem;
        color: #666;
        margin-bottom: 15px;
    }

    .creator-details p {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .creator-box {
            flex-direction: column;
            text-align: center;
        }

        .creator-image {
            margin-right: 0;
            margin-bottom: 20px;
        }

        .creator-details {
            text-align: center;
        }
    }
</style>