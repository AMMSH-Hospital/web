@push('styles')
    <style>
        .contact-info-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: transform 0.3s ease;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--light-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: var(--primary-blue);
        }
        
        .emergency-contact {
            background-color: #fee2e2;
            border-left: 4px solid #dc3545;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        
        .opening-hours {
            background-color: var(--light-green);
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }
        
        .hours-table {
            width: 100%;
        }
        
        .hours-table tr {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .hours-table tr:last-child {
            border-bottom: none;
        }
        
        .hours-table td {
            padding: 10px 0;
        }
        
        .hours-table td:last-child {
            text-align: right;
            font-weight: 500;
        }
        
        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            min-height: 400px;
        }
        
        .contact-form-card {
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
        }
        
        .department-contact {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 15px;
        }
        
        .quick-contact-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 30px;
        }
        
        .quick-contact-btn {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            text-decoration: none;
            color: var(--dark-gray);
            transition: all 0.3s ease;
        }
        
        .quick-contact-btn:hover {
            background-color: var(--light-blue);
            border-color: var(--primary-blue);
            transform: translateY(-2px);
        }
        
        .quick-contact-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-blue);
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
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">Contact Us</h1>
                    <p class="lead text-muted">Get in touch with us for any inquiries or medical assistance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Our Location</h4>
                        <p class="mb-0">123 Health Street, Medical City<br>Healthcare District, HC 12345<br>United States</p>
                        
                        <div class="emergency-contact">
                            <h5><i class="fas fa-ambulance me-2 text-danger"></i>Emergency Contact</h5>
                            <p class="mb-1"><strong>Ambulance:</strong> +1 (234) 567-8911</p>
                            <p class="mb-0"><strong>Emergency Desk:</strong> +1 (234) 567-8912</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Phone Numbers</h4>
                        <p class="mb-2"><strong>Main Reception:</strong> +1 (234) 567-8900</p>
                        <p class="mb-2"><strong>Appointment Desk:</strong> +1 (234) 567-8901</p>
                        <p class="mb-2"><strong>Billing & Insurance:</strong> +1 (234) 567-8902</p>
                        <p class="mb-0"><strong>Medical Records:</strong> +1 (234) 567-8903</p>
                        
                        <div class="opening-hours">
                            <h5><i class="fas fa-clock me-2"></i>Opening Hours</h5>
                            <table class="hours-table">
                                <tr>
                                    <td>Monday - Friday</td>
                                    <td>7:00 AM - 9:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>8:00 AM - 6:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>9:00 AM - 4:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Emergency</td>
                                    <td>24/7 Open</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email & Online</h4>
                        <p class="mb-2"><strong>General Inquiries:</strong> info@medicarehospital.com</p>
                        <p class="mb-2"><strong>Appointments:</strong> appointments@medicarehospital.com</p>
                        <p class="mb-2"><strong>Feedback & Complaints:</strong> feedback@medicarehospital.com</p>
                        <p class="mb-0"><strong>Career Opportunities:</strong> careers@medicarehospital.com</p>
                        
                        <div class="mt-4">
                            <h5>Follow Us</h5>
                            <div class="d-flex gap-3 mt-3">
                                <a href="#" class="text-primary"><i class="fab fa-facebook-f fa-2x"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-instagram fa-2x"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-linkedin-in fa-2x"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-youtube fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Contact Buttons -->
            <div class="quick-contact-buttons mt-5">
                <a href="tel:+12345678900" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Call Now</h6>
                        <p class="mb-0 text-muted">+1 (234) 567-8900</p>
                    </div>
                </a>
                
                <a href="appointment.html" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Book Appointment</h6>
                        <p class="mb-0 text-muted">Online booking</p>
                    </div>
                </a>
                
                <a href="mailto:info@medicarehospital.com" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Send Email</h6>
                        <p class="mb-0 text-muted">info@medicarehospital.com</p>
                    </div>
                </a>
                
                <a href="#" onclick="initiateChat()" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Live Chat</h6>
                        <p class="mb-0 text-muted">24/7 Support</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Map & Contact Form -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h3 class="section-title mb-4">Find Us Here</h3>
                    <div class="map-container">
                        <!-- Google Maps Embed -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.177858804427!2d-73.98784468459418!3d40.70555197933205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a315cdf4c9b%3A0x8b934de5cae6f7a!2sHealthcare%20District!5e0!3m2!1sen!2sus!4v1623456789012!5m2!1sen!2sus" 
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5>Parking Information</h5>
                            <p class="mb-0"><small>Ample parking available in the hospital premises. Valet service available at main entrance.</small></p>
                        </div>
                        <div class="col-md-6">
                            <h5>Public Transport</h5>
                            <p class="mb-0"><small>Bus lines: 101, 205, 307<br>Subway: Medical Center Station (Line 4)</small></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="contact-form-card">
                        <h3 class="section-title mb-4">Send Us a Message</h3>
                        <form class="needs-validation" novalidate id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">Full Name</label>
                                    <input type="text" class="form-control" id="contactName" required>
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">Email Address</label>
                                    <input type="email" class="form-control" id="contactEmail" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="contactPhone">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label required-field">Subject</label>
                                <select class="form-select" id="contactSubject" required>
                                    <option value="" selected disabled>Select a subject</option>
                                    <option value="appointment">Appointment Inquiry</option>
                                    <option value="billing">Billing & Insurance</option>
                                    <option value="feedback">Feedback & Complaints</option>
                                    <option value="medical">Medical Records</option>
                                    <option value="career">Career Opportunities</option>
                                    <option value="other">Other Inquiry</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a subject.
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label required-field">Message</label>
                                <textarea class="form-control" id="contactMessage" rows="5" required></textarea>
                                <div class="invalid-feedback">
                                        Please enter your message.
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="contactNewsletter">
                                    <label class="form-check-label" for="contactNewsletter">
                                        Subscribe to our newsletter for health tips and updates
                                    </label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Contacts -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Department Contacts</h2>
                    <p class="text-muted">Direct contact numbers for specific departments</p>
                </div>
            </div>
            
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">Cardiology Department</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +1 (234) 567-8915</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> cardiology@medicarehospital.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">Emergency Department</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +1 (234) 567-8912</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> emergency@medicarehospital.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">Pediatrics Department</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +1 (234) 567-8916</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> pediatrics@medicarehospital.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">Radiology Department</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +1 (234) 567-8917</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> radiology@medicarehospital.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">Billing Department</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +1 (234) 567-8902</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> billing@medicarehospital.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">Pharmacy</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +1 (234) 567-8918</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> pharmacy@medicarehospital.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">Frequently Asked Questions</h2>
                    <p class="text-muted">Quick answers to common questions</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="contactFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What are your visiting hours?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    General visiting hours are from 10:00 AM to 8:00 PM daily. ICU visiting hours are limited to 30-minute sessions at 11:00 AM, 3:00 PM, and 7:00 PM. Emergency department is open 24/7.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How do I get my medical records?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    You can request medical records by visiting the Medical Records Department or by calling +1 (234) 567-8903. You'll need to fill out a request form and provide valid identification. Records are usually available within 3-5 working days.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you accept insurance?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Yes, we accept most major insurance plans. Please contact our billing department at +1 (234) 567-8902 to verify if your specific insurance plan is accepted. We also offer cash payment options and payment plans for those without insurance.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    How do I cancel or reschedule an appointment?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    You can cancel or reschedule appointments by calling our appointment desk at +1 (234) 567-8901 or through your online patient portal. Please provide at least 24 hours notice to avoid cancellation fees.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Is parking available at the hospital?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Yes, we have ample parking available on the hospital premises. Valet parking service is available at the main entrance for $10. There's also designated parking for disabled patients and emergency drop-off zones.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Contact Form Handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (contactForm.checkValidity()) {
                    // Show success modal
                    const modal = new bootstrap.Modal(document.getElementById('contactSuccessModal'));
                    modal.show();
                    
                    // Reset form after successful submission
                    setTimeout(() => {
                        contactForm.reset();
                        contactForm.classList.remove('was-validated');
                    }, 1000);
                }
                
                contactForm.classList.add('was-validated');
            });
            
            // Live chat simulation
            window.initiateChat = function() {
                const toastContainer = document.getElementById('toastContainer') || createToastContainer();
                const toastId = 'toast-' + Date.now();
                
                toastContainer.insertAdjacentHTML('beforeend', `
                    <div id="${toastId}" class="toast align-items-center text-bg-info border-0" role="alert">
                        <div class="d-flex">
                            <div class="toast-body">
                                <i class="fas fa-comments me-2"></i>
                                Connecting you with a customer service representative...
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                        </div>
                    </div>
                `);
                
                const toast = new bootstrap.Toast(document.getElementById(toastId), { delay: 3000 });
                toast.show();
                
                setTimeout(() => {
                    document.getElementById(toastId).remove();
                }, 3000);
            };
            
            function createToastContainer() {
                const container = document.createElement('div');
                container.id = 'toastContainer';
                container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                document.body.appendChild(container);
                return container;
            }
        });
    </script>
@endpush