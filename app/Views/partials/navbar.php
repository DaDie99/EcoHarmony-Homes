<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a href="<?= base_url('/') ?>" class="navbar-brand">
            <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>EcoHarmony Homes</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?= base_url('/') ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= site_url('services') ?>" class="nav-item nav-link">Services</a>
                <a href="<?= site_url('projects') ?>" class="nav-item nav-link">Projects</a>
                <a href="<?= site_url('about') ?>" class="nav-item nav-link">About</a>
                <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Contact</a>

                <!-- Conditional Login/Logout Button -->
                <?php if (session()->get('logged_in')): ?>
                    <a href="<?= site_url('logout') ?>" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">
                        <?= session()->get('ownerName'); ?> (Logout) <i class="bi bi-box-arrow-right"></i>
                    </a>
                <?php else: ?>
                    <a href="<?= site_url('login') ?>" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">
                        LogIn <i class="bi bi-arrow-right"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</div>
