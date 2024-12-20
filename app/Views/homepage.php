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
    <link href="img/EcoHomes.ico" rel="icon">

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
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .card-text {
            color: #555;
        }

        .feedback-container {
            max-width: 450px;
            margin: auto;
            padding: 20px;
            background: #f7f9fc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .feedback-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .feedback-form .feedback-label {
            font-size: 0.9rem;
            font-weight: 500;
            color: #555;
        }

        .feedback-form .feedback-input {
            font-size: 0.9rem;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            transition: border-color 0.3s;
        }

        .feedback-form .feedback-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        .feedback-submit-btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .feedback-submit-btn:hover {
            background-color: #0056b3;
        }

        /* Mobile responsiveness */
        @media (max-width: 576px) {
            .feedback-title {
                font-size: 1.3rem;
            }

            .feedback-form .feedback-input {
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets\images\ac2d785c02afa52c58ce8f4582258717.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Build Your Dream House With Our Services</h1>
                            <a href="<?= site_url('services') ?>" class="btn btn-primary py-md-3 px-md-5 mt-2">Find A service</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets\images\architecture-house-modern-wallpaper-preview.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">We Are Trusted to Build your dream home with our services</h1>
                            <a href="<?= site_url('services') ?>" class="btn btn-primary py-md-3 px-md-5 mt-2">Find A service</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <!-- Main Content Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">

                <p>
                    At EcoHarmony Homes, we believe that sustainable living should never compromise on style or comfort. Our collection of sustainable home designs combines cutting-edge architecture with eco-friendly materials to create beautiful spaces that minimize environmental impact. Each design incorporates energy-efficient features such as solar panels, high-quality insulation, and water conservation systems, ensuring that your home not only looks good but also contributes positively to the planet.
                </p>
                <p>
                    Explore our innovative layouts that prioritize natural light, airflow, and outdoor connectivity, creating a serene living environment that promotes well-being. From compact urban dwellings to spacious family homes, our designs cater to diverse lifestyles while fostering a harmonious relationship with the environment.
                </p>
            </div>
            <!-- Right Column -->
            <div class="col-md-6">
                <div id="designCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets\images\eco-house.jpg" class="d-block w-100" alt="Eco-Friendly Cottage">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets\images\Eco Friendly Interior Design.jpg" class="d-block w-100" alt="Modern Minimalist Home">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets\images\eco_friendly_sky_garden_home5.jpg" class="d-block w-100" alt="Family Haven">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#designCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#designCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <!-- Featured Designs Section -->
    <div class="container mt-5">
        <h2 class="text-center">Featured Sustainable Designs</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets\images\sustanability 1.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Eco-friendly Elegance</h5>
                        <p class="card-text">This sustainable home design blends seamlessly with nature, incorporating a green roof that fosters biodiversity and enhances insulation. The use of natural wood materials and large windows allows for ample natural light and ventilation, reducing the need for artificial lighting and air conditioning. Its location by the coastline not only offers breathtaking views but also encourages a lifestyle that is closely connected with the natural surroundings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets\images\susutanability 2.jpg" class="card-img-top" alt="Design 2">
                    <div class="card-body">
                        <h5 class="card-title">Where Sustainability Meets Sophistication</h5>
                        <p class="card-text">
                            This modern sustainable home design emphasizes open space and energy efficiency, with expansive glass walls that maximize natural light and create a seamless connection between indoor and outdoor spaces. The architecture combines sleek lines with eco-friendly materials, showcasing a commitment to both style and environmental responsibility. The home's open structure allows for natural ventilation, helping to reduce the need for mechanical cooling.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets\images\sustanability 3.jpg" class="card-img-top" alt="Design 3">
                    <div class="card-body">
                        <h5 class="card-title">Harmony of Eco-Friendly Design</h5>
                        <p class="card-text">This sustainable home exemplifies modern eco-friendly architecture with its unique. It is thoughtfully designed to integrate nature, blending indoor and outdoor spaces seamlessly. The structure incorporates natural materials, large windows for natural light, and a green roof to enhance insulation. Solar panels and energy-efficient lighting contribute to the home’s reduced environmental impact,sustainable space that harmonizes with its surroundings.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">We Provide <span class="text-primary">The Best</span> Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-map text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Property</h4>
                        <p>Our Property Selling and Buying Service offers a seamless experience for homeowners and buyers alike. Whether you're selling your home or searching for your dream property, we provide expert guidance, market insights, and personalized support at every step. Our dedicated team helps sellers achieve the best price and ensures buyers find properties that meet their needs and budget. With extensive listings, professional evaluations, and negotiation support, we simplify the process and make real estate transactions stress-free, transparent, and efficient. Let us help you unlock the best opportunities in today's property market!</p>
                        <a class="btn text-primary" href="<?= site_url('property') ?>">Find a Property</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-cubes text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Material Supplier</h4>
                        <p>Material Supplier Service ensures that you have access to high-quality construction materials for your building projects, delivered on time and within budget. We provide a wide range of materials, from sustainable wood and eco-friendly insulation to high-grade concrete and steel, sourced from trusted suppliers. Whether you're working on a residential, commercial, or industrial project, our team is committed to delivering reliable products, tailored to your specific needs. With competitive pricing, timely delivery, and exceptional customer service, we make sure your project stays on track and meets the highest standards of quality.</p>
                        <a class="btn text-primary" href="<?= site_url('material_supplier') ?>">Find a material Supplier</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-hard-hat text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Construction</h4>
                        <p>Construction Service provides comprehensive solutions for residential, commercial, and industrial projects. From planning and design to execution and final inspection, we manage every stage of the construction process with precision and professionalism. We offer services such as new builds and project management, ensuring that all work is completed on time, within budget, and to the highest quality standards. Our skilled team of architects, engineers, and builders use the latest construction techniques and materials, focusing on safety, sustainability, and client satisfaction. Let us bring your vision to life with reliable and expert construction services.</p>
                        <a class="btn text-primary" href="<?= site_url('construction') ?>">Find a Constructer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-pencil-ruler text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Planning & Design</h4>
                        <p>Planning & Design Service ensures that every construction project begins with a solid foundation. We work closely with clients to create tailored designs that meet their vision while adhering to zoning regulations, environmental considerations, and budget constraints. Our team of skilled architects and designers uses advanced tools to craft functional, aesthetically pleasing spaces. Whether it's residential, commercial, or industrial, we focus on optimizing layout, maximizing efficiency, and integrating sustainable features. By collaborating from concept to blueprint, we ensure a seamless transition from planning to execution, delivering projects that are innovative, practical, and sustainable.</p>
                        <a class="btn text-primary" href="<?= site_url('planning_and_design') ?>">Find a planning & designer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Architecture Design</h4>
                        <p> Architecture Design Service combines creativity with functionality to deliver exceptional building designs tailored to your unique needs. We focus on blending aesthetic appeal with structural integrity, ensuring each design complements its environment while maximizing space and light. Our experienced architects work closely with clients to understand their vision, creating innovative, sustainable, and energy-efficient designs. Whether designing modern homes, commercial spaces, or urban developments, we prioritize materials, safety, and regulatory compliance. Using cutting-edge technology, we bring ideas to life through detailed blueprints and 3D visualizations, guiding projects from concept to construction with precision and creativity.</p>
                        <a class="btn text-primary" href="<?= site_url('architecture_design') ?>">Find a Architecture Designer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-4.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-palette text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Interior Design</h4>
                        <p>Interior Design Service transforms spaces into functional, aesthetically pleasing environments that reflect your style and meet your practical needs. Whether designing for homes, offices, or commercial spaces, we focus on balancing beauty with comfort and utility. Our team of skilled designers curates materials, colors, furnishings, and layouts that enhance the flow and feel of each space. From modern minimalist styles to cozy, eco-friendly designs, we tailor each project to your vision. By incorporating the latest trends, sustainable materials, and innovative solutions, we create interiors that are not only visually stunning but also timeless and functional, ensuring the final result is both stunning and perfectly suited to your needs.</p>
                        <a class="btn text-primary" href="<?= site_url('interior_design') ?>">Find a Interior Designer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-5.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tools text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Fixing & Support</h4>
                        <p> Fixing and Support Service ensures that all installations, from structural elements to interior fixtures, are expertly handled and securely fitted. We provide professional support during and after installation, ensuring every component functions correctly and meets safety standards. Whether it’s plumbing, electrical systems, or custom fittings, our skilled team offers timely and reliable solutions to address any issues that may arise. Post-installation, we offer ongoing support and maintenance to keep your space in optimal condition, providing peace of mind and ensuring long-lasting quality in all aspects of your project.</p>
                        <a class="btn text-primary" href="<?= site_url('fixing_and_support') ?>">Find a Fixing & Supporter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-paint-brush text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Painting</h4>
                        <p>Painting Service brings new life to your space with professional, high-quality finishes for both interior and exterior surfaces. We use premium, eco-friendly paints that ensure durability and vibrant color while protecting your walls from wear and tear. Our experienced painters pay close attention to detail, providing smooth, even coats with precision in every brushstroke. Whether you're looking for a fresh look, a bold statement, or a subtle finish, we offer a wide range of colors and styles to suit your preferences. We also handle surface preparation and cleanup, ensuring a flawless and hassle-free painting experience.</p>
                        <a class="btn text-primary" href="<?= site_url('painting') ?>">Find a Painter</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-seedling text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Garden Design</h4>
                        <p> Garden Design Service transforms outdoor spaces into beautiful, functional, and sustainable landscapes. We create tailored garden layouts that blend aesthetics with the natural environment, ensuring harmony between architecture and nature. Whether you're envisioning a serene retreat, or a low-maintenance eco-garden, our expert designers work closely with you to bring your ideas to life. From plant selection and hardscaping to irrigation systems and lighting, every element is carefully planned to suit your style and enhance your outdoor living experience. Our focus on sustainability ensures that your garden thrives while being environmentally friendly.</p>
                        <a class="btn text-primary" href="<?= site_url('garden_design') ?>">Find a Garden Designer</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-couch text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Fernitures</h4>
                        <p>Furniture Service offers a curated selection of high-quality, stylish furnishings to enhance any space. We specialize in providing custom and ready-made pieces that blend functionality with aesthetic appeal, ensuring each item complements your interior design vision. Whether you’re looking for contemporary, traditional, or eclectic styles, our range includes everything from sofas and chairs to tables and storage solutions. We also provide personalized consultations to help you select the perfect furniture that fits your lifestyle, space, and budget. With a focus on craftsmanship and durability, we ensure that every piece not only looks great but stands the test of time.</p>
                        <a class="btn text-primary" href="<?= site_url('furniture') ?>">Find a Freniture Supplier </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tv text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Electrics</h4>
                        <p> Electrical Service delivers comprehensive solutions for all your electrical needs, ensuring safety, efficiency, and reliability. We specialize in installation, maintenance, and repairs, covering everything from lighting and wiring to circuit breakers and electrical panels. Our licensed electricians are trained to adhere to the highest safety standards, providing thorough inspections and troubleshooting to prevent potential hazards. Whether upgrading fixtures or implementing energy-efficient solutions, we offer tailored advice and solutions to meet your specific requirements.we ensure your electrical systems operate seamlessly and safely.</p>
                        <a class="btn text-primary" href="<?= site_url('electrics') ?>">Find a Electrical Supplier</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Dream Homes</h4>
                        <p>Our **Dream Homes Service** is dedicated to turning your vision of the perfect home into reality. We understand that a dream home is not just about aesthetics; it’s a reflection of your lifestyle, values, and aspirations. Our team of architects, designers, and builders collaborates with you from the initial concept to the final touches, ensuring every detail aligns with your desires. Whether you envision a modern minimalist retreat, a cozy cottage, or a luxurious family estate, we provide personalized solutions that prioritize comfort, functionality, and sustainability. With our expertise, your dream home will be a beautiful sanctuary tailored to your unique needs.</p>
                        <a class="btn text-primary" href="<?= site_url('dream_homes') ?>">Find a Dream Home</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Services End -->
    <hr>
    <!-- Portfolio Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Some Of Our <span class="text-primary">Popular</span> Dream Projects</h1>


            <div class="row">
                <?php foreach ($randomProjects as $project): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <?php
                            // Decode the JSON-encoded images for the project
                            $projectImages = json_decode($project['images'], true);
                            $imagePath = !empty($projectImages) ? base_url('uploads/services/' . $projectImages[0]) : base_url('uploads/projects/default.jpg');
                            ?>
                            <img src="<?= $imagePath ?>" class="card-img-top" alt="<?= esc($project['title']) ?>">

                            <div class="card-body">
                                <h5 class="card-title"><?= esc($project['title']) ?></h5>
                                <p class="card-text"><?= esc($project['description']) ?></p>
                                <a href="<?= site_url('projects') ?>" class="btn btn-primary">Projects</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>


    <hr>
    <!-- User Feedback Section Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">What Our <span class="text-primary">Users</span> Say</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-12">
                <div class="feedback bg-light">
                    <div class="owl-carousel feedback-carousel">
                        <?php if (!empty($feedbacks)): ?>
                            <?php foreach ($feedbacks as $feedback): ?>
                                <div class="feedback-item text-center bg-white p-4 rounded shadow-sm m-2">
                                    <h4 class="text-uppercase mb-2"><?= esc($feedback['name']) ?></h4>
                                    <p class="fs-5 text-muted mb-3">
                                        <i class="fa fa-2x fa-quote-left text-primary me-2"></i>
                                        <?= esc($feedback['feedback']) ?>
                                    </p>
                                    <small class="text-muted"><?= date('F j, Y', strtotime($feedback['created_at'])) ?></small>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-center">No feedback available at this time.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Feedback Section End -->


    <!-- Feedback Form Start -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Leave Your Feedback</h2>
        <form action="<?= site_url('feedback/submit') ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Your Feedback</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
        </form>
    </div>
    <!-- Feedback Form End -->











    <!--footer starts -->
    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- EcoHarmony Homes Description -->
                <div class="col-md-4">
                    <h5 class="text-orange">ECOHARMONY HOMES</h5>
                    <p>Creating sustainable, eco-friendly homes with a modern touch. Our mission is to lead the way in environmentally responsible construction and innovative home solutions.</p>
                    <div>
                        <a href="#" class="text-light me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <h5 class="text-orange">QUICK LINKS</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= site_url('about') ?>" class="text-light">About Us</a></li>
                        <li><a href="<?= site_url('projects') ?>" class="text-light">Projects</a></li>
                        <li><a href="<?= site_url('services') ?>" class="text-light">Services</a></li>
                        <li><a href="<?= site_url('contact') ?>" class="text-light">Contact</a></li>
                    </ul>
                </div>

                <!-- Login/Register Section -->
                <div class="col-md-4">
                    <h5 class="text-orange">STAY CONNECTED</h5>
                    <p>Connect with Our website for the latest updates on our services ,projects and sustainable building tips.</p>
                    <div class="mt-3">
                        <a href="<?= site_url('login') ?>" class="btn btn-outline-light me-2">Login</a>
                        <a href="<?= site_url('register') ?>" class="btn btn-outline-light">Register</a>
                    </div>
                </div>
            </div>
            <hr />
            <!-- Copyright Notice -->
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; <span id="currentYear"></span> EcoHarmony Homes. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer End-->

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
    <script>
        $(document).ready(function() {
            $('.feedback-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        });
    </script>







    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>