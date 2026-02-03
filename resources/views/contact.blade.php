@extends('layouts.main')

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

        .contact-info-card:hover {}

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
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">যোগাযোগ</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">যোগাযোগ করুন</h1>
                    <p class="lead text-muted">যে কোনো তথ্যের জন্য আমাদের সাথে যোগাযোগ করুন</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>আমাদের ঠিকানা</h4>
                        <p class="mb-0">৫ আউটার সার্কুলার রোড, রাজারবাগ শরীফ, ঢাকা<br>পুলিশ লাইন ৩ নং গেইট এর
                            বিপরীতে<br>পার্টি হাউজ কমিউনিটি সেন্টারের উপরে</p>

                        <div class="emergency-contact">
                            <h5><i class="fas fa-ambulance me-2 text-danger"></i>জরুরি যোগাযোগ</h5>
                            <p class="mb-1"><strong>অ্যাম্বুলেন্স:</strong> ০২ ৮৩৩৩০৮১</p>
                            <p class="mb-0"><strong>ইমারজেন্সি ডেস্ক:</strong> ৯৩৪১৩৯৪</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>ফোন নম্বর</h4>
                        <p class="mb-2"><strong>তথ্য:</strong> ০২ ৮৩৩৩০৮১</p>
                        <p class="mb-2"><strong>সিরিয়ালের জন্য:</strong> ০১৭৪০৬৫৬৭৪৮</p>
                        <p class="mb-2"><strong>সিরিয়ালের জন্য:</strong> ০১৭১১০৫২৩৬৬</p>
                        <p class="mb-0"><strong>অন্যান্য:</strong> ৯৩৪১৩৯৪</p>

                        <div class="opening-hours">
                            <h5><i class="fas fa-clock me-2"></i>সেবার সময়</h5>
                            <table class="hours-table">
                                <tr>
                                    <td>হাসপাতাল ও জরুরি সেবা</td>
                                    <td>২৪/৭ চব্বিশ ঘন্টা</td>
                                </tr>
                                <tr>
                                    <td>ফার্মেসি</td>
                                    <td>২৪/৭ চব্বিশ ঘন্টা</td>
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
                        <h4>ইমেইল ও অনলাইন</h4>
                        <p class="mb-2"><strong>সাধারণ তথ্য:</strong> info@al-mutmainnah.com</p>
                        <p class="mb-2"><strong>এপয়েন্টমেন্ট:</strong> appointments@al-mutmainnah.com</p>

                        <div class="mt-4">
                            <h5>ফলো করুন</h5>
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
                <a href="tel:028333081" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">কল করুন</h6>
                        <p class="mb-0 text-muted">০২ ৮৩৩৩০৮১</p>
                    </div>
                </a>

                <a href="{{ route('appointment') }}" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">এপয়েন্টমেন্ট বুক করুন</h6>
                        <p class="mb-0 text-muted">অনলাইন বুকিং</p>
                    </div>
                </a>

                <a href="mailto:info@al-mutmainnah.com" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">ইমেইল পাঠান</h6>
                        <p class="mb-0 text-muted">info@al-mutmainnah.com</p>
                    </div>
                </a>

                <a href="#" onclick="initiateChat()" class="quick-contact-btn">
                    <div class="quick-contact-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">লাইভ চ্যাট</h6>
                        <p class="mb-0 text-muted">২৪/৭ সাপোর্ট</p>
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
                    <h3 class="section-title mb-4">আমাদের অবস্থান</h3>
                    <div class="map-container">
                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.177858804427!2d-73.98784468459418!3d40.70555197933205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a315cdf4c9b%3A0x8b934de5cae6f7a!2sHealthcare%20District!5e0!3m2!1sen!2sus!4v1623456789012!5m2!1sen!2sus"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5>পার্কিং তথ্য</h5>
                            <p class="mb-0"><small>হাসপাতাল প্রাঙ্গনে পর্যাপ্ত পার্কিং ব্যবস্থা রয়েছে।</small></p>
                        </div>
                        <div class="col-md-6">
                            <h5>পাবলিক ট্রান্সপোর্ট</h5>
                            <p class="mb-0"><small>বাস স্টপ: মালিবাগ মোড় অথবা খিলগাঁও ফ্লাইওভারের নিচে<br>মেট্রোরেল:
                                    রাজারবাগ স্টেশন (প্রস্তাবিত)</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form-card">
                        <h3 class="section-title mb-4">আমাদের মেসেজ পাঠান</h3>
                        <form class="needs-validation" action="{{ route('contact.store') }}" method="POST" novalidate
                            id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">পুরো নাম</label>
                                    <input type="text" class="form-control" id="contactName" name="name" required>
                                    <div class="invalid-feedback">
                                        অনুগ্রহ করে আপনার নাম লিখুন।
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label required-field">ইমেইল</label>
                                    <input type="email" class="form-control" id="contactEmail" name="email"
                                        required>
                                    <div class="invalid-feedback">
                                        অনুগ্রহ করে একটি সঠিক ইমেইল দিন।
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">ফোন নম্বর</label>
                                <input type="tel" class="form-control" id="contactPhone" name="phone">
                            </div>

                            <div class="mb-3">
                                <label class="form-label required-field">বিষয়</label>
                                <select class="form-select" id="contactSubject" name="subject" required>
                                    <option value="" selected disabled>বিষয় নির্বাচন করুন</option>
                                    <option value="appointment">এপয়েন্টমেন্ট সংক্রান্ত</option>
                                    <option value="billing">বিলিং ও ইন্স্যুরেন্স</option>
                                    <option value="feedback">ফিডব্যাক ও অভিযোগ</option>
                                    <option value="medical">মেডিকেল রিপোর্ট</option>
                                    <option value="other">অন্যান্য</option>
                                </select>
                                <div class="invalid-feedback">
                                    অনুগ্রহ করে একটি বিষয় নির্বাচন করুন।
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label required-field">মেসেজ</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">
                                    অনুগ্রহ করে আপনার মেসেজ লিখুন।
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="contactNewsletter"
                                        name="subscribe" value="1">
                                    <label class="form-check-label" for="contactNewsletter">
                                        স্বাস্থ্য টিপস এবং আপডেটের জন্য নিউজলেটারে সাবস্ক্রাইব করুন
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                মেসেজ পাঠান
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
                    <h2 class="section-title d-inline-block">বিভাগ অনুযায়ী যোগাযোগ</h2>
                    <p class="text-muted">নির্দিষ্ট বিভাগের জন্য সরাসরি যোগাযোগ নম্বর</p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">কার্ডিওলজি বিভাগ</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +১ (২৩৪) ৫৬৭-৮৯১৫</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i>
                            cardiology@medicarehospital.com</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">জরুরি বিভাগ</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +১ (২৩৪) ৫৬৭-৮৯১২</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> emergency@medicarehospital.com
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">শিশুরোগ বিভাগ</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +১ (২৩৪) ৫৬৭-৮৯১৬</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i>
                            pediatrics@medicarehospital.com</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">রেডিওলজি বিভাগ</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +১ (২৩৪) ৫৬৭-৮৯১৭</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> radiology@medicarehospital.com
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">বিলিং বিভাগ</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +১ (২৩৪) ৫৬৭-৮৯০২</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> billing@medicarehospital.com
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="department-contact">
                        <h5 class="mb-2">ফার্মেসি</h5>
                        <p class="mb-1"><i class="fas fa-phone-alt text-primary me-2"></i> +১ (২৩৪) ৫৬৭-৮৯১৮</p>
                        <p class="mb-0"><i class="fas fa-envelope text-primary me-2"></i> pharmacy@medicarehospital.com
                        </p>
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
                    <h2 class="section-title d-inline-block">সচরাচর জিজ্ঞাসিত প্রশ্ন (FAQ)</h2>
                    <p class="text-muted">সাধারণ কিছু প্রশ্নের উত্তর</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="contactFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    রোগী দেখার সময়সূচী কি?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    রোগী দেখার সময় প্রতিদিন সকাল ১০:০০ টা থেকে রাত ৮:০০ টা। আইসিইউ-তে রোগী দেখার জন্য
                                    নির্দিষ্ট সময় রয়েছে (দুপুর ১২টা এবং বিকাল ৫টা)। জরুরি বিভাগ ২৪/৭ খোলা থাকে।
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    আমি কীভাবে আমার মেডিকেল রেকর্ড পাব?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    আপনি মেডিকেল রেকর্ডস বিভাগে গিয়ে অথবা +১ (২৩৪) ৫৬৭-৮৯০৩ নম্বরে কল করে মেডিকেল রেকর্ডের
                                    জন্য অনুরোধ করতে পারেন। আপনাকে একটি অনুরোধ ফর্ম পূরণ করতে হবে এবং বৈধ পরিচয়পত্র প্রদান
                                    করতে হবে। রেকর্ড সাধারণত ৩-৫ কার্যদিবসের মধ্যে পাওয়া যায়।
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    আপনারা কি ইন্স্যুরেন্স গ্রহণ করেন?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    হ্যাঁ, আমরা অধিকাংশ প্রধান ইন্স্যুরেন্স প্ল্যান গ্রহণ করি। আপনার নির্দিষ্ট ইন্স্যুরেন্স
                                    প্ল্যান গ্রহণযোগ্য কিনা তা যাচাই করতে অনুগ্রহ করে আমাদের বিলিং বিভাগের সাথে +১ (২৩৪)
                                    ৫৬৭-৮৯০২ নম্বরে যোগাযোগ করুন। আমরা নগদ পেমেন্ট এবং ইন্স্যুরেন্সবিহীন রোগীদের জন্য
                                    পেমেন্ট প্ল্যানও অফার করি।
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    আমি কীভাবে অ্যাপয়েন্টমেন্ট বাতিল বা পরিবর্তন করতে পারি?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    আপনি আমাদের অ্যাপয়েন্টমেন্ট ডেস্কে +১ (২৩৪) ৫৬৭-৮৯০২ নম্বরে কল করে অথবা আপনার অনলাইন
                                    পেশেন্ট পোর্টালের মাধ্যমে অ্যাপয়েন্টমেন্ট বাতিল বা পরিবর্তন করতে পারেন। বাতিলকরণ ফি
                                    এড়াতে অনুগ্রহ করে কমপক্ষে ২৪ ঘন্টা আগে নোটিশ প্রদান করুন।
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    হাসপাতালে কি পার্কিং সুবিধা আছে?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    হ্যাঁ, আমাদের হাসপাতাল প্রাঙ্গনে রোগীদের এবং দর্শনার্থীদের জন্য পর্যাপ্ত পার্কিং
                                    ব্যবস্থা রয়েছে।
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
    <!-- Contact Success Modal -->
    <div class="modal fade" id="contactSuccessModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">মেসেজ পাঠানো হয়েছে!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <div class="mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h4>ধন্যবাদ!</h4>
                    <p class="mb-0">আপনার মেসেজটি সফলভাবে পাঠানো হয়েছে। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Contact Form Handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                if (!contactForm.checkValidity()) {
                    e.stopPropagation();
                    contactForm.classList.add('was-validated');
                    return;
                }

                // Show loading state
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML =
                    '<span class="spinner-border spinner-border-sm me-2"></span>পাঠানো হচ্ছে...';

                const formData = new FormData(contactForm);

                fetch(contactForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Show success modal
                            const modal = new bootstrap.Modal(document.getElementById(
                                'contactSuccessModal'));
                            modal.show();

                            // Reset form
                            contactForm.reset();
                            contactForm.classList.remove('was-validated');
                        } else {
                            alert('দুঃখিত, কিছু সমস্যা হয়েছে। আবার চেষ্টা করুন।');
                            console.error('Submission failed:', data);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('দুঃখিত, সার্ভারে সমস্যা হয়েছে। অনুগ্রহ করে পরে আবার চেষ্টা করুন।');
                    })
                    .finally(() => {
                        // Reset button state
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    });

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
                                আপনাকে কাস্টমার সার্ভিস প্রতিনিধির সাথে সংযুক্ত করা হচ্ছে...
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                        </div>
                    </div>
                `);

                const toast = new bootstrap.Toast(document.getElementById(toastId), {
                    delay: 3000
                });
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
