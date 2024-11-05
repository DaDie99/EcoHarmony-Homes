<div class="text-center">
    <h2 class="mb-3"><?= esc($title) ?: 'Title not available' ?></h2>
    <p><strong>Price:</strong> $<?= isset($price) ? number_format($price, 2) : 'N/A' ?></p>
    <p><strong>Description:</strong> <?= esc($description) ?: 'No description available' ?></p>

    <!-- Carousel for Supplier Images -->
    <div id="carouselSupplierImages" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($images)): ?>
                <?php foreach ($images as $index => $image): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <img src="<?= base_url('uploads/services/' . $image) ?>" class="d-block w-100 rounded" alt="<?= esc($title) ?>" onerror="this.src='<?= base_url('uploads/services/default.jpg') ?>'">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="carousel-item active">
                    <img src="<?= base_url('uploads/services/default.jpg') ?>" class="d-block w-100 rounded" alt="Default Image">
                </div>
            <?php endif; ?>
        </div>

        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSupplierImages" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSupplierImages" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
