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
            <option value="rating">Rating: High to Low</option>
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
                <img src="<?= base_url('assets/images/' . $property['image']) ?>" alt="<?= esc($property['title']) ?>">
                <h3><?= esc($property['title']) ?></h3>
                <p class="price">$<?= number_format($property['price'], 2) ?></p>
                <p><i class="fa fa-star text-warning"></i> <?= esc($property['rating']) ?> / 5</p>
                <p><?= esc($property['description']) ?></p>
                <a href="<?= site_url('property/' . $property['id']) ?>" class="btn btn-primary">View Details</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No properties found. Please adjust your filters.</p>
    <?php endif; ?>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Footer -->
<footer class="footer bg-dark text-light py-5">
    <div class="container">
        <p class="mb-0 text-center">&copy; <?= date('Y') ?> EcoHarmony Homes. All Rights Reserved.</p>
    </div>
</footer>

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

</body>
</html>
