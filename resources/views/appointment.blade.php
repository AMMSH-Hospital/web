@extends('layouts.main')

@push('styles')
    <style>
        .appointment-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            position: relative;
        }
        
        .appointment-steps:before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #dee2e6;
            z-index: 1;
        }
        
        .step {
            text-align: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }
        
        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #dee2e6;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .step.active .step-circle {
            background-color: var(--primary-blue);
            color: white;
        }
        
        .step.completed .step-circle {
            background-color: var(--dark-green);
            color: white;
        }
        
        .step-label {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .step.active .step-label {
            color: var(--primary-blue);
            font-weight: 500;
        }
        
        .time-slot-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }
        
        .time-slot-option {
            padding: 10px;
            border: 2px solid #dee2e6;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .time-slot-option:hover {
            border-color: var(--primary-blue);
            background-color: var(--light-blue);
        }
        
        .time-slot-option.selected {
            border-color: var(--dark-green);
            background-color: var(--light-green);
            color: var(--dark-green);
            font-weight: 500;
        }
        
        .time-slot-option.unavailable {
            background-color: #f8f9fa;
            color: #adb5bd;
            cursor: not-allowed;
            text-decoration: line-through;
        }
        
        .doctor-option {
            border: 2px solid #dee2e6;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .doctor-option:hover {
            border-color: var(--primary-blue);
            background-color: var(--light-blue);
        }
        
        .doctor-option.selected {
            border-color: var(--dark-green);
            background-color: var(--light-green);
        }
        
        .doctor-img-small {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .form-section {
            display: none;
        }
        
        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
        }
        
        .required-field::after {
            content: " *";
            color: #dc3545;
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
                    <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">Book Your Appointment</h1>
                    <p class="lead text-muted">Schedule your visit with our expert medical professionals</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Form -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Appointment Steps -->
                    <div class="appointment-steps">
                        <div class="step active" id="step1">
                            <div class="step-circle">1</div>
                            <div class="step-label">Select Department</div>
                        </div>
                        <div class="step" id="step2">
                            <div class="step-circle">2</div>
                            <div class="step-label">Choose Doctor</div>
                        </div>
                        <div class="step" id="step3">
                            <div class="step-circle">3</div>
                            <div class="step-label">Select Date & Time</div>
                        </div>
                        <div class="step" id="step4">
                            <div class="step-circle">4</div>
                            <div class="step-label">Patient Details</div>
                        </div>
                        <div class="step" id="step5">
                            <div class="step-circle">5</div>
                            <div class="step-label">Confirmation</div>
                        </div>
                    </div>
                    
                    <div class="appointment-form">
                        <form class="needs-validation" novalidate id="appointmentForm">
                            <!-- Step 1: Select Department -->
                            <div class="form-section active" id="section1">
                                <h3 class="mb-4">Select Medical Department</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label required-field">Select Department</label>
                                        <select class="form-select" id="departmentSelect" required>
                                            <option value="" selected disabled>Choose a department</option>
                                            <option value="cardiology">Cardiology</option>
                                            <option value="neurology">Neurology</option>
                                            <option value="orthopedics">Orthopedics</option>
                                            <option value="pediatrics">Pediatrics</option>
                                            <option value="surgery">General Surgery</option>
                                            <option value="dentistry">Dentistry</option>
                                            <option value="emergency">Emergency Medicine</option>
                                            <option value="radiology">Radiology & Imaging</option>
                                            <option value="physiotherapy">Physiotherapy</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a department.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Appointment Type</label>
                                        <select class="form-select" id="appointmentType">
                                            <option value="new" selected>New Patient Consultation</option>
                                            <option value="followup">Follow-up Visit</option>
                                            <option value="emergency">Emergency Consultation</option>
                                            <option value="test">Diagnostic Test</option>
                                            <option value="surgery">Surgery Consultation</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="alert alert-info mt-4">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Note:</strong> If you're unsure about which department to choose, you can call our appointment desk at <strong>+1 (234) 567-8901</strong> for assistance.
                                </div>
                            </div>
                            
                            <!-- Step 2: Choose Doctor -->
                            <div class="form-section" id="section2">
                                <h3 class="mb-4">Select Doctor</h3>
                                <div id="doctorOptions">
                                    <!-- Doctors will be loaded dynamically based on department selection -->
                                    <div class="alert alert-info">
                                        Please select a department first to view available doctors.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 3: Select Date & Time -->
                            <div class="form-section" id="section3">
                                <h3 class="mb-4">Select Date & Time</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label required-field">Preferred Date</label>
                                        <input type="date" class="form-control" id="appointmentDate" required min="">
                                        <div class="invalid-feedback">
                                            Please select a date.
                                        </div>
                                        <div class="mt-2">
                                            <small class="text-muted">Note: Weekend appointments may have limited availability.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label required-field">Preferred Time Slot</label>
                                        <div class="time-slot-grid" id="timeSlots">
                                            <!-- Time slots will be loaded dynamically -->
                                            <div class="alert alert-info">
                                                Please select a date to view available time slots.
                                            </div>
                                        </div>
                                        <div class="invalid-feedback d-block" id="timeSlotError" style="display: none;">
                                            Please select a time slot.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>Important:</strong> Please arrive 15 minutes before your scheduled appointment time. Late arrivals may need to be rescheduled.
                                </div>
                            </div>
                            
                            <!-- Step 4: Patient Details -->
                            <div class="form-section" id="section4">
                                <h3 class="mb-4">Patient Information</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label required-field">Full Name</label>
                                        <input type="text" class="form-control" id="patientName" required>
                                        <div class="invalid-feedback">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="patientDOB">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label required-field">Mobile Number</label>
                                        <input type="tel" class="form-control" id="patientPhone" required pattern="[0-9]{10}">
                                        <div class="invalid-feedback">
                                            Please enter a valid 10-digit mobile number.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="patientEmail">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" id="patientGender">
                                            <option value="" selected disabled>Select gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                            <option value="prefer-not-to-say">Prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Patient Type</label>
                                        <select class="form-select" id="patientType">
                                            <option value="new" selected>New Patient</option>
                                            <option value="existing">Existing Patient</option>
                                            <option value="insurance">Insurance Patient</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Medical Problem / Reason for Visit</label>
                                    <textarea class="form-control" id="medicalProblem" rows="4" placeholder="Please describe your symptoms or reason for visit"></textarea>
                                    <div class="form-text">This information helps our doctors prepare for your consultation.</div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Previous Medical Records (if any)</label>
                                    <input type="file" class="form-control" id="medicalRecords" accept=".pdf,.jpg,.jpeg,.png">
                                    <div class="form-text">You can upload prescription, test reports, or other medical documents (Max: 5MB)</div>
                                </div>
                                
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="termsAgreement" required>
                                    <label class="form-check-label" for="termsAgreement">
                                        I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a> and privacy policy
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree to the terms and conditions.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 5: Confirmation -->
                            <div class="form-section" id="section5">
                                <h3 class="mb-4">Appointment Summary</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Appointment Details</h5>
                                                <p><strong>Department:</strong> <span id="summaryDepartment">-</span></p>
                                                <p><strong>Doctor:</strong> <span id="summaryDoctor">-</span></p>
                                                <p><strong>Date:</strong> <span id="summaryDate">-</span></p>
                                                <p><strong>Time:</strong> <span id="summaryTime">-</span></p>
                                                <p><strong>Type:</strong> <span id="summaryType">-</span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Patient Information</h5>
                                                <p><strong>Name:</strong> <span id="summaryName">-</span></p>
                                                <p><strong>Contact:</strong> <span id="summaryContact">-</span></p>
                                                <p><strong>Email:</strong> <span id="summaryEmail">-</span></p>
                                                <p><strong>Medical Issue:</strong> <span id="summaryIssue">-</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Important Notes</h5>
                                                <ul>
                                                    <li>Please arrive 15 minutes before your scheduled appointment</li>
                                                    <li>Bring your ID proof and any previous medical records</li>
                                                    <li>Consultation fee: $150 (New Patient) / $100 (Follow-up)</li>
                                                    <li>Cancellation must be made at least 24 hours in advance</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="alert alert-success mt-4">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <strong>Your appointment is ready to be confirmed!</strong> Click "Confirm Appointment" to complete the booking.
                                </div>
                            </div>
                            
                            <!-- Navigation Buttons -->
                            <div class="navigation-buttons">
                                <button type="button" class="btn btn-outline-primary" id="prevBtn" style="display: none;">
                                    <i class="fas fa-arrow-left me-2"></i>Previous
                                </button>
                                <button type="button" class="btn btn-primary ms-auto" id="nextBtn">
                                    Next <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                                <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">
                                    <i class="fas fa-calendar-check me-2"></i>Confirm Appointment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms & Conditions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5>Appointment Booking Terms</h5>
                    <p>By booking an appointment, you agree to the following terms and conditions:</p>
                    
                    <h6>1. Appointment Confirmation</h6>
                    <p>Appointments are confirmed only after receiving payment or confirmation call from our staff. We reserve the right to reschedule appointments if necessary.</p>
                    
                    <h6>2. Cancellation Policy</h6>
                    <p>Cancellations must be made at least 24 hours before the scheduled appointment time. Late cancellations may incur a cancellation fee.</p>
                    
                    <h6>3. Late Arrivals</h6>
                    <p>Patients arriving more than 15 minutes late may need to be rescheduled, depending on doctor availability.</p>
                    
                    <h6>4. Payment Terms</h6>
                    <p>Consultation fees are payable at the time of appointment. Additional charges may apply for diagnostic tests or procedures.</p>
                    
                    <h6>5. Privacy Policy</h6>
                    <p>Your medical information will be kept confidential in accordance with healthcare privacy laws. We may contact you for appointment reminders and follow-up care.</p>
                    
                    <h6>6. Emergency Cases</h6>
                    <p>In case of medical emergencies, walk-in patients will be given priority over scheduled appointments.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Appointment Form Wizard
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = 1;
            const totalSteps = 5;
            let selectedDoctor = null;
            let selectedTimeSlot = null;
            
            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('appointmentDate').min = today;
            
            // Department change event
            document.getElementById('departmentSelect').addEventListener('change', function() {
                loadDoctors(this.value);
            });
            
            // Date change event
            document.getElementById('appointmentDate').addEventListener('change', function() {
                loadTimeSlots(this.value);
            });
            
            // Next button click
            document.getElementById('nextBtn').addEventListener('click', function() {
                if (validateStep(currentStep)) {
                    if (currentStep < totalSteps) {
                        // Update step UI
                        document.getElementById(`step${currentStep}`).classList.remove('active');
                        document.getElementById(`step${currentStep}`).classList.add('completed');
                        document.getElementById(`section${currentStep}`).classList.remove('active');
                        
                        currentStep++;
                        
                        document.getElementById(`step${currentStep}`).classList.add('active');
                        document.getElementById(`section${currentStep}`).classList.add('active');
                        
                        // Update navigation buttons
                        updateNavigationButtons();
                        
                        // If moving to confirmation step, update summary
                        if (currentStep === 5) {
                            updateAppointmentSummary();
                        }
                    }
                }
            });
            
            // Previous button click
            document.getElementById('prevBtn').addEventListener('click', function() {
                if (currentStep > 1) {
                    // Update step UI
                    document.getElementById(`step${currentStep}`).classList.remove('active');
                    document.getElementById(`section${currentStep}`).classList.remove('active');
                    
                    currentStep--;
                    
                    document.getElementById(`step${currentStep}`).classList.add('active');
                    document.getElementById(`section${currentStep}`).classList.add('active');
                    
                    // Update navigation buttons
                    updateNavigationButtons();
                }
            });
            
            // Form submit
            document.getElementById('appointmentForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (validateStep(5)) {
                    // Show confirmation modal
                    const modal = new bootstrap.Modal(document.getElementById('appointmentConfirmationModal'));
                    modal.show();
                    
                    // Reset form after successful submission (for demo)
                    setTimeout(() => {
                        resetForm();
                    }, 2000);
                }
            });
            
            function validateStep(step) {
                let isValid = true;
                
                switch(step) {
                    case 1:
                        const department = document.getElementById('departmentSelect');
                        if (!department.value) {
                            department.classList.add('is-invalid');
                            isValid = false;
                        } else {
                            department.classList.remove('is-invalid');
                        }
                        break;
                        
                    case 2:
                        if (!selectedDoctor) {
                            showToast('Please select a doctor', 'warning');
                            isValid = false;
                        }
                        break;
                        
                    case 3:
                        const date = document.getElementById('appointmentDate');
                        if (!date.value) {
                            date.classList.add('is-invalid');
                            isValid = false;
                        } else {
                            date.classList.remove('is-invalid');
                        }
                        
                        if (!selectedTimeSlot) {
                            document.getElementById('timeSlotError').style.display = 'block';
                            isValid = false;
                        } else {
                            document.getElementById('timeSlotError').style.display = 'none';
                        }
                        break;
                        
                    case 4:
                        // Validate required fields
                        const requiredFields = ['patientName', 'patientPhone'];
                        requiredFields.forEach(fieldId => {
                            const field = document.getElementById(fieldId);
                            if (!field.value || (field.id === 'patientPhone' && !field.value.match(/^[0-9]{10}$/))) {
                                field.classList.add('is-invalid');
                                isValid = false;
                            } else {
                                field.classList.remove('is-invalid');
                            }
                        });
                        
                        // Validate email if provided
                        const email = document.getElementById('patientEmail');
                        if (email.value && !email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                            email.classList.add('is-invalid');
                            isValid = false;
                        } else {
                            email.classList.remove('is-invalid');
                        }
                        
                        // Validate terms agreement
                        const terms = document.getElementById('termsAgreement');
                        if (!terms.checked) {
                            terms.classList.add('is-invalid');
                            isValid = false;
                        } else {
                            terms.classList.remove('is-invalid');
                        }
                        break;
                }
                
                return isValid;
            }
            
            function updateNavigationButtons() {
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const submitBtn = document.getElementById('submitBtn');
                
                if (currentStep === 1) {
                    prevBtn.style.display = 'none';
                    nextBtn.style.display = 'inline-block';
                    submitBtn.style.display = 'none';
                } else if (currentStep === totalSteps) {
                    prevBtn.style.display = 'inline-block';
                    nextBtn.style.display = 'none';
                    submitBtn.style.display = 'inline-block';
                } else {
                    prevBtn.style.display = 'inline-block';
                    nextBtn.style.display = 'inline-block';
                    submitBtn.style.display = 'none';
                }
            }
            
            function loadDoctors(department) {
                const doctorOptions = document.getElementById('doctorOptions');
                
                // Simulate loading doctors based on department
                const doctors = {
                    'cardiology': [
                        { id: 1, name: 'Dr. Sarah Johnson', specialization: 'Senior Cardiologist', experience: '15+ years', img: 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' },
                        { id: 2, name: 'Dr. James Parker', specialization: 'Interventional Cardiologist', experience: '11+ years', img: 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' }
                    ],
                    'neurology': [
                        { id: 3, name: 'Dr. Michael Chen', specialization: 'Neurologist', experience: '12+ years', img: 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' },
                        { id: 4, name: 'Dr. Maria Garcia', specialization: 'Neurologist', experience: '8+ years', img: 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' }
                    ],
                    'orthopedics': [
                        { id: 5, name: 'Dr. David Wilson', specialization: 'Orthopedic Surgeon', experience: '18+ years', img: 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' },
                        { id: 6, name: 'Dr. Thomas Lee', specialization: 'Spine Specialist', experience: '13+ years', img: 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' }
                    ]
                };
                
                let html = '';
                
                if (doctors[department]) {
                    doctors[department].forEach(doctor => {
                        html += `
                            <div class="doctor-option" data-doctor-id="${doctor.id}" onclick="selectDoctor(${doctor.id}, '${doctor.name}')">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="${doctor.img}" alt="${doctor.name}" class="doctor-img-small">
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-1">${doctor.name}</h5>
                                        <p class="mb-1 text-muted">${doctor.specialization}</p>
                                        <p class="mb-0"><small>Experience: ${doctor.experience}</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle text-success" style="display: none;"></i>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                } else {
                    html = '<div class="alert alert-info">Doctors for this department will be displayed here. Please select a doctor to continue.</div>';
                }
                
                doctorOptions.innerHTML = html;
                selectedDoctor = null;
            }
            
            function loadTimeSlots(date) {
                const timeSlotsContainer = document.getElementById('timeSlots');
                
                // Generate time slots (9 AM to 4 PM)
                const slots = [
                    '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM',
                    '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM',
                    '2:00 PM', '2:30 PM', '3:00 PM', '3:30 PM', '4:00 PM'
                ];
                
                // Randomly mark some slots as unavailable for demo
                const unavailableSlots = ['9:30 AM', '11:00 AM', '2:30 PM'];
                
                let html = '';
                
                slots.forEach(slot => {
                    const isUnavailable = unavailableSlots.includes(slot);
                    html += `
                        <div class="time-slot-option ${isUnavailable ? 'unavailable' : ''}" 
                             data-time="${slot}" 
                             onclick="${isUnavailable ? '' : `selectTimeSlot('${slot}')`}">
                            ${slot}
                        </div>
                    `;
                });
                
                timeSlotsContainer.innerHTML = html;
                selectedTimeSlot = null;
            }
            
            function updateAppointmentSummary() {
                document.getElementById('summaryDepartment').textContent = 
                    document.getElementById('departmentSelect').options[document.getElementById('departmentSelect').selectedIndex].text;
                
                document.getElementById('summaryDoctor').textContent = selectedDoctor || '-';
                document.getElementById('summaryDate').textContent = document.getElementById('appointmentDate').value || '-';
                document.getElementById('summaryTime').textContent = selectedTimeSlot || '-';
                document.getElementById('summaryType').textContent = 
                    document.getElementById('appointmentType').options[document.getElementById('appointmentType').selectedIndex].text;
                
                document.getElementById('summaryName').textContent = document.getElementById('patientName').value || '-';
                document.getElementById('summaryContact').textContent = document.getElementById('patientPhone').value || '-';
                document.getElementById('summaryEmail').textContent = document.getElementById('patientEmail').value || '-';
                document.getElementById('summaryIssue').textContent = 
                    document.getElementById('medicalProblem').value.substring(0, 50) + 
                    (document.getElementById('medicalProblem').value.length > 50 ? '...' : '') || '-';
            }
            
            function resetForm() {
                currentStep = 1;
                selectedDoctor = null;
                selectedTimeSlot = null;
                
                // Reset steps UI
                for (let i = 1; i <= totalSteps; i++) {
                    document.getElementById(`step${i}`).classList.remove('active', 'completed');
                    document.getElementById(`section${i}`).classList.remove('active');
                }
                
                document.getElementById('step1').classList.add('active');
                document.getElementById('section1').classList.add('active');
                
                // Reset form fields
                document.getElementById('appointmentForm').reset();
                document.getElementById('appointmentForm').classList.remove('was-validated');
                
                // Reset dynamic content
                document.getElementById('doctorOptions').innerHTML = 
                    '<div class="alert alert-info">Please select a department first to view available doctors.</div>';
                document.getElementById('timeSlots').innerHTML = 
                    '<div class="alert alert-info">Please select a date to view available time slots.</div>';
                
                // Update navigation buttons
                updateNavigationButtons();
            }
            
            // Make functions available globally
            window.selectDoctor = function(doctorId, doctorName) {
                selectedDoctor = doctorName;
                
                // Update UI
                document.querySelectorAll('.doctor-option').forEach(option => {
                    option.classList.remove('selected');
                    option.querySelector('.fa-check-circle').style.display = 'none';
                });
                
                const selectedOption = document.querySelector(`.doctor-option[data-doctor-id="${doctorId}"]`);
                if (selectedOption) {
                    selectedOption.classList.add('selected');
                    selectedOption.querySelector('.fa-check-circle').style.display = 'block';
                }
            };
            
            window.selectTimeSlot = function(timeSlot) {
                selectedTimeSlot = timeSlot;
                
                // Update UI
                document.querySelectorAll('.time-slot-option:not(.unavailable)').forEach(option => {
                    option.classList.remove('selected');
                });
                
                const selectedOption = document.querySelector(`.time-slot-option[data-time="${timeSlot}"]`);
                if (selectedOption) {
                    selectedOption.classList.add('selected');
                }
                
                document.getElementById('timeSlotError').style.display = 'none';
            };
            
            // Initialize
            updateNavigationButtons();
        });
    </script>
@endpush
