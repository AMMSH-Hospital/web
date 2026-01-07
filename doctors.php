<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors - MediCare Hospital</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <style>
        .filter-buttons {
            margin-bottom: 30px;
        }
        
        .filter-btn {
            margin: 0 5px 10px;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        
        .filter-btn.active {
            background-color: var(--primary-blue);
            color: var(--primary-green);
        }
        
        .doctor-card {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        
        .visiting-time {
            background-color: var(--light-green);
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .department-badge {
            background-color: var(--light-blue);
            color: var(--primary-blue);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
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
                        <a class="nav-link active" href="doctors.html">Doctors</a>
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
                    <li class="breadcrumb-item active" aria-current="page">Our Doctors</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctors Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">Meet Our Expert Doctors</h1>
                    <p class="lead text-muted">Our team of experienced medical professionals is dedicated to providing you with the highest quality care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Filter -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center filter-buttons">
                    <h5 class="mb-3">Filter by Department:</h5>
                    <div class="d-flex flex-wrap justify-content-center">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">All Doctors</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="cardiology">Cardiology</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="neurology">Neurology</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="orthopedics">Orthopedics</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="pediatrics">Pediatrics</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="surgery">Surgery</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="dentistry">Dentistry</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="doctorsGrid">
                <!-- Doctor 1 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="cardiology">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Sarah Johnson">
                        <div class="card-body">
                            <span class="department-badge">Cardiology</span>
                            <h5 class="card-title mt-3">Dr. Sarah Johnson</h5>
                            <p class="card-text text-muted">Senior Consultant Cardiologist</p>
                            <p class="card-text">MBBS, MD, DM (Cardiology)</p>
                            <p class="card-text">15+ years of experience in interventional cardiology and heart failure management.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Mon, Wed, Fri: 9:00 AM - 4:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 2 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="neurology">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Michael Chen">
                        <div class="card-body">
                            <span class="department-badge">Neurology</span>
                            <h5 class="card-title mt-3">Dr. Michael Chen</h5>
                            <p class="card-text text-muted">Consultant Neurologist</p>
                            <p class="card-text">MBBS, MD, DM (Neurology)</p>
                            <p class="card-text">Specialized in stroke management, epilepsy, and movement disorders with 12+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Tue, Thu, Sat: 10:00 AM - 5:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 3 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="orthopedics">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. David Wilson">
                        <div class="card-body">
                            <span class="department-badge">Orthopedics</span>
                            <h5 class="card-title mt-3">Dr. David Wilson</h5>
                            <p class="card-text text-muted">Senior Orthopedic Surgeon</p>
                            <p class="card-text">MBBS, MS (Ortho), MCh</p>
                            <p class="card-text">Expert in joint replacement, arthroscopic surgeries and sports injuries with 18+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Mon-Fri: 8:00 AM - 3:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 4 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="pediatrics">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1594824434340-7e7dfc37cabb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Emily Rodriguez">
                        <div class="card-body">
                            <span class="department-badge">Pediatrics</span>
                            <h5 class="card-title mt-3">Dr. Emily Rodriguez</h5>
                            <p class="card-text text-muted">Pediatric Specialist</p>
                            <p class="card-text">MBBS, MD, DCH</p>
                            <p class="card-text">Specialized in child healthcare, vaccinations, and developmental pediatrics with 10+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Mon-Sat: 9:00 AM - 2:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 5 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="surgery">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Robert Miller">
                        <div class="card-body">
                            <span class="department-badge">General Surgery</span>
                            <h5 class="card-title mt-3">Dr. Robert Miller</h5>
                            <p class="card-text text-muted">General & Laparoscopic Surgeon</p>
                            <p class="card-text">MBBS, MS, FICS</p>
                            <p class="card-text">Expert in minimally invasive surgeries, gastrointestinal surgeries with 14+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Mon, Wed, Fri: 8:30 AM - 4:30 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 6 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="dentistry">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1622902046581-3c9c04c0d5a5?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Lisa Anderson">
                        <div class="card-body">
                            <span class="department-badge">Dentistry</span>
                            <h5 class="card-title mt-3">Dr. Lisa Anderson</h5>
                            <p class="card-text text-muted">Dental Surgeon</p>
                            <p class="card-text">BDS, MDS (Prosthodontics)</p>
                            <p class="card-text">Specialized in cosmetic dentistry, dental implants, and oral rehabilitation with 9+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Tue, Thu, Sat: 10:00 AM - 6:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 7 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="cardiology">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. James Parker">
                        <div class="card-body">
                            <span class="department-badge">Cardiology</span>
                            <h5 class="card-title mt-3">Dr. James Parker</h5>
                            <p class="card-text text-muted">Interventional Cardiologist</p>
                            <p class="card-text">MBBS, MD, DM (Cardiology)</p>
                            <p class="card-text">Expert in coronary interventions, pacemaker implantation with 11+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Mon, Tue, Thu: 9:00 AM - 3:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 8 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="neurology">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Maria Garcia">
                        <div class="card-body">
                            <span class="department-badge">Neurology</span>
                            <h5 class="card-title mt-3">Dr. Maria Garcia</h5>
                            <p class="card-text text-muted">Neurologist</p>
                            <p class="card-text">MBBS, MD, DM (Neurology)</p>
                            <p class="card-text">Specialized in headache disorders, multiple sclerosis with 8+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Wed, Fri, Sat: 11:00 AM - 6:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Doctor 9 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="orthopedics">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Thomas Lee">
                        <div class="card-body">
                            <span class="department-badge">Orthopedics</span>
                            <h5 class="card-title mt-3">Dr. Thomas Lee</h5>
                            <p class="card-text text-muted">Spine Specialist</p>
                            <p class="card-text">MBBS, MS (Ortho), FNB (Spine)</p>
                            <p class="card-text">Expert in spinal surgeries, disc replacement with 13+ years experience.</p>
                            
                            <div class="visiting-time">
                                <p class="mb-1"><strong>Visiting Time:</strong></p>
                                <p class="mb-0">Tue, Thu, Sat: 9:00 AM - 4:00 PM</p>
                            </div>
                            
                            <div class="mt-4">
                                <a href="doctor-profile.html" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Doctors pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Can't Find Your Preferred Doctor?</h2>
                    <p class="mb-0">Contact our appointment desk and we'll help you find the right specialist for your needs.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="appointment.html" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>Book Appointment
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
    
    <script>
        // Doctor Filter Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const doctorCards = document.querySelectorAll('.doctor-card');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter doctor cards
                    doctorCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1)';
                            }, 100);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>