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
</head>

<body>
    <div class="main-dashboard">

        <!-- Header Section -->
        <div class="bg-image">
            <div class="overlay text-center py-5" style="background: rgba(0, 0, 0, 0.5);">
                <h1 class="display-4 text-white">Welcome, <?= esc($user['ownerName']) ?>!</h1>
                <p class="lead text-white">Manage your services and create new offerings with EcoHarmony Homes.</p>
            </div>
        </div>

        <!-- User Account Details Section with Toggle Edit Mode -->
        <div class="container mt-5">
            <h2 class="text-center">Your Account Details</h2>
            <div id="accountDetails">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <p><strong>User Name:</strong> <span><?= esc($user['ownerName']) ?: 'N/A' ?></span></p>
                        <p><strong>Email:</strong> <span><?= esc($user['email']) ?></span></p>
                    </div>
                    <div class="col-md-6 text-end">

                        <a href="<?= site_url('logout') ?>" class="btn btn-danger ms-2">Logout <i class="fas fa-sign-out-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="editAccountForm" style="display: none;">
            <form action="<?= site_url('user/update') ?>" method="post" class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label><strong>Company Name:</strong></label>
                        <input type="text" name="companyName" class="form-control" value="<?= esc($user['companyName'] ?? '') ?>" placeholder="Enter Company Name">
                    </div>
                    <p><strong>Email:</strong> <?= esc($user['email'] ?? 'No Email Provided') ?></p>
                    <div class="mb-3">
                        <label><strong>Contact Number:</strong></label>
                        <input type="text" name="contactNumber" class="form-control" value="<?= esc($user['contactNumber'] ?? '') ?>" placeholder="Enter Contact Number">
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-success">Save Changes <i class="fas fa-save"></i></button>
                    <button type="button" class="btn btn-secondary ms-2" onclick="toggleEdit()">Cancel</button>
                </div>
            </form>
        </div>

        <hr>

        <!-- Your Services Section -->
        <h2 class="text-center mt-5">Your Services</h2>
        <?php if (empty($services)): ?>
            <p class="text-center">No services posted yet.</p>
        <?php else: ?>
            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <?php
                            // Decode images if stored as JSON
                            $images = json_decode($service['images'], true);
                            ?>
                            <div id="carousel<?= $service['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if (!empty($images)): ?>
                                        <?php foreach ($images as $index => $image): ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <img src="<?= base_url('uploads/services/' . $image) ?>" class="d-block w-100" alt="<?= esc($service['title']) ?>" onerror="this.style.display='none'">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('uploads/services/default.jpg') ?>" class="d-block w-100" alt="Default Image">
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
                            <div class="card-body text-center"> <!-- Center align text and buttons -->
                                <h5 class="card-title"><?= esc($service['title']) ?></h5>
                                <p><strong>Type:</strong> <?= esc($serviceMapping[$service['service_type']]) ?></p>
                                <p><strong>Location:</strong> <?= esc($service['location']) ?></p>
                                <p><strong>Contact:</strong> <?= esc($service['contact_number']) ?></p>
                                <p><strong>Price:</strong> $<?= esc($service['price']) ?></p>
                                <p><strong>Description:</strong> <?= esc($service['description']) ?></p>

                                <!-- Centered Edit and Delete buttons with same size and styling -->
                                <div class="d-flex justify-content-center gap-2 mt-3">
                                    <a href="<?= site_url('service/edit/' . $service['id']) ?>" class="btn btn-warning btn-sm" style="width: 100px; height: 40px;">Edit</a>
                                    <form action="<?= site_url('service/delete/' . $service['id']) ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                        <button type="submit" class="btn btn-danger btn-sm" style="width: 100px; height: 40px;">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>



        <!-- Post a New Service Section -->
        <div class="container mt-5">
            <div class="section bg-light p-5 rounded">
                <h2 class="text-center">Post a New Service</h2>
                <form action="<?= site_url('service/create') ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="title" class="form-label">Service Title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="service_type" class="form-label">Select Service Type</label>
                        <select id="service_type" name="service_type" class="form-select" required>
                            <option value="">-- Select Service Type --</option>
                            <!-- Service types as options -->
                            <option value="1">Property</option>
                            <option value="2">Material Supplier</option>
                            <option value="3">Construction</option>
                            <option value="4">Planning & Design</option>
                            <option value="5">Architecture Design</option>
                            <option value="6">Interior Design</option>
                            <option value="7">Fixing & Support</option>
                            <option value="8">Painting</option>
                            <option value="9">Garden Design</option>
                            <option value="10">Furnitures</option>
                            <option value="11">Electrics</option>
                            <option value="12">Dream Homes</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" id="location" name="location" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" id="price" name="price" class="form-control" required>
                    </div>

                    <!-- Description field -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <!-- Multi-Image Upload with Preview -->
                    <div class="mb-3">
                        <label for="images" class="form-label">Upload Images (up to 3)</label>
                        <input type="file" id="images" name="images[]" class="form-control-file" accept="image/*" multiple required onchange="previewImages()">
                        <div id="image-preview" class="mt-3 d-flex flex-wrap"></div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Post Service</button>
                </form>
            </div>
        </div>

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

        <!-- Image Preview Script -->
        <script>
            function previewImages() {
                var previewContainer = document.getElementById('image-preview');
                previewContainer.innerHTML = '';
                var files = document.getElementById('images').files;

                if (files.length > 3) {
                    alert("You can upload a maximum of 3 images.");
                    document.getElementById('images').value = '';
                    return;
                }

                for (var i = 0; i < files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var img = document.createElement('img');
                        img.src = event.target.result;
                        img.classList.add('img-thumbnail', 'me-2', 'mb-2');
                        img.style.width = '100px';
                        img.style.height = '100px';
                        previewContainer.appendChild(img);
                    }
                    reader.readAsDataURL(files[i]);
                }
            }
        </script>
        <script>
            function toggleEdit() {
                var accountDetails = document.getElementById('accountDetails');
                var editAccountForm = document.getElementById('editAccountForm');

                if (accountDetails.style.display === 'none') {
                    accountDetails.style.display = 'block';
                    editAccountForm.style.display = 'none';
                } else {
                    accountDetails.style.display = 'none';
                    editAccountForm.style.display = 'block';
                }
            }
        </script>

</body>

</html>