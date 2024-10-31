<?= $this->include('partials/navbar') ?>

<head>
    <meta charset="utf-8">
    <title>User Dashboard | EcoHarmony Homes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

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
                    <p><strong>Company Name:</strong> <span><?= esc($user['companyName']) ?: 'N/A' ?></span></p>
                    <p><strong>Email:</strong> <span><?= esc($user['email']) ?></span></p>
                    <p><strong>Contact Number:</strong> <span><?= esc($user['contactNumber']) ?: 'N/A' ?></span></p>
                    <p><strong>Registered Since:</strong> <span><?= esc($user['created_at']) ?></span></p>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-primary" onclick="toggleEdit()">Edit Details <i class="fas fa-edit"></i></button>
                    <a href="<?= site_url('logout') ?>" class="btn btn-danger ms-2">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>

        <!-- Editable Form (Hidden by default) -->
        <div id="editAccountForm" style="display: none;">
            <form action="<?= site_url('user/update') ?>" method="post" class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label><strong>Company Name:</strong></label>
                        <input type="text" name="companyName" class="form-control" value="<?= esc($user['companyName']) ?>">
                    </div>
                    <p><strong>Email:</strong> <?= esc($user['email']) ?></p> <!-- Email cannot be changed -->
                    <div class="mb-3">
                        <label><strong>Contact Number:</strong></label>
                        <input type="text" name="contactNumber" class="form-control" value="<?= esc($user['contactNumber']) ?>">
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
                            <img src="<?= base_url('uploads/services/' . $service['image']) ?>" class="card-img-top" alt="<?= esc($service['title']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($service['title']) ?></h5>
                                <p><strong>Type:</strong> <?= esc($serviceMapping[$service['service_type']]) ?></p>
                                <p><strong>Location:</strong> <?= esc($service['location']) ?></p>
                                <p><strong>Contact:</strong> <?= esc($service['contact_number']) ?></p>
                                <p><strong>Price:</strong> $<?= esc($service['price']) ?></p>
                                <p><strong>Description:</strong> <?= esc($service['description']) ?></p>
                                <!-- Edit and Delete buttons -->
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="<?= site_url('service/edit/' . $service['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?= site_url('service/delete/' . $service['id']) ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

        <!-- Footer -->
        <footer class="footer bg-dark text-light py-4 mt-5">
            <div class="container text-center">
                <p class="mb-0">&copy; <?= date('Y') ?> EcoHarmony Homes. All Rights Reserved.</p>
            </div>
        </footer>

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