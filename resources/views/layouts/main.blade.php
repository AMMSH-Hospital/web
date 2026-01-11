<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Hospital - Quality Healthcare Services</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    @stack('styles')
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
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
            <a class="navbar-brand" href="{{ route('index') }}">Medi<span>Care</span> Hospital</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('doctors') ? 'active' : '' }}" href="{{ route('doctors') }}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('departments') ? 'active' : '' }}" href="{{ route('departments') }}">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('appointment') ? 'active' : '' }}" href="{{ route('appointment') }}">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <a href="{{ route('appointment') }}" class="btn btn-primary ms-lg-3 mt-3 mt-lg-0">Book Appointment</a>
            </div>
        </div>
    </nav>

    @yield('content')

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

    <!-- Appointment Confirmation Modal -->
    <div class="modal fade" id="appointmentConfirmationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Appointment Confirmed!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center p-5">
                    <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                    <h4 class="mb-3">Thank You!</h4>
                    <p>Your appointment has been successfully booked. Our team will contact you shortly for confirmation.</p>
                    <p class="text-muted">A confirmation email has been sent to your registered email address.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>

    @stack('scripts')
</body>
</html>