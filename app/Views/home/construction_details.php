<div class="text-center">
    <h3><?= esc($service['title']) ?></h3>
    <p><strong>Price:</strong><?= number_format($service['price'], 2) ?></p>
    <p><strong>Contact Number:</strong> <?= esc($service['contact_number']) ?></p>
    <p><strong>Description:</strong> <?= esc($service['description']) ?></p>
    <a href="home/booknow" class="btn btn-info" role="button">Book Now</a>

    <!-- Image Carousel -->
    <?php $images = json_decode($service['images'], true); ?>
    <div id="carouselServiceImages" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($images)): ?>
                <?php foreach ($images as $index => $image): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <img src="<?= base_url('uploads/services/' . $image) ?>" class="d-block w-100 rounded" alt="<?= esc($service['title']) ?>" loading="lazy" onerror="this.src='<?= base_url('uploads/services/default.jpg') ?>'">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="carousel-item active">
                    <img src="<?= base_url('uploads/services/default.jpg') ?>" class="d-block w-100 rounded" alt="Default Image" loading="lazy">
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselServiceImages" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselServiceImages" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
