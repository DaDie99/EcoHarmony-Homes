<?= $this->include('partials/navbar') ?>

<head>
    <meta charset="utf-8">
    <title>EcoHarmony Homes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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

    <!-- Portfolio Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Some Of Our <span class="text-primary">Popular</span> Dream Projects</h1>
        </div>
        <div class="row gx-5">
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                    <ul class="list-inline mb-0" id="portfolio-flters">
                        <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                            <img src="img/portfolio-1.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">All</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                            <img src="img/portfolio-2.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Construction</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                            <img src="img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Renovation</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-5 portfolio-container">
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h4 text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</span>
                    </a>
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <div class="container mt-5">
        <h2 class="text-center mb-4">Featured Projects</h2>

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
                            <a  href="<?= site_url('projects') ?>" class="btn btn-primary">Projects</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>





    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">What Our <span class="text-primary">Happy Cleints</span> Say!!!</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                <img class="img-fluid w-100 h-100" src="img/testimonial.jpg">
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="testimonial bg-light">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                    clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                    lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                    ipsum.</p>
                            </div>
                        </div>
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                    clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                    lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                    ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Latest <span class="text-primary">Articles</span> From Our Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="35" height="35" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Rebum diam clita lorem erat magna est erat</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="35" height="35" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Rebum diam clita lorem erat magna est erat</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="35" height="35" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3">Rebum diam clita lorem erat magna est erat</h4>
                        <a class="text-uppercase fw-bold" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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