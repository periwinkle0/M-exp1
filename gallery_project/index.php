<?php
include 'includes/header.php';
include 'includes/data.php';
?>

<h1>Image Gallery</h1>

<style>
    h1 {
        text-align: center;
        color: white;
    }
    body {
        background: linear-gradient(to right, #33123b,rgb(128, 22, 126));
    }
    .gallery-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        padding: 20px;
    }
    .gallery-item:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
        box-shadow: -5px 0 15px rgb(179, 11, 11);
    }
    .gallery-item {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        background: #fff;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }
    .gallery-item img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
    @media (max-width: 1024px) {
        .gallery-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media (max-width: 768px) {
        .gallery-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 480px) {
        .gallery-container {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>

<div class="gallery-container">
    <?php foreach ($images as $image): ?>
        <div class="gallery-item">
            <img src="images/<?php echo $image['file']; ?>" alt="<?php echo $image['title']; ?>">
            <p><strong><?php echo $image['title']; ?></strong></p>
            <p><?php echo isset($image['description']) ? $image['description'] : 'No description available'; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
