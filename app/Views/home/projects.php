<!DOCTYPE html>
<html lang="en">

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
        /* Custom styling */
        .project-card {
            transition: transform 0.3s;
        }
        .project-card:hover {
            transform: scale(1.05);
        }
        .project-image {
            height: 250px;
            object-fit: cover;
        }
        .highlight-section {
            background-color: #f4f6f8;
            padding: 50px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>EcoHarmony Homes</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#" class="nav-item nav-link">Home</a>
                    <a href="<?= site_url('services') ?>" class="nav-item nav-link">Services</a>
                    <a href="<?= site_url('projects') ?>" class="nav-item nav-link">Projects</a>
                    <a href="<?= site_url('about') ?>" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="login.php" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">LogIn <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->





    <body>

        <!-- Header Section -->
        <div class="bg-image text-center text-white py-5">
            <h1 class="display-4">Our Projects</h1>
            <p>Explore our portfolio of exceptional projects where vision meets reality.</p>
        </div>

        <!-- Project Portfolio Grid -->
        <div class="container my-5">
            <div class="row">
                <!-- Example Project Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card project-card shadow-sm">
                        <img src="path/to/project-image1.jpg" class="card-img-top project-image" alt="Project Image">
                        <div class="card-body">
                            <h5 class="card-title">Green Residence</h5>
                            <p class="card-text">Location: Austin, TX</p>
                            <p class="card-text">Residential Eco-home</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar project cards here -->
            </div>
        </div>

        <!-- Project Highlight Section -->
        <div class="highlight-section">
            <div class="container text-center">
                <h2>Project Highlights</h2>
                <p class="mb-5">Take a closer look at some of our most impactful projects.</p>

                <div class="row">
                    <!-- Highlighted Project Card -->
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-lg">
                            <img src="path/to/highlighted-project.jpg" class="card-img-top project-image" alt="Highlighted Project">
                            <div class="card-body">
                                <h5 class="card-title">Luxury Eco Villa</h5>
                                <p class="card-text">A stunning eco-friendly villa built with sustainable materials and modern design elements.</p>
                                <p class="card-text"><strong>Location:</strong> Los Angeles, CA</p>
                                <p class="card-text"><strong>Features:</strong> Solar panels, rainwater harvesting, energy-efficient lighting</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more highlighted project cards as needed -->
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="container my-5">
            <h2 class="text-center mb-5">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">"EcoHarmony Homes built our dream house with exceptional attention to detail and eco-friendly features. We couldn't be happier!"</p>
                        <footer class="blockquote-footer">Sarah Johnson, Homeowner</footer>
                    </blockquote>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
        </div>



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