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

<form action="<?= site_url('service/update/' . $service['id']) ?>" method="post" class="p-4 rounded shadow-sm bg-light">
    <h3 class="text-center mb-4">Update Service</h3>
    
    <div class="mb-3">
        <label for="title" class="form-label fw-bold">Title</label>
        <input type="text" name="title" id="title" value="<?= esc($service['title']) ?>" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label for="location" class="form-label fw-bold">Location</label>
        <input type="text" name="location" id="location" value="<?= esc($service['location']) ?>" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label for="contact_number" class="form-label fw-bold">Contact Number</label>
        <input type="text" name="contact_number" id="contact_number" value="<?= esc($service['contact_number']) ?>" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label for="price" class="form-label fw-bold">Price</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" name="price" id="price" value="<?= esc($service['price']) ?>" class="form-control" required>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label fw-bold">Description</label>
        <textarea name="description" id="description" class="form-control" rows="5" required><?= esc($service['description']) ?></textarea>
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary px-4 py-2 mt-3">Update Service</button>
    </div>
</form>
