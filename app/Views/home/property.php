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


    <!-- Header Section -->
    <div class="bg-image text-center text-white py-5" style="background-color: #040F28;">
        <h1 class="display-4">Our Properties for Sale</h1>
        <p>Discover Your Next Dream Home</p>
        <!-- Search Bar -->
        <div class="container">
            <div class="input-group mt-3">
                <input type="text" class="form-control" placeholder="Search by location, price, or property type">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Properties Section -->
    <div class="featured-property">
        <div class="container text-center">
            <h2>Featured Properties</h2>
            <p class="mb-5">Our top selections of homes available now.</p>
            <div class="row">
                <!-- Example Featured Property -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg">
                        <img src="path/to/featured-property.jpg" class="card-img-top property-image" alt="Featured Property">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Villa with Ocean View</h5>
                            <p class="card-text">Location: Malibu, CA</p>
                            <p class="card-text">Price: $2,500,000</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Add more featured properties as needed -->
            </div>
        </div>
    </div>

    <!-- Property Listing Grid -->
    <div class="container my-5">
        <h2 class="text-center mb-5">Explore More Properties</h2>
        <div class="row">
            <!-- Example Property Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card property-card shadow-sm">
                    <img src="path/to/property-image1.jpg" class="card-img-top property-image" alt="Property Image">
                    <div class="card-body">
                        <h5 class="card-title">Modern Apartment in City Center</h5>
                        <p class="card-text">Location: San Francisco, CA</p>
                        <p class="card-text">Price: $850,000</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Repeat similar property cards here -->
        </div>
    </div>

    <!-- Map Section -->
    <div class="map-section text-center text-white">
        <h2 class="py-5">Find Us On the Map</h2>
        <p>Explore the locations of all available properties.</p>
        <!-- Use a map embed or replace background image with an interactive map API -->
    </div>

    <!-- Testimonials -->
    <div class="container my-5">
        <h2 class="text-center mb-5">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <blockquote class="blockquote">
                    <p class="mb-0">"The team at EcoHarmony Homes helped us find the perfect eco-friendly property. The process was seamless and professional!"</p>
                    <footer class="blockquote-footer">John Doe, Happy Customer</footer>
                </blockquote>
            </div>
            <!-- Add more testimonials as needed -->
        </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center py-5 bg-light">
        <h3>Interested in a property? Schedule a viewing with us today!</h3>
        <a href="contact.html" class="btn btn-primary mt-3">Contact Us</a>
    </div>