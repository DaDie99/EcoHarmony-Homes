

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
<style>
    /* General Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar {
        background-color: #0A1128;
        padding: 1rem;
    }

    .navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar .brand {
        color: #fff;
        font-size: 1.5rem;
        font-weight: bold;
        text-decoration: none;
    }

    .navbar nav ul {
        list-style: none;
        display: flex;
        gap: 1.5rem;
    }

    .navbar nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: 500;
    }

    .navbar nav ul li a.btn-login {
        background-color: #FF5722;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        color: #fff;
    }

    .navbar nav ul li a.active {
        color: #FF5722;
    }

    /* Hero Section */
    .hero-section {
        background: url('img/hero-bg.jpg') no-repeat center center/cover;
        height: 60vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
    }

    .hero-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .hero-section .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-section h1 {
        font-size: 3rem;
    }

    .hero-section p {
        font-size: 1.2rem;
        margin-top: 1rem;
    }

    .btn {
        background-color: #FF5722;
        color: #fff;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        text-decoration: none;
    }

    /* Services Section */
    .services-section {
        padding: 3rem 0;
        text-align: center;
    }

    .services-section .service-list {
        display: flex;
        gap: 2rem;
        justify-content: center;
    }

    .service-item {
        width: 30%;
        padding: 1.5rem;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .service-icon {
        font-size: 2rem;
        color: #FF5722;
    }

    .section-title {
        font-size: 2.5rem;
        color: #0A1128;
        margin-bottom: 2rem;
    }

    /* Projects Section */
    .project-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: center;
    }

    .project-item {
        width: 30%;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .project-item img {
        width: 100%;
        height: auto;
    }

    .project-info {
        padding: 1rem;
        text-align: center;
    }

    /* Testimonials Section */
    .testimonials-section {
        background-color: #f4f4f4;
        padding: 2rem 0;
        text-align: center;
    }

    .testimonial-item {
        margin: 1rem 0;
    }

    /* Contact Section */
    .contact-section {
        padding: 2rem 0;
        text-align: center;
    }

    .contact-section form input,
    .contact-section form textarea {
        width: 100%;
        padding: 0.5rem;
        margin: 0.5rem 0;
    }

    .contact-section .btn {
        width: 100%;
        padding: 0.75rem;
        background-color: #FF5722;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    /* Footer */
    footer {
        background-color: #0A1128;
        padding: 1rem;
        text-align: center;
        color: #fff;
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
                    <a href="<?= site_url('services') ?>" class="nav-item nav-link active">Services</a>
                    <a href="<?= site_url('projects') ?>" class="nav-item nav-link">Projects</a>
                    <a href="<?= site_url('about') ?>" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="login.php" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">LogIn <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Building Sustainable and Modern Structures</h1>
            <p>Your trusted partner for construction projects, from concept to completion.</p>
            <a href="#services" class="btn">Explore Our Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section container">
        <h2 class="section-title">Our Construction Services</h2>
        <div class="service-list">
            <div class="service-item">
                <i class="fa fa-home service-icon"></i>
                <h3>Residential Construction</h3>
                <p>We build eco-friendly and modern homes tailored to your needs and vision.</p>
            </div>
            <div class="service-item">
                <i class="fa fa-building service-icon"></i>
                <h3>Commercial Construction</h3>
                <p>Reliable commercial building solutions with sustainability and functionality in mind.</p>
            </div>
            <div class="service-item">
                <i class="fa fa-wrench service-icon"></i>
                <h3>Renovations & Remodeling</h3>
                <p>Revitalize your space with innovative designs and energy-efficient solutions.</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section container">
        <h2 class="section-title">Our Completed Projects</h2>
        <div class="project-gallery">
            <div class="project-item">
                <img src="img/project-1.jpg" alt="Project 1">
                <div class="project-info">
                    <h3>Eco-Friendly Apartment</h3>
                    <p>A modern apartment building with sustainable materials and solar panels.</p>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-2.jpg" alt="Project 2">
                <div class="project-info">
                    <h3>Luxury Villa</h3>
                    <p>Luxury villa with eco-friendly materials and an open, airy layout.</p>
                </div>
            </div>
            <div class="project-item">
                <img src="img/project-3.jpg" alt="Project 3">
                <div class="project-info">
                    <h3>Green Office Complex</h3>
                    <p>An energy-efficient office complex with modern design.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section container">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="testimonial-item">
            <p>"EcoHarmony Homes turned our vision into reality with quality and professionalism."</p>
            <h4>- Sarah Johnson</h4>
        </div>
        <div class="testimonial-item">
            <p>"Our new office is energy-efficient and beautifully designed. Highly recommended!"</p>
            <h4>- Mark Anderson</h4>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section container">
        <h2 class="section-title">Get In Touch</h2>
        <p>Interested in our services? Contact us today to discuss your project!</p>
        <form action="submit_form.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2023 EcoHarmony Homes. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>