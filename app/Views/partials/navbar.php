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

                <!-- Conditional Login/Logout and Dashboard Links -->
                <?php if (session()->get('logged_in')): ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle bg-primary text-white px-4 ms-3" data-bs-toggle="dropdown">
                            <?= esc(session()->get('ownerName')) ?> <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="<?= site_url('home/dashboard') ?>" class="dropdown-item">Dashboard</a>
                            <a href="<?= site_url('logout') ?>" class="dropdown-item text-danger">Logout <i class="bi bi-box-arrow-right"></i></a>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?= site_url('login') ?>" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">
                        Log In <i class="bi bi-arrow-right"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</div>
