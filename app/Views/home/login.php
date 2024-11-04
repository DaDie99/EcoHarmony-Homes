<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoHarmony Homes - Login</title>
    <link rel="stylesheet" href="<?= base_url('css/login.css'); ?>"> <!-- Link to custom CSS file -->
    <style>
        /* login.css */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/background.jpg') no-repeat center center fixed;
            /* Add a background image here */
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .login-container {
            background-color: #1a1a2e;
            padding: 40px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .login-logo img {
            width: 100px;
            margin-bottom: 20px;
        }

        .welcome-text {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ff8c00;
            /* Use a vibrant orange color */
        }

        .login-form .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .login-form label {
            font-size: 14px;
            color: #bbb;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 16px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #ff8c00;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #e07b00;
        }

        .error-message {
            color: #ff4d4d;
            margin-top: 15px;
        }

        /* login.css */

        .auth-links {
            margin-top: 20px;
            font-size: 14px;
        }

        .auth-links a {
            color: #ff8c00;
            text-decoration: none;
            transition: color 0.3s;
        }

        .auth-links a:hover {
            color: #e07b00;
        }
    </style>
</head>

<body>

    <div class="login-container">
        
        <div class="login-logo">
            
        <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>EcoHarmony Homes</h1>
        </div>
        <h2 class="welcome-text">Welcome Back</h2>

        <form action="<?= site_url('login/attempt') ?>" method="post" class="login-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error-message"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <!-- Links for Register and Reset Password -->
        <div class="auth-links">
            <a href="<?= site_url('register') ?>">Register</a> |
            <a href="<?= site_url('password/reset') ?>">Forgot Password?</a>|
            <a href="<?= site_url('#') ?>">Home</a>
        </div>

    </div>

</body>

</html>