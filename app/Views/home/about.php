<?= $this->include('partials/navbar') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us - EcoHarmony Homes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!-- Header Section -->
    <div class="bg-image">
        <div class="overlay text-center py-5" style="background: rgba(0, 0, 0, 0.5);">
            <h1 class="display-4 text-white">About Us</h1>
            <p class="lead text-white">Learn more about EcoHarmony Homes and our commitment to quality and sustainability.</p>
        </div>
    </div>

    <!-- About Us Content Section -->
    <div class="container mt-5">
        <h2 class="text-center">Our Mission</h2>
        <p class="text-center">At EcoHarmony Homes, our mission is to provide sustainable and eco-friendly building solutions that enhance the quality of life for our clients and communities. We believe in creating homes that not only meet the needs of today but also preserve the environment for future generations.</p>

        <h2 class="text-center mt-5">Our Values</h2>
        <ul>
            <li><strong>Sustainability:</strong> We prioritize eco-friendly materials and practices.</li>
            <li><strong>Quality:</strong> Our projects meet the highest standards of quality and craftsmanship.</li>
            <li><strong>Innovation:</strong> We embrace innovative solutions to improve living spaces.</li>
            <li><strong>Community:</strong> We support and give back to the communities we serve.</li>
        </ul>

        <h2 class="text-center mt-5">Our Team</h2>
        <p class="text-center">Our team of experienced architects, designers, and builders are passionate about creating homes that reflect our clients’ unique styles and preferences. We work closely with our clients to understand their vision and bring it to life.</p>

        <h2 class="text-center mt-5">Contact Us</h2>
        <p class="text-center">If you would like to learn more about our services or discuss your project ideas, feel free to <a href="<?= site_url('contact') ?>" class="btn btn-primary">Contact Us</a>.</p>
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

</body>

</html>