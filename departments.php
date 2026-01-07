<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Departments - MediCare Hospital</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <style>
        .department-card {
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .department-icon {
            font-size: 3.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .department-card:hover .department-icon {
            transform: scale(1.1);
        }
        
        .department-services {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }
        
        .department-services li {
            padding: 5px 0;
            border-bottom: 1px dashed #eee;
        }
        
        .department-services li:last-child {
            border-bottom: none;
        }
        
        .department-services li i {
            color: var(--dark-green);
            margin-right: 10px;
        }
        
        .department-features {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
        
        .feature-item {
            text-align: center;
        }
        
        .feature-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-blue);
            display: block;
        }
        
        .feature-label {
            font-size: 0.85rem;
            color: #666;
        }
        
        .department-cta {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
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

    <!-- Navbar -->
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
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctors.html">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="departments.html">Departments</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Medical Departments</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Departments Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">Our Medical Departments</h1>
                    <p class="lead text-muted">Comprehensive healthcare services across multiple specialties</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Cardiology Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h4 class="card-title mb-3">Cardiology</h4>
                            <p class="card-text">Comprehensive heart care with advanced diagnostic and interventional cardiology services.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Echocardiography</li>
                                <li><i class="fas fa-check"></i> Angioplasty & Stenting</li>
                                <li><i class="fas fa-check"></i> Pacemaker Implantation</li>
                                <li><i class="fas fa-check"></i> Cardiac Rehabilitation</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">8</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">24/7</span>
                                    <span class="feature-label">Cath Lab</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">50+</span>
                                    <span class="feature-label">Beds</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="doctors.html?department=cardiology" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Doctors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Neurology Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h4 class="card-title mb-3">Neurology</h4>
                            <p class="card-text">Advanced neurological care for brain, spine, and nerve disorders with cutting-edge technology.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> EEG & EMG Studies</li>
                                <li><i class="fas fa-check"></i> Stroke Management</li>
                                <li><i class="fas fa-check"></i> Epilepsy Treatment</li>
                                <li><i class="fas fa-check"></i> Movement Disorders</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">6</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">3T</span>
                                    <span class="feature-label">MRI</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">30+</span>
                                    <span class="feature-label">Beds</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="doctors.html?department=neurology" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Doctors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Orthopedics Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-bone"></i>
                            </div>
                            <h4 class="card-title mb-3">Orthopedics</h4>
                            <p class="card-text">Comprehensive bone and joint care with advanced surgical and non-surgical treatments.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Joint Replacement</li>
                                <li><i class="fas fa-check"></i> Arthroscopic Surgery</li>
                                <li><i class="fas fa-check"></i> Spine Surgery</li>
                                <li><i class="fas fa-check"></i> Sports Injury</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">9</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">4</span>
                                    <span class="feature-label">OTs</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">60+</span>
                                    <span class="feature-label">Beds</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="doctors.html?department=orthopedics" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Doctors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pediatrics Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <h4 class="card-title mb-3">Pediatrics</h4>
                            <p class="card-text">Specialized care for children from newborns to adolescents in a child-friendly environment.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Vaccination</li>
                                <li><i class="fas fa-check"></i> Neonatal ICU</li>
                                <li><i class="fas fa-check"></i> Growth Monitoring</li>
                                <li><i class="fas fa-check"></i> Adolescent Care</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">7</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">Level 3</span>
                                    <span class="feature-label">NICU</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">40+</span>
                                    <span class="feature-label">Beds</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="doctors.html?department=pediatrics" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Doctors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- General Surgery Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-syringe"></i>
                            </div>
                            <h4 class="card-title mb-3">General Surgery</h4>
                            <p class="card-text">Advanced surgical care with minimally invasive techniques for various conditions.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Laparoscopic Surgery</li>
                                <li><i class="fas fa-check"></i> Gastrointestinal Surgery</li>
                                <li><i class="fas fa-check"></i> Trauma Surgery</li>
                                <li><i class="fas fa-check"></i> Endoscopic Procedures</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">8</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">6</span>
                                    <span class="feature-label">OTs</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">50+</span>
                                    <span class="feature-label">Beds</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="doctors.html?department=surgery" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Doctors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Dentistry Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-tooth"></i>
                            </div>
                            <h4 class="card-title mb-3">Dentistry</h4>
                            <p class="card-text">Complete dental care including cosmetic dentistry, implants, and oral surgery.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Dental Implants</li>
                                <li><i class="fas fa-check"></i> Cosmetic Dentistry</li>
                                <li><i class="fas fa-check"></i> Orthodontics</li>
                                <li><i class="fas fa-check"></i> Oral Surgery</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">5</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">CBCT</span>
                                    <span class="feature-label">Scan</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">12</span>
                                    <span class="feature-label">Chairs</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="doctors.html?department=dentistry" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Doctors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Emergency Medicine -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-ambulance"></i>
                            </div>
                            <h4 class="card-title mb-3">Emergency Medicine</h4>
                            <p class="card-text">24/7 emergency care with rapid response teams and advanced life support systems.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Trauma Care</li>
                                <li><i class="fas fa-check"></i> Cardiac Emergency</li>
                                <li><i class="fas fa-check"></i> Poison Management</li>
                                <li><i class="fas fa-check"></i> Critical Care</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">15</span>
                                    <span class="feature-label">Doctors</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">24/7</span>
                                    <span class="feature-label">Service</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">30+</span>
                                    <span class="feature-label">Beds</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="contact.html" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-phone-alt me-2"></i>Emergency Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Radiology & Imaging -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-x-ray"></i>
                            </div>
                            <h4 class="card-title mb-3">Radiology & Imaging</h4>
                            <p class="card-text">Advanced diagnostic imaging services with cutting-edge technology for accurate diagnosis.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> MRI & CT Scan</li>
                                <li><i class="fas fa-check"></i> Digital X-Ray</li>
                                <li><i class="fas fa-check"></i> Ultrasound</li>
                                <li><i class="fas fa-check"></i> Mammography</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">8</span>
                                    <span class="feature-label">Radiologists</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">3T</span>
                                    <span class="feature-label">MRI</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">256</span>
                                    <span class="feature-label">Slice CT</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="appointment.html" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-calendar-alt me-2"></i>Book Test
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Physiotherapy -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h4 class="card-title mb-3">Physiotherapy</h4>
                            <p class="card-text">Comprehensive rehabilitation services for recovery from injuries and surgeries.</p>
                            
                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> Pain Management</li>
                                <li><i class="fas fa-check"></i> Sports Rehabilitation</li>
                                <li><i class="fas fa-check"></i> Neurological Rehab</li>
                                <li><i class="fas fa-check"></i> Post-Surgical Rehab</li>
                            </ul>
                            
                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">6</span>
                                    <span class="feature-label">Therapists</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">15</span>
                                    <span class="feature-label">Machines</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">500+</span>
                                    <span class="feature-label">Patients/month</span>
                                </div>
                            </div>
                            
                            <div class="department-cta">
                                <a href="appointment.html" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-calendar-alt me-2"></i>Book Session
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Need Specialized Care?</h2>
                    <p class="mb-0">Our expert doctors are available for consultations. Book an appointment with the right specialist for your healthcare needs.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="appointment.html" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>Book Appointment Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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