@extends('layouts.main')

@push('styles')
    <style>
        .qualification-list {
            list-style: none;
            padding: 0;
        }
        
        .qualification-list li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .qualification-list li:last-child {
            border-bottom: none;
        }
        
        .experience-item {
            background-color: var(--light-blue);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        
        .badge-specialization {
            background-color: var(--dark-green);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-right: 10px;
            margin-bottom: 10px;
            display: inline-block;
        }
        
        .schedule-table {
            width: 100%;
        }
        
        .schedule-table th {
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .schedule-table th:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }
        
        .time-slot {
            background-color: var(--light-green);
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: 500;
            display: inline-block;
            margin: 2px;
        }
        
        .time-slot.available {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .time-slot.booked {
            background-color: #fee2e2;
            color: #991b1b;
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
                    <li class="breadcrumb-item"><a href="doctors.html">Doctors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dr. Sarah Johnson</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctor Profile Header -->
    <section class="py-5">
        <div class="container">
            <div class="doctor-profile-header">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Sarah Johnson" class="profile-img">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="display-5 fw-bold mb-2">Dr. Sarah Johnson</h1>
                        <p class="lead text-primary mb-3">Senior Consultant Cardiologist</p>
                        
                        <div class="mb-4">
                            <span class="badge-specialization">Interventional Cardiology</span>
                            <span class="badge-specialization">Heart Failure Management</span>
                            <span class="badge-specialization">Preventive Cardiology</span>
                            <span class="badge-specialization">Echocardiography</span>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap text-primary me-2"></i> <strong>Qualification:</strong> MBBS, MD, DM (Cardiology)</p>
                                <p><i class="fas fa-briefcase text-primary me-2"></i> <strong>Experience:</strong> 15+ Years</p>
                            </div>
                            <div class="col-md-6">
                                <p><i class="fas fa-language text-primary me-2"></i> <strong>Languages:</strong> English, Spanish, French</p>
                                <p><i class="fas fa-star text-primary me-2"></i> <strong>Rating:</strong> 4.9/5 (247 Reviews)</p>
                            </div>
                        </div>
                        
                        <a href="#appointment" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-calendar-check me-2"></i>Book Appointment
                        </a>
                        <a href="tel:+1234567890" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone-alt me-2"></i>Contact Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Biography Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title">Biography</h2>
                    <p>Dr. Sarah Johnson is a highly accomplished cardiologist with over 15 years of experience in diagnosing and treating cardiovascular diseases. She completed her DM in Cardiology from the prestigious National Heart Institute and has been instrumental in advancing cardiac care in our region.</p>
                    
                    <p>Dr. Johnson specializes in interventional cardiology procedures including coronary angioplasty, stent placement, and complex cardiac catheterizations. She has performed over 5,000 successful cardiac procedures with a remarkable success rate of 98.7%.</p>
                    
                    <p>Her research work has been published in several international cardiology journals, and she regularly participates in global cardiology conferences as a keynote speaker. Dr. Johnson is passionate about preventive cardiology and believes in educating patients about heart-healthy lifestyles.</p>
                    
                    <h4 class="mt-5 mb-3">Professional Experience</h4>
                    <div class="experience-item">
                        <h5>Senior Consultant Cardiologist</h5>
                        <p class="text-primary mb-1">MediCare Hospital • 2015 - Present</p>
                        <p>Leading the cardiology department, performing advanced cardiac interventions, training fellows, and conducting research in preventive cardiology.</p>
                    </div>
                    
                    <div class="experience-item">
                        <h5>Consultant Cardiologist</h5>
                        <p class="text-primary mb-1">City Heart Center • 2010 - 2015</p>
                        <p>Managed outpatient cardiology clinic, performed diagnostic and interventional procedures, established cardiac rehabilitation program.</p>
                    </div>
                    
                    <div class="experience-item">
                        <h5>Cardiology Fellow</h5>
                        <p class="text-primary mb-1">National Heart Institute • 2007 - 2010</p>
                        <p>Completed advanced fellowship in interventional cardiology under renowned cardiologists.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Qualifications</h4>
                            <ul class="qualification-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> MBBS - University of Medical Sciences (2003)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> MD (General Medicine) - Advanced Medical College (2006)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> DM (Cardiology) - National Heart Institute (2010)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Fellowship in Interventional Cardiology (2011)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Advanced Cardiac Life Support (ACLS) Certified</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Fellow of American College of Cardiology (FACC)</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Contact Information</h4>
                            <p><i class="fas fa-phone-alt text-primary me-2"></i> <strong>Phone:</strong> +1 (234) 567-8910</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> <strong>Email:</strong> s.johnson@medicarehospital.com</p>
                            <p><i class="fas fa-map-marker-alt text-primary me-2"></i> <strong>Clinic:</strong> Cardiology Department, 3rd Floor</p>
                            <p><i class="fas fa-clock text-primary me-2"></i> <strong>Consultation Fee:</strong> $150 (Follow-up: $100)</p>
                            <hr>
                            <p class="text-muted"><small><i class="fas fa-info-circle me-2"></i> Please bring previous medical records during your first visit.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="py-5" id="appointment">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">Weekly Schedule</h2>
                    <p class="text-muted">Book an appointment during available time slots</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="schedule-table table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th onclick="sortSchedule(1)" style="width: 15%;">
                                        Day <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortSchedule(2)" style="width: 15%;">
                                        Date <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortSchedule(3)" style="width: 30%;">
                                        Time Slots <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortSchedule(4)" style="width: 20%;">
                                        Availability <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>Next Week</td>
                                    <td>
                                        <span class="time-slot available">9:00 AM</span>
                                        <span class="time-slot available">10:00 AM</span>
                                        <span class="time-slot available">11:00 AM</span>
                                        <span class="time-slot booked">12:00 PM</span>
                                        <span class="time-slot available">2:00 PM</span>
                                        <span class="time-slot available">3:00 PM</span>
                                    </td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookSlotModal">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>Next Week</td>
                                    <td>
                                        <span class="time-slot booked">9:00 AM</span>
                                        <span class="time-slot available">10:00 AM</span>
                                        <span class="time-slot booked">11:00 AM</span>
                                        <span class="time-slot available">12:00 PM</span>
                                        <span class="time-slot available">2:00 PM</span>
                                        <span class="time-slot available">3:00 PM</span>
                                    </td>
                                    <td><span class="badge bg-warning">Limited</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookSlotModal">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>Next Week</td>
                                    <td>
                                        <span class="time-slot available">9:00 AM</span>
                                        <span class="time-slot available">10:00 AM</span>
                                        <span class="time-slot available">11:00 AM</span>
                                        <span class="time-slot available">12:00 PM</span>
                                        <span class="time-slot available">2:00 PM</span>
                                        <span class="time-slot available">3:00 PM</span>
                                    </td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookSlotModal">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>Next Week</td>
                                    <td>
                                        <span class="time-slot booked">9:00 AM</span>
                                        <span class="time-slot booked">10:00 AM</span>
                                        <span class="time-slot available">11:00 AM</span>
                                        <span class="time-slot available">12:00 PM</span>
                                        <span class="time-slot booked">2:00 PM</span>
                                        <span class="time-slot available">3:00 PM</span>
                                    </td>
                                    <td><span class="badge bg-warning">Limited</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookSlotModal">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>Next Week</td>
                                    <td>
                                        <span class="time-slot available">9:00 AM</span>
                                        <span class="time-slot available">10:00 AM</span>
                                        <span class="time-slot available">11:00 AM</span>
                                        <span class="time-slot available">12:00 PM</span>
                                        <span class="time-slot available">2:00 PM</span>
                                        <span class="time-slot available">3:00 PM</span>
                                    </td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookSlotModal">Book Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>Next Week</td>
                                    <td>
                                        <span class="time-slot booked">9:00 AM</span>
                                        <span class="time-slot booked">10:00 AM</span>
                                        <span class="time-slot booked">11:00 AM</span>
                                        <span class="time-slot booked">12:00 PM</span>
                                        <span class="time-slot">--</span>
                                        <span class="time-slot">--</span>
                                    </td>
                                    <td><span class="badge bg-danger">Full</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary" disabled>Full</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Note:</strong> Appointments are confirmed only after payment. Please arrive 15 minutes before your scheduled time. Emergency cases are given priority.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Slot Modal -->
    <div class="modal fade" id="bookSlotModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book Appointment with Dr. Sarah Johnson</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Selected Time Slot</label>
                            <input type="text" class="form-control" value="Wednesday, 10:00 AM" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Patient Name *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact Number *</label>
                            <input type="tel" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reason for Visit</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="termsCheck">
                            <label class="form-check-label" for="termsCheck">
                                I agree to the terms and conditions
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="bookAppointment()">Confirm Booking</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function bookAppointment() {
            const modal = bootstrap.Modal.getInstance(document.getElementById('bookSlotModal'));
            modal.hide();
            
            // Show success message
            const toastContainer = document.getElementById('toastContainer') || createToastContainer();
            const toastId = 'toast-' + Date.now();
            
            toastContainer.insertAdjacentHTML('beforeend', `
                <div id="${toastId}" class="toast align-items-center text-bg-success border-0" role="alert">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="fas fa-check-circle me-2"></i>
                            Appointment request sent successfully! We'll contact you shortly for confirmation.
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                </div>
            `);
            
            const toast = new bootstrap.Toast(document.getElementById(toastId), { delay: 5000 });
            toast.show();
            
            setTimeout(() => {
                document.getElementById(toastId).remove();
            }, 5000);
        }
        
        function createToastContainer() {
            const container = document.createElement('div');
            container.id = 'toastContainer';
            container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
            document.body.appendChild(container);
            return container;
        }
    </script>
@endpush