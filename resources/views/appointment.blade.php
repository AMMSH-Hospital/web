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
            background-color: var(--dark-gray);
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
            color: var(--dark-gray);
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
            border-color: var(--dark-gray);
            background-color: var(--light-gray);
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
            border-color: var(--dark-gray);
            background-color: var(--light-gray);
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
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
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
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">অ্যাপয়েন্টমেন্ট নিন</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">অ্যাপয়েন্টমেন্ট বুক করুন</h1>
                    <p class="lead text-muted">আমাদের বিশেষজ্ঞ চিকিৎসকদের সাথে আপনার ভিজিট শিডিউল করুন</p>
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
                            <div class="step-circle">১</div>
                            <div class="step-label">বিভাগ নির্বাচন</div>
                        </div>
                        <div class="step" id="step2">
                            <div class="step-circle">২</div>
                            <div class="step-label">ডাক্তার নির্বাচন</div>
                        </div>
                        <div class="step" id="step3">
                            <div class="step-circle">৩</div>
                            <div class="step-label">তারিখ ও সময়</div>
                        </div>
                        <div class="step" id="step4">
                            <div class="step-circle">৪</div>
                            <div class="step-label">রোগীর বিবরণ</div>
                        </div>
                        <div class="step" id="step5">
                            <div class="step-circle">৫</div>
                            <div class="step-label">নিশ্চিতকরণ</div>
                        </div>
                    </div>

                    <div class="appointment-form">
                        <form class="needs-validation" novalidate id="appointmentForm">
                            <!-- Step 1: Select Department -->
                            <div class="form-section active" id="section1">
                                <h3 class="mb-4">চিকিৎসা বিভাগ নির্বাচন করুন</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label required-field">বিভাগ নির্বাচন করুন</label>
                                        <select class="form-select" id="departmentSelect" required>
                                            <option value="" selected disabled>একটি বিভাগ চয়ন করুন</option>
                                            <!-- Departments will be loaded dynamically -->
                                        </select>
                                        <div class="invalid-feedback">
                                            অনুগ্রহ করে একটি বিভাগ নির্বাচন করুন।
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">অ্যাপয়েন্টমেন্টের ধরন</label>
                                        <select class="form-select" id="appointmentType">
                                            <option value="new" selected>নতুন রোগীর পরামর্শ</option>
                                            <option value="followup">ফলো-আপ ভিজিট</option>
                                            <option value="emergency">জরুরী পরামর্শ</option>
                                            <option value="test">ডায়াগনস্টিক টেস্ট</option>
                                            <option value="surgery">সার্জারি পরামর্শ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="alert alert-info mt-4">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>দ্রষ্টব্য:</strong> আপনি যদি কোন বিভাগটি বেছে নেবেন তা নিশ্চিত না হন তবে
                                    সহায়তার জন্য আমাদের অ্যাপয়েন্টমেন্ট ডেস্কে <strong>০১৭৪০৬৫৬৭৪৮</strong> নম্বরে কল করতে
                                    পারেন।
                                </div>
                            </div>

                            <!-- Step 2: Choose Doctor -->
                            <div class="form-section" id="section2">
                                <h3 class="mb-4">ডাক্তার নির্বাচন করুন</h3>
                                <div id="doctorOptions">
                                    <!-- Doctors will be loaded dynamically based on department selection -->
                                    <div class="alert alert-info">
                                        উপলব্ধ ডাক্তারদের দেখতে অনুগ্রহ করে প্রথমে একটি বিভাগ নির্বাচন করুন।
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Select Date & Time -->
                            <div class="form-section" id="section3">
                                <h3 class="mb-4">তারিখ ও সময় নির্বাচন করুন</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label required-field">পছন্দের তারিখ</label>
                                        <input type="date" class="form-control" id="appointmentDate" required
                                            min="">
                                        <div class="invalid-feedback">
                                            অনুগ্রহ করে একটি তারিখ নির্বাচন করুন।
                                        </div>
                                        <div class="mt-2">
                                            <small class="text-muted">দ্রষ্টব্য: সাপ্তাহিক ছুটির দিনে অ্যাপয়েন্টমেন্ট সীমিত
                                                হতে পারে।</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label required-field">পছন্দের সময়ের স্লট</label>
                                        <div class="time-slot-grid" id="timeSlots">
                                            <!-- Time slots will be loaded dynamically -->
                                            <div class="alert alert-info" style="grid-column-start: 1; grid-column-end: 5;">
                                                উপলব্ধ সময়ের স্লট দেখতে অনুগ্রহ করে একটি তারিখ নির্বাচন করুন।
                                            </div>
                                        </div>
                                        <div class="invalid-feedback d-block" id="timeSlotError" style="display: none;">
                                            অনুগ্রহ করে একটি সময়ের স্লট নির্বাচন করুন।
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>গুরুত্বপূর্ণ:</strong> অনুগ্রহ করে আপনার নির্ধারিত সময়ের ১৫ মিনিট আগে উপস্থিত
                                    হন। দেরিতে পৌঁছলে পুনর্নির্ধারণের প্রয়োজন হতে পারে।
                                </div>
                            </div>

                            <!-- Step 4: Patient Details -->
                            <div class="form-section" id="section4">
                                <h3 class="mb-4">রোগীর তথ্য</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label required-field">পুরো নাম</label>
                                        <input type="text" class="form-control" id="patientName" required>
                                        <div class="invalid-feedback">
                                            অনুগ্রহ করে আপনার পুরো নাম দিন।
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">জন্ম তারিখ</label>
                                        <input type="date" class="form-control" id="patientDOB">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label required-field">মোবাইল নম্বর</label>
                                        <input type="tel" class="form-control" id="patientPhone" required
                                            pattern="[0-9]{11}">
                                        <div class="invalid-feedback">
                                            অনুগ্রহ করে একটি বৈধ ১১-সংখ্যার মোবাইল নম্বর দিন।
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">ইমেইল ঠিকানা</label>
                                        <input type="email" class="form-control" id="patientEmail">
                                        <div class="invalid-feedback">
                                            অনুগ্রহ করে একটি বৈধ ইমেইল ঠিকানা দিন।
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">লিঙ্গ</label>
                                        <select class="form-select" id="patientGender">
                                            <option value="" selected disabled>লিঙ্গ নির্বাচন করুন</option>
                                            <option value="male">পুরুষ</option>
                                            <option value="female">মহিলা</option>
                                            <option value="other">অন্যান্য</option>
                                            <option value="prefer-not-to-say">বলতে চাই না</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">রোগীর ধরন</label>
                                        <select class="form-select" id="patientType">
                                            <option value="new" selected>নতুন রোগী</option>
                                            <option value="existing">বিদ্যমান রোগী</option>
                                            <option value="insurance">বীমা রোগী</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">মেডিকেল সমস্যা / ভিজিটের কারণ</label>
                                    <textarea class="form-control" id="medicalProblem" rows="4"
                                        placeholder="অনুগ্রহ করে আপনার লক্ষণ বা ভিজিটের কারণ বর্ণনা করুন"></textarea>
                                    <div class="form-text">এই তথ্য আমাদের ডাক্তারদের আপনার পরামর্শের জন্য প্রস্তুত হতে
                                        সাহায্য করে।</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">পূর্ববর্তী মেডিকেল রেকর্ড (যদি থাকে)</label>
                                    <input type="file" class="form-control" id="medicalRecords"
                                        accept=".pdf,.jpg,.jpeg,.png">
                                    <div class="form-text">আপনি প্রেসক্রিপশন, টেস্ট রিপোর্ট বা অন্যান্য মেডিকেল নথি আপলোড
                                        করতে পারেন (সর্বোচ্চ: ৫এমবি)</div>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="termsAgreement" required>
                                    <label class="form-check-label" for="termsAgreement">
                                        আমি <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#termsModal">শর্তাবলী এবং গোপনীয়তা নীতির</a> সাথে সম্মত
                                    </label>
                                    <div class="invalid-feedback">
                                        আপনাকে অবশ্যই শর্তাবলীতে সম্মত হতে হবে।
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5: Confirmation -->
                            <div class="form-section" id="section5">
                                <h3 class="mb-4">অ্যাপয়েন্টমেন্ট সারাংশ</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>অ্যাপয়েন্টমেন্টের বিবরণ</h5>
                                                <p><strong>বিভাগ:</strong> <span id="summaryDepartment">-</span></p>
                                                <p><strong>ডাক্তার:</strong> <span id="summaryDoctor">-</span></p>
                                                <p><strong>তারিখ:</strong> <span id="summaryDate">-</span></p>
                                                <p><strong>সময়:</strong> <span id="summaryTime">-</span></p>
                                                <p><strong>ধরন:</strong> <span id="summaryType">-</span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>রোগীর তথ্য</h5>
                                                <p><strong>নাম:</strong> <span id="summaryName">-</span></p>
                                                <p><strong>যোগাযোগ:</strong> <span id="summaryContact">-</span></p>
                                                <p><strong>ইমেইল:</strong> <span id="summaryEmail">-</span></p>
                                                <p><strong>মেডিকেল সমস্যা:</strong> <span id="summaryIssue">-</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>গুরুত্বপূর্ণ নোট</h5>
                                                <ul>
                                                    <li>অনুগ্রহ করে নির্ধারিত অ্যাপয়েন্টমেন্টের ১৫ মিনিট আগে পৌঁছান</li>
                                                    <li>আপনার আইডি প্রমাণ এবং পূর্ববর্তী মেডিকেল রেকর্ড সাথে আনুন</li>
                                                    <li>পরামর্শ ফি: ১০০০ টাকা (নতুন রোগী) / ৫০০ টাকা (ফলো-আপ)</li>
                                                    <li>বাতিল করতে হলে কমপক্ষে ২৪ ঘণ্টা আগে জানাতে হবে</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-success mt-4">
                                    <i class="fas fa-check-circle me-2"></i>
                                    <strong>আপনার অ্যাপয়েন্টমেন্ট নিশ্চিত করার জন্য প্রস্তুত!</strong> বুকিং সম্পূর্ণ করতে
                                    "অ্যাপয়েন্টমেন্ট নিশ্চিত করুন" এ ক্লিক করুন।
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="navigation-buttons">
                                <button type="button" class="btn btn-outline-primary" id="prevBtn"
                                    style="display: none;">
                                    <i class="fas fa-arrow-left me-2"></i>পূর্ববর্তী
                                </button>
                                <button type="button" class="btn btn-primary ms-auto" id="nextBtn">
                                    পরবর্তী <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                                <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">
                                    <i class="fas fa-calendar-check me-2"></i>অ্যাপয়েন্টমেন্ট নিশ্চিত করুন
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
                    <h5 class="modal-title">শর্তাবলী</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h5>অ্যাপয়েন্টমেন্ট বুকিং শর্তাবলী</h5>
                    <p>অ্যাপয়েন্টমেন্ট বুকিং করে, আপনি নিম্নলিখিত শর্তাবলী এবং শর্তসাপেক্ষে সম্মত হন:</p>

                    <h6>১. অ্যাপয়েন্টমেন্ট নিশ্চিতকরণ</h6>
                    <p>পেমেন্ট বা আমাদের কর্মীদের কাছ থেকে নিশ্চিতকরণ কল পাওয়ার পরেই অ্যাপয়েন্টমেন্ট নিশ্চিত করা হয়। আমরা
                        প্রয়োজন হলে অ্যাপয়েন্টমেন্ট পুনর্নির্ধারণ করার অধিকার রাখি।</p>

                    <h6>২. বাতিলকরণ নীতি</h6>
                    <p>নির্ধারিত অ্যাপয়েন্টমেন্ট সময়ের কমপক্ষে ২৪ ঘণ্টা আগে বাতিল করতে হবে। দেরিতে বাতিল হলে বাতিলকরণ ফি
                        প্রযোজ্য হতে পারে।</p>

                    <h6>৩. দেরিতে পৌঁছানো</h6>
                    <p>১৫ মিনিটের বেশি দেরিতে আসা রোগীদের ডাক্তারের প্রাপ্যতার উপর ভিত্তি করে পুনর্নির্ধারণ করার প্রয়োজন
                        হতে পারে।</p>

                    <h6>৪. পেমেন্ট শর্তাবলী</h6>
                    <p>অ্যাপয়েন্টমেন্টের সময় পরামর্শ ফি প্রদেয়। ডায়াগনস্টিক টেস্ট বা পদ্ধতির জন্য অতিরিক্ত চার্জ
                        প্রযোজ্য হতে পারে।</p>

                    <h6>৫. গোপনীয়তা নীতি</h6>
                    <p>আপনার চিকিৎসা সংক্রান্ত তথ্য স্বাস্থ্যসেবা গোপনীয়তা আইন অনুযায়ী গোপন রাখা হবে। অ্যাপয়েন্টমেন্ট
                        রিমাইন্ডার এবং ফলো-আপ কেয়ারের জন্য আমরা আপনার সাথে যোগাযোগ করতে পারি।</p>

                    <h6>৬. জরুরী কেস</h6>
                    <p>মেডিকেল জরুরী ক্ষেত্রে, নির্ধারিত অ্যাপয়েন্টমেন্টের চেয়ে ওয়াক-ইন রোগীদের অগ্রাধিকার দেওয়া হবে।
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">আমি বুঝেছি</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    console.log("Appointment Form Wizard");

    let currentStep = 1;
    const totalSteps = 5;
    let selectedDoctor = null;
    let selectedDoctorName = null;
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

    // **MOVED INSIDE: Form submit handler**
    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();

        if (validateStep(5)) {
            const formData = new FormData();
            formData.append('department', document.getElementById('departmentSelect').value);
            formData.append('doctor_id', selectedDoctor);
            formData.append('appointment_date', document.getElementById('appointmentDate').value);
            formData.append('appointment_time', selectedTimeSlot);
            formData.append('patient_name', document.getElementById('patientName').value);
            formData.append('patient_phone', document.getElementById('patientPhone').value);
            formData.append('patient_email', document.getElementById('patientEmail').value);
            formData.append('date_of_birth', document.getElementById('patientDOB').value);
            formData.append('gender', document.getElementById('patientGender').value);
            formData.append('patient_type', document.getElementById('patientType').value);
            formData.append('appointment_type', document.getElementById('appointmentType').value);
            formData.append('message', document.getElementById('medicalProblem').value);

            const fileInput = document.getElementById('medicalRecords');
            if (fileInput.files[0]) {
                formData.append('medical_records', fileInput.files[0]);
            }

            fetch("{{ route('appointment.store') }}", {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Show confirmation modal
                    const modal = new bootstrap.Modal(document.getElementById(
                        'appointmentConfirmationModal'));
                    modal.show();

                    // Reset form after successful submission
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
        }
    });

    // Initialize
    updateNavigationButtons();
    loadDepartments();

    function loadDepartments() {
        const departmentSelect = document.getElementById('departmentSelect');
        departmentSelect.innerHTML = '<option value="" selected disabled>একটি বিভাগ চয়ন করুন</option>';

        fetch("{{ route('appointment.get-departments') }}")
            .then(response => response.json())
            .then(departments => {
                departments.forEach(dept => {
                    const option = document.createElement('option');
                    option.value = dept.id;
                    option.textContent = dept.dept_name;
                    departmentSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading departments:', error));
    }

    function validateStep(step) {
        let isValid = true;

        switch (step) {
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
                    alert('অনুগ্রহ করে একজন ডাক্তার নির্বাচন করুন');
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
                const requiredFields = ['patientName', 'patientPhone'];
                requiredFields.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (!field.value || (field.id === 'patientPhone' && !field.value.match(
                            /^[0-9]{11}$/))) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });

                const email = document.getElementById('patientEmail');
                if (email.value && !email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                    email.classList.add('is-invalid');
                    isValid = false;
                } else {
                    email.classList.remove('is-invalid');
                }

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

    // Expose selectDoctor and selectTimeSlot to global scope
    window.selectDoctor = function(id, name) {
        selectedDoctor = id;
        selectedDoctorName = name;

        document.querySelectorAll('.doctor-option').forEach(el => {
            el.classList.remove('selected');
            el.querySelector('.fa-check-circle').style.display = 'none';
        });

        const selectedEl = document.querySelector(`.doctor-option[data-doctor-id="${id}"]`);
        if (selectedEl) {
            selectedEl.classList.add('selected');
            selectedEl.querySelector('.fa-check-circle').style.display = 'block';
        }
    }

    window.selectTimeSlot = function(time) {
        selectedTimeSlot = time;

        document.querySelectorAll('.time-slot-option').forEach(el => {
            el.classList.remove('selected');
        });

        const selectedEl = document.querySelector(`.time-slot-option[data-time="${time}"]`);
        if (selectedEl) selectedEl.classList.add('selected');

        document.getElementById('timeSlotError').style.display = 'none';
    }

    function loadDoctors(department) {
        const doctorOptions = document.getElementById('doctorOptions');
        doctorOptions.innerHTML =
            '<div class="text-center"><div class="spinner-border text-primary" role="status"></div><p>Loading doctors...</p></div>';

        fetch(`{{ route('appointment.get-doctors') }}?department=${department}`)
            .then(response => response.json())
            .then(doctors => {
                let html = '';
                if (doctors.length > 0) {
                    doctors.forEach(doctor => {
                        const img = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(
                            doctor.doctor_name);

                        html += `
                            <div class="doctor-option" data-doctor-id="${doctor.id}" onclick="selectDoctor(${doctor.id}, '${doctor.doctor_name}')">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="${img}" alt="${doctor.doctor_name}" class="doctor-img-small">
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-1">${doctor.doctor_name}</h5>
                                        <p class="mb-1 text-muted">${doctor.designation || ''}</p>
                                        <p class="mb-0"><small>${doctor.experience_year ? doctor.experience_year + ' years exp' : ''}</small></p>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle text-success" style="display: none;"></i>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                } else {
                    html =
                        '<div class="alert alert-info">No doctors available in this department.</div>';
                }
                doctorOptions.innerHTML = html;
            });

        selectedDoctor = null;
    }

    function loadTimeSlots(date) {
        if (!selectedDoctor) {
            alert('Please select a doctor first.');
            return;
        }

        const timeSlotsContainer = document.getElementById('timeSlots');
        timeSlotsContainer.innerHTML =
            '<div class="text-center" style="grid-column: 1/-1"><div class="spinner-border text-sm" role="status"></div></div>';

        fetch(`{{ route('appointment.get-time-slots') }}?doctor_id=${selectedDoctor}&date=${date}`)
            .then(response => response.json())
            .then(slots => {
                let html = '';
                if (slots.length > 0) {
                    slots.forEach(slot => {
                        html += `
                            <div class="time-slot-option" 
                                 data-time="${slot}" 
                                 onclick="selectTimeSlot('${slot}')">
                                ${slot}
                            </div>
                        `;
                    });
                } else {
                    html =
                        '<div class="alert alert-warning" style="grid-column: 1/-1">No slots available for this date.</div>';
                }
                timeSlotsContainer.innerHTML = html;
            });

        selectedTimeSlot = null;
    }

    function updateAppointmentSummary() {
        const departmentElement = document.getElementById('departmentSelect');
        document.getElementById('summaryDepartment').textContent = departmentElement.options[
            departmentElement.selectedIndex].text;
        document.getElementById('summaryDoctor').textContent = selectedDoctorName || '-';
        document.getElementById('summaryDate').textContent = document.getElementById('appointmentDate')
            .value || '-';
        document.getElementById('summaryTime').textContent = selectedTimeSlot || '-';

        const typeElement = document.getElementById('appointmentType');
        document.getElementById('summaryType').textContent = typeElement.options[typeElement.selectedIndex]
            .text;

        document.getElementById('summaryName').textContent = document.getElementById('patientName').value ||
            '-';
        document.getElementById('summaryContact').textContent = document.getElementById('patientPhone')
            .value || '-';
        document.getElementById('summaryEmail').textContent = document.getElementById('patientEmail')
            .value || '-';
        document.getElementById('summaryIssue').textContent = document.getElementById('medicalProblem')
            .value || '-';
    }
});
    </script>
@endpush
