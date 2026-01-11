@extends('layouts.main')

@section('content')
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

@endsection