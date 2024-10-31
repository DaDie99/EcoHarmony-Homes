<?= $this->include('partials/navbar') ?>


<head>
    <base href="<?= base_url() ?>/">


    <meta charset="UTF-8">
    <title>About Us - EcoHarmony Homes</title>


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
    <!-- About Us Section Start -->
    <section class="about-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img src="assets/images/about-hero.jpg" alt="EcoHarmony Homes" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4 font-weight-bold text-primary mb-4">ECOHARMONY HOMES</h2>
                    <p class="lead">At EcoHarmony Homes, we are driven by a mission to revolutionize sustainable living through exceptional design, innovation, and environmental stewardship. Our goal is to create eco-friendly homes that are as beautiful as they are sustainable, bringing the perfect harmony between modern living and nature.</p>
                    <p>Founded with a vision to inspire a greener future, we pride ourselves on delivering high-quality, energy-efficient homes that minimize environmental impact and maximize comfort.</p>
                    <a href="contact.php" class="btn btn-primary mt-3">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Service Providers Section Start -->
    <section class="service-providers py-5 bg-light">
        <div class="container">
            <h2 class="display-5 font-weight-bold text-center text-dark mb-5">Meet Our Expert Service Providers</h2>
            <div class="row">

                <!-- Service Provider Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="assets/images/service-landscape.jpg" class="card-img-top" alt="Landscape Design">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Landscaping & Design</h5>
                            <p class="card-text">Our landscaping team specializes in creating lush, sustainable green spaces that not only beautify but also support local ecosystems.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Provider Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="assets/images/service-architecture.jpg" class="card-img-top" alt="Architecture Design">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Architectural Design</h5>
                            <p class="card-text">Our talented architects bring creative vision to life, designing eco-conscious structures that are both functional and inspiring.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Provider Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="assets/images/service-construction.jpg" class="card-img-top" alt="Construction">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Construction & Engineering</h5>
                            <p class="card-text">With precision and expertise, our construction team ensures every project is built to last, utilizing eco-friendly materials and techniques.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Provider Card 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="assets/images/service-materials.jpg" class="card-img-top" alt="Material Suppliers">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Material Suppliers</h5>
                            <p class="card-text">We partner with trusted suppliers to source sustainable and high-quality materials that meet our rigorous environmental standards.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Provider Card 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <img src="assets/images/service-painting.jpg" class="card-img-top" alt="Painting Services">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Painting & Finishing</h5>
                            <p class="card-text">Our painters use low-VOC and eco-friendly paints, ensuring that your interiors are both beautiful and safe for the environment.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Service Providers Section End -->

    <!-- Our Values Section Start -->
    <section class="our-values py-5">
        <div class="container">
            <h2 class="display-5 font-weight-bold text-center text-dark mb-5">Our Values</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="value-box text-center mb-4">
                        <i class="bi bi-tree text-primary display-4"></i>
                        <h4 class="my-3">Sustainability</h4>
                        <p>We prioritize sustainable practices in every step, ensuring a positive impact on the planet.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box text-center mb-4">
                        <i class="bi bi-heart text-primary display-4"></i>
                        <h4 class="my-3">Integrity</h4>
                        <p>Our commitment to honesty and transparency is at the core of every project we undertake.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box text-center mb-4">
                        <i class="bi bi-lightbulb text-primary display-4"></i>
                        <h4 class="my-3">Innovation</h4>
                        <p>We embrace innovation to create homes that are forward-thinking and environmentally responsible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Values Section End -->


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









    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>