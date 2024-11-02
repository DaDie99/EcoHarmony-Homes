<?= $this->include('partials/navbar') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= base_url() ?>/">
    <meta charset="UTF-8">
    <title>Dream Homes Services - EcoHarmony Homes</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Header Section -->
    <div class="bg-image">
        <div class="overlay">
            <h1 class="display-4 text-white">Find Your Dream Home</h1>
            <p class="lead">Explore our range of dream homes tailored to your desires.</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="container mt-5">
        <form class="filter-form">
            <label for="sortBy">Sort By:</label>
            <select id="sortBy" name="sortBy" onchange="applyFilter()">
                <option value="rating">Rating: High to Low</option>
                <option value="price_high">Price: High to Low</option>
                <option value="price_low">Price: Low to High</option>
            </select>
            <button type="button" class="btn btn-primary" onclick="applyFilter()">Apply Filter</button>
        </form>
    </div>

    <!-- Dream Homes Service List Section -->
    <div class="container mt-4">
        <div class="row">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $service): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <?php
                            // Decode images if stored as JSON
                            $images = json_decode($service['images'], true);
                            ?>
                            <div id="carousel<?= $service['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if (!empty($images)): ?>
                                        <?php foreach ($images as $index => $image): ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <img src="<?= base_url('uploads/services/' . $image) ?>" alt="<?= esc($service['title']) ?>" class="d-block w-100" onerror="this.style.display='none'">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('uploads/services/default.jpg') ?>" alt="Default Image" class="d-block w-100">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $service['id'] ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $service['id'] ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($service['title']) ?></h5>
                                <p class="price">$<?= number_format($service['price'], 2) ?></p>
                                <p><i class="fa fa-star text-warning"></i> <?= esc($service['rating']) ?> / 5</p>
                                <p><?= esc($service['description']) ?></p>
                                <a href="<?= site_url('service/' . $service['id']) ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No dream homes found. Please adjust your filters.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!--footer starts -->
    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- EcoHarmony Homes Description -->
                <div class="col-md-4">
                    <h5 class="text-orange">ECOHARMONY HOMES</h5>
                    <p>Creating sustainable, eco-friendly homes with a modern touch. Our mission is to lead the way in environmentally responsible construction and innovative home solutions.</p>
                    <div>
                        <a href="#" class="text-light me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <h5 class="text-orange">QUICK LINKS</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= site_url('about') ?>" class="text-light">About Us</a></li>
                        <li><a href="<?= site_url('projects') ?>" class="text-light">Projects</a></li>
                        <li><a href="<?= site_url('services') ?>" class="text-light">Services</a></li>
                        <li><a href="<?= site_url('contact') ?>" class="text-light">Contact</a></li>
                    </ul>
                </div>

                <!-- Login/Register Section -->
                <div class="col-md-4">
                    <h5 class="text-orange">STAY CONNECTED</h5>
                    <p>Connect with Our website for the latest updates on our services ,projects and sustainable building tips.</p>
                    <div class="mt-3">
                        <a href="<?= site_url('login') ?>" class="btn btn-outline-light me-2">Login</a>
                        <a href="<?= site_url('register') ?>" class="btn btn-outline-light">Register</a>
                    </div>
                </div>
            </div>
            <hr />
            <!-- Copyright Notice -->
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; <span id="currentYear"></span> EcoHarmony Homes. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer End-->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script for Filtering Logic -->
    <script>
        function applyFilter() {
            const sortBy = document.getElementById('sortBy').value;
            window.location.href = `<?= site_url('dream-homes?sortBy=') ?>` + sortBy;
        }
    </script>

</body>

</html>