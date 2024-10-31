<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'EcoHarmony Homes') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <!-- Top Banner -->
    <div class="top-banner">
        ECOHARMONY HOMES
    </div>

    <!-- Main Content Area -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

</body>
</html>
