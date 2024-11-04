<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoHarmony Homes - Register</title>
    <link rel="stylesheet" href="<?= base_url('css/register.css'); ?>"> <!-- Link to custom CSS file -->
    <style>
        /* register.css */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .register-container {
            background-color: #1a1a2e;
            padding: 40px;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .register-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-header .logo {
            width: 80px;
            margin-bottom: 10px;
        }

        .register-header h2 {
            font-size: 26px;
            color: #ff8c00;
        }

        .register-form .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .register-form label {
            font-size: 14px;
            color: #bbb;
            margin-bottom: 5px;
            display: inline-block;
        }

        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"],
        .register-form select {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #333;
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: background-color 0.3s;
        }

        .register-form select {
            appearance: none;
            /* Removes default dropdown styling */
            background-image: url('../images/arrow-down.svg');
            /* Add custom arrow icon if desired */
            background-repeat: no-repeat;
            background-position: right 10px center;
        }

        .register-form input[type="text"]:focus,
        .register-form input[type="email"]:focus,
        .register-form input[type="password"]:focus,
        .register-form select:focus {
            background-color: #444;
        }

        .register-button {
            width: 100%;
            padding: 12px;

            background-color: #ff8c00;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition:
        }

        .auth-links a {
            color: #ff8c00;
            text-decoration: none;
            transition: color 0.3s;
            padding-top: 100px;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="register-header">
            <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>EcoHarmony Homes</h1>
            <h2>Create an Account</h2>
        </div>

        <form action="<?= site_url('register') ?>" method="post" class="register-form">
            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input type="text" name="companyName" id="companyName" required>
            </div>
            <div class="form-group">
                <label for="ownerName">Owner Name</label>
                <input type="text" name="ownerName" id="ownerName" required>
            </div>
            <div class="form-group">
                <label for="registerNumber">Registration Number</label>
                <input type="text" name="registerNumber" id="registerNumber" required>
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="text" name="contactNumber" id="contactNumber" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="service">Service Provided</label>
                <select name="service" id="service" required>
                    <option value="">Select a Service</option>
                    <option value="1">Property</option>
                    <option value="2">Mateial Supplier</option>
                    <option value="3">Construction</option>
                    <option value="4">Planning & Design</option>
                    <option value="5">Architecture Design</option>
                    <option value="6">Interior Design</option>
                    <option value="7">Fixing & Support</option>
                    <option value="8">Painting</option>
                    <option value="9">Garden Design</option>
                    <option value="10">Furniture</option>
                    <option value="11">Electricts</option>
                    <option value="12">Dream Homes</option>

                </select>
            </div>
            <button type="submit" class="register-button">Register</button>

            <div class="auth-links">
                <a href="<?= site_url('#') ?>">Home</a>
            </div>


        </form>


        <?php if (session()->getFlashdata('errors')): ?>
            <p class="error-message"><?= session()->getFlashdata('errors') ?></p>
        <?php endif; ?>



    </div>

</body>

</html>