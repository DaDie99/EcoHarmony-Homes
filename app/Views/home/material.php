<?= $this->include('partials/navbar') ?>

<head>
    <base href="<?= base_url() ?>/">


    <meta charset="UTF-8">
    <title>Projects - EcoHarmony Homes</title>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="assets/libs/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/libs/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="assets/libs/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets\css\style.css" rel="stylesheet">

    <style>
        /* Additional styling to match your site's theme */
        .page-header {
            background: linear-gradient(rgba(4, 15, 40, .7), rgba(4, 15, 40, .7)), url('img/materials-bg.jpg') center center no-repeat;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .section-title {
            margin-bottom: 40px;
        }

        .material-listing img {
            border-radius: 8px;
        }

        .material-item {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="display-4">High-Quality Building Materials</h1>
        <p>Reliable Materials for Every Project</p>
    </div>

    <!-- Material Supplier Information Section -->
    <section class="container py-5">
        <div class="section-title text-center">
            <h2 class="text-uppercase">Our Material Supplier Services</h2>
            <p>We ensure that only the best materials are used for your building needs.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <p>EcoHarmony Homes is committed to providing top-quality construction materials. Our material supplier service offers a wide range of products to meet the needs of various projects, including residential, commercial, and industrial buildings.</p>
                <p>From sustainable wood to high-grade steel, we source our materials from reputable suppliers to guarantee reliability, durability, and eco-friendliness. With us, you get competitive pricing, timely delivery, and exceptional customer service.</p>
            </div>
            <div class="col-lg-6">
                <img src="img/material-supply.jpg" alt="Material Supplier" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Material Listings Section -->
    <section class="container py-5">
        <div class="section-title text-center">
            <h3 class="text-uppercase">Our Materials</h3>
            <p>Explore our range of materials suitable for all types of construction projects.</p>
        </div>

        <div class="row">
            <!-- Material 1 -->
            <div class="col-lg-4 col-md-6 material-item">
                <div class="card h-100 text-center">
                    <img src="img/material-wood.jpg" alt="Sustainable Wood" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Sustainable Wood</h5>
                        <p class="card-text">High-quality, eco-friendly wood sourced responsibly for sustainable construction projects.</p>
                    </div>
                </div>
            </div>

            <!-- Material 2 -->
            <div class="col-lg-4 col-md-6 material-item">
                <div class="card h-100 text-center">
                    <img src="img/material-concrete.jpg" alt="High-Grade Concrete" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">High-Grade Concrete</h5>
                        <p class="card-text">Durable and versatile concrete mix, ideal for foundational and structural work.</p>
                    </div>
                </div>
            </div>

            <!-- Material 3 -->
            <div class="col-lg-4 col-md-6 material-item">
                <div class="card h-100 text-center">
                    <img src="img/material-steel.jpg" alt="High-Quality Steel" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">High-Quality Steel</h5>
                        <p class="card-text">Strong, reliable steel perfect for structural frameworks and other heavy-duty applications.</p>
                    </div>
                </div>
            </div>

            <!-- More materials can be added similarly -->
        </div>
    </section>

  
    <!-- Footer Start -->
    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">

                <!-- Company Information -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold text-primary">EcoHarmony Homes</h5>
                    <p class="mb-2">Creating sustainable, eco-friendly homes with a modern touch. Our mission is to lead the way in environmentally responsible construction and innovative home solutions.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold text-primary">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.html" class="text-light">About Us</a></li>
                        <li><a href="projects.html" class="text-light">Projects</a></li>
                        <li><a href="services.html" class="text-light">Services</a></li>
                        <li><a href="contact.html" class="text-light">Contact</a></li>
                        <li><a href="faq.html" class="text-light">FAQ</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold text-primary">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="landscape.html" class="text-light">Landscaping & Design</a></li>
                        <li><a href="architecture.html" class="text-light">Architectural Design</a></li>
                        <li><a href="construction.html" class="text-light">Construction</a></li>
                        <li><a href="materials.html" class="text-light">Material Supply</a></li>
                        <li><a href="painting.html" class="text-light">Painting & Finishing</a></li>
                    </ul>
                </div>

                <!-- Newsletter Subscription -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold text-primary">Stay Updated</h5>
                    <p>Subscribe to our newsletter for the latest updates on our projects and sustainable building tips.</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email" aria-label="Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-envelope"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="border-light my-4">

            <!-- Bottom Footer -->
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <span id="currentYear"></span> EcoHarmony Homes. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy.html" class="text-light">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms.html" class="text-light">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>