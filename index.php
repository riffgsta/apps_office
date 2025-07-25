<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITHSE - Innovative Technology Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span style="color: var(--secondary-color);">IT</span>HSE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?= ($_SESSION['username']) ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="auth/logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="auth/register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary me-2" href="auth/login.php">Login</a>
                        <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="animate__animated animate__fadeInDown">Innovative Technology Solutions</h1>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">We provide cutting-edge IT
                        solutions to transform your business and elevate your digital presence.</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#contact" class="btn btn-light btn-lg me-3" style="font-weight: 600;">Contact Us</a>
                        <a href="#services" class="btn btn-outline-light btn-lg" style="font-weight: 600;">Our
                            Services</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image animate__animated animate__fadeIn animate__delay-1s">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dcf991a8-33c2-4f68-ab9a-a918ea8a5330.png"
                            alt="Modern digital office with people working on computers and digital interfaces"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 my-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our Services</h2>
                <p class="text-muted">We offer comprehensive solutions to meet all your IT needs</p>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="feature-box animate__animated animate__fadeInUp">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Custom websites and web applications built with the latest technologies to ensure performance
                            and scalability.</p>
                        <a href="#" class="text-decoration-none">Learn more →</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Apps</h3>
                        <p>Cross-platform mobile applications that deliver seamless user experiences on all devices.</p>
                        <a href="#" class="text-decoration-none">Learn more →</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Cloud Solutions</h3>
                        <p>Secure and reliable cloud infrastructure and services to help your business scale
                            efficiently.</p>
                        <a href="#" class="text-decoration-none">Learn more →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bbde1814-aa8a-4638-9b61-172b991232ca.png"
                        alt="Professional team working in a modern office space with computers and whiteboards"
                        class="img-fluid rounded-3 animate__animated animate__fadeIn">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title text-start mb-4">About ITHSE</h2>
                    <p>ITHSE is a leading technology solutions provider with over 10 years of experience in delivering
                        innovative digital solutions to businesses of all sizes.</p>
                    <p>Our team of experts combines technical expertise with deep industry knowledge to create solutions
                        that drive real business results.</p>
                    <div class="mt-4">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="feature-icon" style="width: 50px; height: 50px;">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Proven Track Record</h5>
                                <p class="text-muted">Over 500 successful projects delivered to satisfied clients.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="feature-icon" style="width: 50px; height: 50px;">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Expert Team</h5>
                                <p class="text-muted">Certified professionals with diverse technical backgrounds.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="feature-icon" style="width: 50px; height: 50px;">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Customer Focus</h5>
                                <p class="text-muted">We prioritize your needs and deliver solutions tailored to your
                                    business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our Team</h2>
                <p class="text-muted">Meet our team of talented professionals</p>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-3">
                    <div class="team-member animate__animated animate__fadeInUp">
                        <div class="team-img">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0f839529-4fde-4f84-8119-f093140d031b.png"
                                alt="Portrait of professional male business executive with glasses and dark suit"
                                class="img-fluid">
                        </div>
                        <h4>Alex Johnson</h4>
                        <p class="text-muted">CEO & Founder</p>
                        <div>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="team-img">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/74a5e2d8-aff0-431c-b10e-18b196ce9a41.png"
                                alt="Professional female executive smiling in a business setting with modern office background"
                                class="img-fluid">
                        </div>
                        <h4>Sarah Williams</h4>
                        <p class="text-muted">CTO</p>
                        <div>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="team-img">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8f8b9190-ed59-4de5-8167-15eb1a491c5c.png"
                                alt="Confident male product manager wearing business casual attire in office environment"
                                class="img-fluid">
                        </div>
                        <h4>Michael Chen</h4>
                        <p class="text-muted">Product Manager</p>
                        <div>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="team-img">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e3b393c3-480f-451a-8874-7204207d4664.png"
                                alt="Female UI/UX designer with glasses working on digital tablet in creative studio"
                                class="img-fluid">
                        </div>
                        <h4>Emily Rodriguez</h4>
                        <p class="text-muted">Lead Designer</p>
                        <div>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title text-start mb-4">Get In Touch</h2>
                    <p>Have a project in mind or want to learn more about our services? Contact us today.</p>
                    <div class="mt-5">
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5>Our Office</h5>
                                <p class="text-muted">123 Tech Avenue, Silicon Valley, CA 94000</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <i class="fas fa-phone-alt fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p class="text-muted">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p class="text-muted">info@ithse.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Send us a message</h4>
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3>ITHSE</h3>
                    <p class="text-muted mt-3">Innovative Technology Solutions for a digital world. We help businesses
                        transform through technology.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Company</h5>
                    <div class="footer-links mt-3">
                        <a href="#">About Us</a>
                        <a href="#">Services</a>
                        <a href="#">Careers</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Services</h5>
                    <div class="footer-links mt-3">
                        <a href="#">Web Development</a>
                        <a href="#">Mobile Apps</a>
                        <a href="#">Cloud Solutions</a>
                        <a href="#">UI/UX Design</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Newsletter</h5>
                    <p class="text-muted mt-3">Subscribe to our newsletter for the latest updates and news.</p>
                    <div class="input-group mb-3 mt-3">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="mt-5" style="border-color: rgba(255, 255, 255, 0.1);">
            <div class="text-center py-3 text-muted">
                <small> <?php echo date("Y"); ?> ITHSE. All rights reserved.</small>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Waypoints for scroll animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script>
        // Navbar shrink on scroll
        window.addEventListener('scroll', function () {
            if (window.scrollY > 100) {
                document.querySelector('.navbar').style.paddingTop = '10px';
                document.querySelector('.navbar').style.paddingBottom = '10px';
                document.querySelector('.navbar').style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            } else {
                document.querySelector('.navbar').style.paddingTop = '20px';
                document.querySelector('.navbar').style.paddingBottom = '20px';
                document.querySelector('.navbar').style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.1)';
            }
        });
        // Initialize animations when scrolling to elements
        document.addEventListener('DOMContentLoaded', function () {
            // You can add more animation triggers here as needed
        });
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>