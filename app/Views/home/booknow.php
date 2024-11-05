<?= $this->include('partials/navbar') ?>

<head>
    <meta charset="utf-8">
    <base href="<?= base_url() ?>/">
    <title>EcoHarmony Homes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <!-- Favicon -->
    <link href="img/EcoHomes.ico" rel="icon">S

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
    <style>
        /* Center the form on the page */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        /* Card styling */
        .card {
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
        }

        /* Card title and header */
        .card-title {
            color: #FF5722;
            /* Orange color */
            font-weight: bold;
        }

        h2 {
            color: #FF5722;
            font-weight: bold;
        }

        /* Input styling */
        .form-control {
            border-radius: 8px;
            border: 1px solid #FF5722;
            padding: 10px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        /* Styling for the Pay Now button */
        .btn-primary {
            background-color: #FF5722;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #E64A19;
        }

        /* Styling for the Cancel button */
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: bold;
            margin-right: 10px;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Add subtle shadow on inputs */
        .form-control:focus {
            box-shadow: 0 0 5px rgba(255, 87, 34, 0.5);
            border-color: #FF5722;
        }

        /* Align expiration date and CVV side by side */
        .row .col-md-6 {
            padding-right: 5px;
            padding-left: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-4">Payment Details</h2>
                <h5 class="card-title text-center mb-4">Enter Your Payment Information</h5>

                <form action="<?= site_url('payment/process') ?>" method="post">

                    <!-- Cardholder Name -->
                    <div class="mb-3">
                        <label for="cardName" class="form-label">Cardholder Name</label>
                        <input type="text" class="form-control" id="cardName" name="cardName" required>
                    </div>

                    <!-- Card Number -->
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required minlength="16" maxlength="16" pattern="\d{16}" placeholder="1234 5678 9012 3456">
                    </div>

                    <!-- Expiration Date and CVV -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="expiryDate" class="form-label">Expiration Date</label>
                            <input type="text" class="form-control" id="expiryDate" name="expiryDate" required placeholder="MM/YY" pattern="\d{2}/\d{2}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" required minlength="3" maxlength="3" pattern="\d{3}" placeholder="123">
                        </div>
                    </div>

                    <!-- Buttons: Pay Now and Cancel -->
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Pay Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>