<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>About Us - EcoHarmony Homes</title>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"> <!-- Your custom styles should load after Bootstrap -->
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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="service.php" class="nav-item nav-link">Projects</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="landsell.php" class="dropdown-item">Land Selling</a>
                            <a href="architecture.php" class="dropdown-item">Architecture Design</a>
                            <a href="construction.php" class="dropdown-item">Construction</a>
                            <a href="materials.php" class="dropdown-item">Material Suppliers</a>
                            <a href="painting.php" class="dropdown-item">Painting</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="login.php" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">LogIn <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- About Section Start -->
    <div class="container-fluid bg-dark text-white py-5" style="background-image: url('img/about-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container py-5">
            <h1 class="display-3 text-uppercase text-center mb-4">About Us</h1>
            <p class="lead text-center mb-5">At EcoHarmony Homes, we are committed to creating sustainable and eco-friendly homes that meet modern-day living standards. Our expertise lies in designing, constructing, and delivering high-quality homes that harmonize with the environment.</p>
            <div class="row g-4">
                <div class="col-lg-6">
                    <h3 class="text-uppercase mb-3">Our Mission</h3>
                    <p>Our mission is to build homes that are not only beautiful and functional but also environmentally responsible. We use sustainable materials, eco-friendly practices, and innovative designs to minimize our impact on the planet.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase mb-3">Our Vision</h3>
                    <p>We envision a future where every home is built with the earth in mind. EcoHarmony Homes strives to be a leader in green construction, setting new standards for sustainable living.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>