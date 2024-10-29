<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as a Service Provider</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Registration Form</h1>
    <form action="<?= site_url('register') ?>" method="post">
        <input type="text" name="companyName" placeholder="Company Name" required>
        <input type="text" name="ownerName" placeholder="Owner Name" required>
        <input type="text" name="registerNumber" placeholder="Register Number" required>
        <input type="text" name="contactNumber" placeholder="Contact Number" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="service" placeholder="Service" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
</body>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
