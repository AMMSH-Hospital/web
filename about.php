<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Al Mutmainnah Maa O Shishu Haspatal</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
    <!-- Top Bar (Same as index.html) -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex gap-4">
                        <a href="tel:+1234567890"><i class="fas fa-phone-alt me-2"></i> Emergency: +1 (234) 567-890</a>
                        <a href="mailto:info@medicarehospital.com"><i class="fas fa-envelope me-2"></i> info@medicarehospital.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end gap-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar (Same as index.html) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Medi<span>Care</span> Hospital</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctors.html">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="departments.html">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="appointment.html">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <a href="appointment.html" class="btn btn-primary ms-lg-3 mt-3 mt-lg-0">Book Appointment</a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- About Hero Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">About <span class="text-primary">MediCare</span> Hospital</h1>
                    <p class="lead">Established in 1995, MediCare Hospital has been at the forefront of providing exceptional healthcare services to our community for over 25 years.</p>
                    <p>We are a multi-specialty hospital equipped with state-of-the-art technology and staffed by a team of highly qualified medical professionals dedicated to delivering compassionate and comprehensive care.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1516549655669-df6654e435de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" 
                         alt="Hospital Building" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-5">
                            <div class="service-icon mb-4">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="card-title mb-3">Our Mission</h3>
                            <p class="card-text">To provide accessible, high-quality healthcare services with compassion and respect for all individuals, utilizing advanced medical technology and evidence-based practices to promote healing and wellbeing.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-5">
                            <div class="service-icon mb-4">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="card-title mb-3">Our Vision</h3>
                            <p class="card-text">To be the leading healthcare institution recognized for excellence in patient care, medical education, and innovative research, while maintaining our commitment to community health and wellness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Counters -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Our Journey in Numbers</h2>
                    <p class="text-muted">Milestones that define our commitment to healthcare excellence</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="25">0</span>
                        <h5>Years of Service</h5>
                        <p class="text-muted">Serving the community since 1995</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="150">0</span>
                        <h5>Expert Doctors</h5>
                        <p class="text-muted">Specialized medical professionals</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="500">0</span>
                        <h5>Staff Members</h5>
                        <p class="text-muted">Dedicated healthcare personnel</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="50">0</span>
                        <h5>Departments</h5>
                        <p class="text-muted">Comprehensive medical specialties</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Our Facilities</h2>
                    <p class="text-muted">State-of-the-art infrastructure for comprehensive care</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1586773860418-dc22f8b874bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Emergency Ward">
                        <div class="card-body">
                            <h5 class="card-title">24/7 Emergency & Trauma Center</h5>
                            <p class="card-text">Fully equipped emergency department with rapid response teams, dedicated trauma bays, and advanced life support systems for critical care.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1584467735871-8db9ac8d0916?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="ICU">
                        <div class="card-body">
                            <h5 class="card-title">Advanced ICU Facilities</h5>
                            <p class="card-text">Modern intensive care units with multi-parameter monitors, ventilators, and dedicated critical care specialists for round-the-clock monitoring.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Diagnostic Center">
                        <div class="card-body">
                            <h5 class="card-title">Comprehensive Diagnostic Center</h5>
                            <p class="card-text">Advanced imaging services including MRI, CT Scan, Ultrasound, Digital X-Ray, and fully automated pathology laboratory for accurate diagnosis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Same as index.html) -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>MediCare Hospital</h5>
                    <p class="mt-3">Providing quality healthcare services with compassion and excellence since 1995. Our commitment is to your health and wellbeing.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="doctors.html">Doctors</a></li>
                        <li><a href="departments.html">Departments</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5>Our Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Emergency Care</a></li>
                        <li><a href="#">OPD Services</a></li>
                        <li><a href="#">ICU Facilities</a></li>
                        <li><a href="#">Diagnostic Services</a></li>
                        <li><a href="#">Pharmacy</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5>Contact Info</h5>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Health Street, Medical City</li>
                        <li><i class="fas fa-phone-alt me-2"></i> +1 (234) 567-8900</li>
                        <li><i class="fas fa-envelope me-2"></i> info@medicarehospital.com</li>
                        <li><i class="fas fa-clock me-2"></i> 24/7 Emergency Services</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p class="mb-0">&copy; 2023 MediCare Hospital. All Rights Reserved. | Designed with <i class="fas fa-heart text-danger"></i> for better healthcare</p>
            </div>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
        <button id="whatsappBtn" class="floating-btn whatsapp" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </button>
        <button id="emergencyBtn" class="floating-btn emergency" title="Emergency Call">
            <i class="fas fa-phone-alt"></i>
        </button>
        <button id="scrollToTop" class="floating-btn scroll-top" title="Scroll to Top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
