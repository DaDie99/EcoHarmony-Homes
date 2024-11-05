<style>
    /* Styling for the modal content */
    .modal-content {
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Image styling for carousel */
    .carousel-item img {
        max-height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Property details styling */
    .property-card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
    }

    .property-card h3 {
        font-size: 1.25rem;
        margin: 10px 0;
    }

    .property-card .price {
        font-size: 1.1rem;
        color: #28a745;
    }

    .property-card .carousel-inner {
        border-radius: 8px;
    }

    /* Responsive adjustments */
    .modal-body {
        padding: 20px;
    }

    .carousel-indicators button {
        background-color: #28a745;
    }
</style>

<div class="text-center">
    <h2 class="mb-3"><?= esc($title) ?: 'Title not available' ?></h2>
    <p><strong>Price:</strong> <?= isset($price) ? number_format($price, 2) : 'N/A' ?></p>
    <p><strong>Contact Number:</strong> <?= esc($contact_number) ? : 'N/A' ?></p>
    <p><strong>Description:</strong> <?= esc($description) ?: 'No description available' ?></p>

    <!-- Carousel for Property Images with styling -->
    <div id="carouselPropertyImages" class="carousel slide mt-4" data-bs-ride="carousel">
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

        <!-- Carousel controls and indicators -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPropertyImages" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPropertyImages" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Optional indicators for better navigation in the carousel -->
    <div class="carousel-indicators mt-3">
        <?php if (!empty($images)): ?>
            <?php foreach ($images as $index => $image): ?>
                <button type="button" data-bs-target="#carouselPropertyImages" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $index + 1 ?>"></button>
            <?php endforeach; ?>
        <?php else: ?>
            <button type="button" data-bs-target="#carouselPropertyImages" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Default Image"></button>
        <?php endif; ?>
    </div>
</div>
