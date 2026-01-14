@extends('layouts.main')
@push('styles')
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
@endpush

@section('content')
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
@endsection