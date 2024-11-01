<?= $this->include('partials/navbar') ?>

<head>
    <base href="<?= base_url() ?>/">

    <meta charset="UTF-8">
    <title>Projects - EcoHarmony Homes</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
</head>

<body>


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