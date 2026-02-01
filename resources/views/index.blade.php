@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">আপনার সুস্বাস্থ্যই <span class="text-success">আমাদের অগ্রাধিকার</span>
                    </h1>
                    <p class="lead mb-4">অভিজ্ঞ চিকিৎসক ও আধুনিক প্রযুক্তির মাধ্যমে আল মুতমাইন্নাহ মা ও শিশু হাসপাতাল প্রদান
                        করে নির্ভরযোগ্য ও সাশ্রয়ী চিকিৎসা সেবা।</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-calendar-check me-2"></i>অ্যাপয়েন্টমেন্ট নিন
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone-alt me-2"></i>যোগাযোগ করুন
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/ammsh.jpg') }}" alt="Hospital Staff"
                        class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">আমাদের সেবা</h2>
                    <p class="text-muted">আপনার সকল চিকিৎসা প্রয়োজনের জন্য সমন্বিত স্বাস্থ্যসেবা</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h4>জরুরি চিকিৎসা সেবা</h4>
                        <p>দ্রুত সাড়া প্রদানকারী টিম ও উন্নত লাইফ সাপোর্টসহ ২৪/৭ জরুরি চিকিৎসা সেবা।</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>বহির্বিভাগ (ওপিডি) সেবা</h4>
                        <p>বিশেষজ্ঞ চিকিৎসকের পরামর্শ ও ডায়াগনস্টিক সেবাসহ বহির্বিভাগ।</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h4>আইসিইউ (ICU) সুবিধা</h4>
                        <p>সার্বক্ষণিক পর্যবেক্ষণসহ আধুনিক মানের ইনটেনসিভ কেয়ার ইউনিট।</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h4>ফার্মেসি</h4>
                        <p>সকল প্রয়োজনীয় ওষুধ ও পেশাদার পরামর্শসহ সুসজ্জিত ফার্মেসি।</p>
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
                    <h2 class="section-title d-inline-block">আমাদের অভিজ্ঞ চিকিৎসক</h2>
                    <p class="text-muted">অভিজ্ঞ ও যোগ্য চিকিৎসকদের নিয়ে গঠিত আমাদের টিমের সাথে পরিচিত হন</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">ডা. সারাহ জনসন</h5>
                            <p class="card-text text-muted">হৃদরোগ বিশেষজ্ঞ</p>
                            <p class="card-text">এমবিবিএস, এমডি, ডিএম (কার্ডিওলজি), ১৫+ বছরের অভিজ্ঞতা</p>
                            <a href="{{ route('doctor-profile') }}" class="btn btn-outline-primary w-100">প্রোফাইল দেখুন</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('doctors') }}" class="btn btn-primary btn-lg">
                    সকল চিকিৎসক দেখুন <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- Appointment CTA -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">আজই কি একজন চিকিৎসকের পরামর্শ নিতে চান?</h2>
                    <p class="mb-0">
                        আমাদের বিশেষজ্ঞ চিকিৎসকদের সাথে এপয়েন্টমেন্ট নিন। আমরা নিশ্চিত করি কম অপেক্ষার সময় এবং ব্যক্তিগত
                        যত্ন।
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('appointment') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>এখনই অ্যাপয়েন্টমেন্ট নিন
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">রোগীদের মতামত</h2>
                    <p class="text-muted">আমাদের সেবা সম্পর্কে রোগীরা যা বলছেন</p>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($testimonials as $testimonial)
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <p class="mb-0">
                            {{ $testimonial->message }}
                        </p>
                        <div class="testimonial-author">
                            <div>
                                <h6 class="mb-0">{{ $testimonial->patient_name }}</h6>
                                <small class="text-muted">{{ $testimonial->description }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
