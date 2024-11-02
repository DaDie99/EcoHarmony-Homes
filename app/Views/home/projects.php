<?= $this->include('partials/navbar') ?>

<head>
    <meta charset="utf-8">
    <title>Completed Projects - EcoHarmony Homes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!-- Header Section -->
    <div class="bg-image">
        <div class="overlay text-center py-5" style="background: rgba(0, 0, 0, 0.5);">
            <h1 class="display-4 text-white">Completed Projects</h1>
            <p class="lead text-white">Explore our range of completed projects tailored to your needs.</p>
        </div>
    </div>

    <!-- Completed Projects Section -->
    <div class="container mt-5">
        <div class="row">
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <?php
                            // Decode images if stored as JSON
                            $images = json_decode($project['images'], true);
                            ?>
                            <div id="carousel<?= $project['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if (!empty($images)): ?>
                                        <?php foreach ($images as $index => $image): ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <img src="<?= base_url('uploads/services/' . $image) ?>" alt="<?= esc($project['title']) ?>" class="d-block w-100" onerror="this.src='<?= base_url('uploads/projects/default.jpg') ?>'">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('uploads/projects/default.jpg') ?>" alt="Default Image" class="d-block w-100">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $project['id'] ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $project['id'] ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($project['title']) ?></h5>
                                <p><?= esc($project['description']) ?></p>
                                <button class="btn btn-primary" onclick="showDetails(<?= $project['id'] ?>)">View Details</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No projects found. Please adjust your filters.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Project Details Modal -->
    <div class="modal fade" id="projectDetailsModal" tabindex="-1" aria-labelledby="projectDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectDetailsModalLabel">Project Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="project-details-content">
                    <!-- Project details will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle AJAX request and modal display -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showDetails(projectId) {
            $.ajax({
                url: '<?= site_url('project/details/') ?>' + projectId, // Adjust the URL
                method: 'GET',
                success: function(data) {
                    $('#project-details-content').html(data);
                    $('#projectDetailsModal').modal('show');
                },
                error: function() {
                    alert('Could not load project details. Please try again.');
                }
            });
        }
    </script>
</body>
</html>
