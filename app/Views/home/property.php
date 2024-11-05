<?= $this->include('partials/navbar') ?>

<head>
    <base href="<?= base_url() ?>/">
    <meta charset="UTF-8">
    <title>Projects - EcoHarmony Homes</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="assets/libs/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/libs/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="assets/libs/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .h1
        {
            font-size: 50px;
            text-align: center;
            margin-bottom: 50px;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <div class="bg-image">
        <div class="overlay">
            <h1 class="display-4 text-white">Find Your Dream Property</h1>
            <p class="lead">Explore our top-rated properties and find the one that suits your needs.</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="container mt-5">
        <form class="filter-form">
            <label for="sortBy">Sort By:</label>
            <select id="sortBy" name="sortBy" onchange="applyFilter()">
                <option value="price_high">Price: High to Low</option>
                <option value="price_low">Price: Low to High</option>
            </select>
            <button type="button" class="btn btn-primary" onclick="applyFilter()">Apply Filter</button>
        </form>
    </div>

    <!-- Property List Section -->
    <div class="container properties-list">
        <?php if (!empty($properties)): ?>
            <?php foreach ($properties as $property): ?>
                <div class="property-card">
                    <?php
                    // Decode images if stored as JSON
                    $images = json_decode($property['images'], true);
                    ?>

                    <!-- Bootstrap Carousel for Images -->
                    <div id="carousel<?= $property['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php if (!empty($images)): ?>
                                <?php foreach ($images as $index => $image): ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                        <img src="<?= base_url('uploads/services/' . $image) ?>" alt="<?= esc($property['title']) ?>" class="d-block w-100" onerror="this.style.display='none'">
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="carousel-item active">
                                    <img src="<?= base_url('uploads/services/default.jpg') ?>" alt="Default Image" class="d-block w-100"> <!-- Fallback image -->
                                </div>
                            <?php endif; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $property['id'] ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $property['id'] ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <h3><?= esc($property['title']) ?></h3>
                    <p>Rs: <?= esc($property['price'])?></p>
                    <p>Details:<?= esc($property['description']) ?></p>
                    <a href="javascript:void(0)" class="btn btn-primary view-details" data-id="<?= $property['id'] ?>">View Details</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No properties found. Please adjust your filters.</p>
        <?php endif; ?>
    </div>

    <!-- Property Details Modal -->
    <div class="modal fade" id="propertyDetailsModal" tabindex="-1" aria-labelledby="propertyDetailsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="propertyDetailsLabel">Service Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="propertyDetailsContent">
                    <!-- Content will be loaded here via AJAX -->
                    <div class="text-center my-4">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
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
            window.location.href = `<?= site_url('property?sortBy=') ?>` + sortBy;
        }
    </script>

    <!-- AJAX Script for View Details Button -->
    <script>
        $(document).ready(function() {
            $('.view-details').on('click', function() {
                var propertyId = $(this).data('id');

                $('#propertyDetailsContent').html('<div class="text-center my-4"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');

                $.ajax({
                    url: '<?= site_url('property/showProperty/') ?>' + propertyId,
                    method: 'GET',
                    success: function(response) {
                        console.log("Response from server:", response); // Check the response from the server
                        $('#propertyDetailsContent').html(response);
                        $('#propertyDetailsModal').modal('show'); // Open the modal
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        console.log("Status:", status);
                        console.log("Response Text:", xhr.responseText);
                        $('#propertyDetailsContent').html('<div class="alert alert-danger text-center">Error loading property details.</div>');
                    }
                });
            });
        });
    </script>

</body>

</html>