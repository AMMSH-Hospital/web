@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Your Health is Our <span class="text-success">Priority</span></h1>
                    <p class="lead mb-4">At MediCare Hospital, we provide exceptional healthcare services with state-of-the-art technology and a team of experienced medical professionals dedicated to your wellbeing.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-calendar-check me-2"></i>Book Appointment
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone-alt me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1516549655669-df6654e435de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" 
                         alt="Hospital Staff" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Our Services</h2>
                    <p class="text-muted">Comprehensive healthcare services for all your medical needs</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h4>Emergency Care</h4>
                        <p>24/7 emergency services with rapid response teams and advanced life support.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>OPD Services</h4>
                        <p>Outpatient department with specialist consultations and diagnostic services.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h4>ICU Facilities</h4>
                        <p>State-of-the-art intensive care units with round-the-clock monitoring.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h4>Pharmacy</h4>
                        <p>Well-stocked pharmacy with all essential medicines and professional guidance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Preview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Our Expert Doctors</h2>
                    <p class="text-muted">Meet our team of experienced and qualified medical professionals</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Sarah Johnson">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Sarah Johnson</h5>
                            <p class="card-text text-muted">Cardiologist</p>
                            <p class="card-text">MBBS, MD, DM (Cardiology), 15+ years experience</p>
                            <a href="doctor-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Michael Chen">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Michael Chen</h5>
                            <p class="card-text text-muted">Neurologist</p>
                            <p class="card-text">MBBS, MD, DM (Neurology), 12+ years experience</p>
                            <a href="doctor-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1594824434340-7e7dfc37cabb?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. Emily Rodriguez">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Emily Rodriguez</h5>
                            <p class="card-text text-muted">Pediatrician</p>
                            <p class="card-text">MBBS, MD, DCH, 10+ years experience</p>
                            <a href="doctor-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             class="card-img-top" alt="Dr. David Wilson">
                        <div class="card-body">
                            <h5 class="card-title">Dr. David Wilson</h5>
                            <p class="card-text text-muted">Orthopedic Surgeon</p>
                            <p class="card-text">MBBS, MS (Ortho), 18+ years experience</p>
                            <a href="doctor-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="doctors.html" class="btn btn-primary btn-lg">View All Doctors <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Appointment CTA -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Need to See a Doctor Today?</h2>
                    <p class="mb-0">Book an appointment with our specialist doctors. We ensure minimal waiting time and personalized care.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="appointment.html" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>Book Appointment Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Patient Testimonials</h2>
                    <p class="text-muted">What our patients say about our services</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <p class="mb-0">"The care I received at MediCare Hospital was exceptional. Dr. Johnson's expertise and the nursing staff's attention made my recovery smooth and comfortable."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Robert Johnson" class="author-img">
                            <div>
                                <h6 class="mb-0">Robert Johnson</h6>
                                <small class="text-muted">Cardiology Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <p class="mb-0">"From emergency admission to discharge, every staff member was professional and compassionate. The facilities are modern and clean. Highly recommended!"</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="Sarah Miller" class="author-img">
                            <div>
                                <h6 class="mb-0">Sarah Miller</h6>
                                <small class="text-muted">Pediatrics Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-4">
                    <div class="testimonial-card">
                        <p class="mb-0">"The orthopedic team at MediCare performed my knee replacement surgery with precision. The post-operative care and physiotherapy support were excellent."</p>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                 alt="James Wilson" class="author-img">
                            <div>
                                <h6 class="mb-0">James Wilson</h6>
                                <small class="text-muted">Orthopedics Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection