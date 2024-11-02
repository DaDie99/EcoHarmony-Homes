<!-- project_details.php -->
<h3><?= esc($project['title']) ?></h3>
<p><strong>Description:</strong> <?= esc($project['description']) ?></p>
<p><strong>Location:</strong> <?= esc($project['location']) ?></p>
<p><strong>Price:</strong> $<?= number_format($project['price'], 2) ?></p>

<?php
// Decode images if stored as JSON
$images = json_decode($project['images'], true);
?>
<div id="carousel<?= $project['id'] ?>" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php if (!empty($images)): ?>
            <?php foreach ($images as $index => $image): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img src="<?= base_url('uploads/projects/' . $image) ?>" alt="<?= esc($project['title']) ?>" class="d-block w-100" onerror="this.style.display='none'">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="carousel-item active">
                <img src="<?= base_url('uploads/projects/default.jpg') ?>" alt="Default Image" class="d-block w-100">
            </div>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $project['id'] ?>" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $project['id'] ?>" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>