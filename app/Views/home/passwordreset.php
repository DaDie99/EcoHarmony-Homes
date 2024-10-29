<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - EcoHarmony Homes</title>
    <link rel="stylesheet" href="<?= base_url('css/login.css'); ?>">
</head>
<body>

    <div class="login-container">
        <div class="login-logo">
            <img src="<?= base_url('images/logo.png'); ?>" alt="EcoHarmony Homes Logo">
        </div>
        <h2 class="welcome-text">Reset Your Password</h2>
        
        <form action="<?= site_url('password/reset') ?>" method="post" class="login-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <button type="submit" class="login-button">Send Reset Link</button>
        </form>

        <?php if (session()->getFlashdata('errors')): ?>
            <p class="error-message"><?= session()->getFlashdata('errors') ?></p>
        <?php endif; ?>
    </div>

</body>
</html>
