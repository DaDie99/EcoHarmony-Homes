<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($property['title']) ?> - EcoHarmony Homes</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .property-detail-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .property-images {
            display: flex;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 20px;
            justify-content: center;
            position: relative;
        }

        .property-images img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .thumbnail-container {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .thumbnail-container img {
            width: 80px;
            height: 80px;
            margin: 0 5px;
            cursor: pointer;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .thumbnail-container img.active {
            border-color: #007bff;
        }

        .details-container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .details-container h3 {
            color: #007bff;
            font-weight: bold;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .details-container p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .details-container strong {
            color: #343a40;
        }

        .text-center {
            text-align: center;
            margin-top: 20px;
        }

        .btn-back {
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container property-detail-container">
        <div class="property-images">
            <?php
            $images = json_decode($property['images'], true);
            if (!empty($images)):
            ?>
                <img src="<?= base_url('uploads/services/' . $images[0]) ?>" alt="<?= esc($property['title']) ?>" class="main-image" onerror="this.style.display='none'">
            <?php endif; ?>
        </div>

        <div class="thumbnail-container">
            <?php foreach ($images as $index => $image): ?>
                <img src="<?= base_url('uploads/services/' . $image) ?>" alt="Thumbnail" class="thumbnail" data-index="<?= $index ?>" onerror="this.style.display='none'">
            <?php endforeach; ?>
        </div>

        <div class="details-container">
            <h3><?= esc($property['title']) ?></h3>
            <p><strong>Price:</strong> <span style="color: #28a745;">$<?= number_format($property['price'], 2) ?></span></p>
            <p><strong>Rating:</strong> <span class="text-warning"><?= esc($property['rating']) ?> <i class="fa fa-star"></i></span></p>
            <p style="background-color: #f8f9fa; padding: 10px; border-radius: 5px;"><strong>Description:</strong> <?= esc($property['description']) ?></p>
            <p><strong>Location:</strong> <?= esc($property['location']) ?></p>
            <p><strong>Contact:</strong> <?= esc($property['contact_number']) ?></p>
        </div>

        <div class="text-center">
            <a href="<?= site_url('property') ?>" class="btn btn-primary btn-back">Back to Properties</a>
        </div>
    </div>


    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.thumbnail').on('click', function() {
                var index = $(this).data('index');
                $('.main-image').attr('src', $('.thumbnail').eq(index).attr('src'));
                $('.thumbnail').removeClass('active');
                $(this).addClass('active');
            });

            $('.thumbnail').first().addClass('active');
        });
    </script>
</body>

</html>