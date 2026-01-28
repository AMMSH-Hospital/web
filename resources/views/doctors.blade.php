@extends('layouts.main')

@push('styles')
    <style>
        .filter-buttons {
            margin-bottom: 30px;
        }

        .filter-btn {
            margin: 0 5px 10px;
            border-radius: 25px;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background-color: var(--primary-blue);
            color: var(--primary-green);
        }

        .doctor-card {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .visiting-time {
            background-color: var(--light-green);
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .department-badge {
            background-color: var(--light-blue);
            color: var(--primary-blue);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
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
                    <li class="breadcrumb-item active" aria-current="page">আমাদের ডাক্তারগণ</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctors Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">আমাদের বিশেষজ্ঞ ডাক্তারদের সাথে পরিচিত হোন</h1>
                    <p class="lead text-muted">আমাদের অভিজ্ঞ চিকিৎসক দল আপনাকে সর্বোত্তম সেবা প্রদানে প্রতিশ্রুতিবদ্ধ।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Filter -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center filter-buttons">
                    <h5 class="mb-3">বিভাগ অনুযায়ী খুঁজুন:</h5>
                    <div class="d-flex flex-wrap justify-content-center">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">সকল ডাক্তার</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="cardiology">কার্ডিওলজি</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="neurology">নিউরোলজি</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="orthopedics">অর্থোপেডিক্স</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="pediatrics">শিশুরোগ</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="surgery">সার্জারি</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="dentistry">ডেন্টিস্ট্রি</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="doctorsGrid">
                <!-- Doctor 1 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="cardiology">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">কার্ডিওলজি</span>
                            <h5 class="card-title mt-3">ডা. সারাহ জনসন</h5>
                            <p class="card-text text-muted">সিনিয়র কনসালটেন্ট কার্ডিওলজিস্ট</p>
                            <p class="card-text">এমবিবিএস, এমডি, ডিএম (কার্ডিওলজি)</p>
                            <p class="card-text">ইন্টারভেনশনাল কার্ডিওলজি এবং হার্ট ফেইলিউর ম্যানেজমেন্টে ১৫+ বছরের
                                অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">সোম, বুধ, শুক্র: সকাল ৯:০০ - বিকাল ৪:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 2 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="neurology">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">নিউরোলজি</span>
                            <h5 class="card-title mt-3">ডা. মাইকেল চেন</h5>
                            <p class="card-text text-muted">কনসালটেন্ট নিউরোলজিস্ট</p>
                            <p class="card-text">এমবিবিএস, এমডি, ডিএম (নিউরোলজি)</p>
                            <p class="card-text">স্ট্রোক ম্যানেজমেন্ট, মৃগী রোগ এবং মুভমেন্ট ডিসঅর্ডারে ১২+ বছরের অভিজ্ঞতা।
                            </p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">মঙ্গল, বৃহস্পতি, শনি: সকাল ১০:০০ - বিকাল ৫:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 3 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="orthopedics">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">অর্থোপেডিক্স</span>
                            <h5 class="card-title mt-3">ডা. ডেভিড উইলসন</h5>
                            <p class="card-text text-muted">সিনিয়র অর্থোপেডিক সার্জন</p>
                            <p class="card-text">এমবিবিএস, এমএস (অর্থো), এমসিএইচ</p>
                            <p class="card-text">জয়েন্ট রিপ্লেসমেন্ট, আর্থ্রোস্কোপিক সার্জারি এবং স্পোর্টস ইনজুরিতে ১৮+
                                বছরের অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">সোম-শুক্র: সকাল ৮:০০ - বিকাল ৩:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 4 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="pediatrics">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">শিশুরোগ</span>
                            <h5 class="card-title mt-3">ডা. এমিলি রদ্রিগেজ</h5>
                            <p class="card-text text-muted">শিশু বিশেষজ্ঞ</p>
                            <p class="card-text">এমবিবিএস, এমডি, ডিসিএইচ</p>
                            <p class="card-text">শিশু স্বাস্থ্যসেবা, টিকাদান এবং ডেভেলপমেন্টাল পেডিয়াট্রিক্সে ১০+ বছরের
                                অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">সোম-শনি: সকাল ৯:০০ - দুপুর ২:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 5 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="surgery">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">জেনারেল সার্জারি</span>
                            <h5 class="card-title mt-3">ডা. রবার্ট মিলার</h5>
                            <p class="card-text text-muted">জেনারেল ও ল্যাপারোস্কোপিক সার্জন</p>
                            <p class="card-text">এমবিবিএস, এমএস, এফআইসিএস</p>
                            <p class="card-text">মিনিমাল ইনভেসিভ সার্জারি এবং গ্যাস্ট্রোইনটেস্টাইনাল সার্জারিতে ১৪+ বছরের
                                অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">সোম, বুধ, শুক্র: সকাল ৮:৩০ - বিকাল ৪:৩০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 6 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="dentistry">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">ডেন্টিস্ট্রি</span>
                            <h5 class="card-title mt-3">ডা. লিসা অ্যান্ডারসন</h5>
                            <p class="card-text text-muted">ডেন্টাল সার্জন</p>
                            <p class="card-text">বিডিএস, এমডিএস (প্রস্থোডন্টিকস)</p>
                            <p class="card-text">কসমেটিক ডেন্টিস্ট্রি, ডেন্টাল ইমপ্লান্ট এবং ওরাল রিহ্যাবিলিটেশনে ৯+ বছরের
                                অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">মঙ্গল, বৃহস্পতি, শনি: সকাল ১০:০০ - সন্ধ্যা ৬:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 7 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="cardiology">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">কার্ডিওলজি</span>
                            <h5 class="card-title mt-3">ডা. জেমস পার্কার</h5>
                            <p class="card-text text-muted">ইন্টারভেনশনাল কার্ডিওলজিস্ট</p>
                            <p class="card-text">এমবিবিএস, এমডি, ডিএম (কার্ডিওলজি)</p>
                            <p class="card-text">করোনারি ইন্টারভেনশন এবং পেসমেকার ইমপ্লান্টেশনে ১১+ বছরের অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">সোম, মঙ্গল, বৃহস্পতি: সকাল ৯:০০ - বিকাল ৩:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 8 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="neurology">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">নিউরোলজি</span>
                            <h5 class="card-title mt-3">ডা. মারিয়া গার্সিয়া</h5>
                            <p class="card-text text-muted">নিউরোলজিস্ট</p>
                            <p class="card-text">এমবিবিএস, এমডি, ডিএম (নিউরোলজি)</p>
                            <p class="card-text">মাথাব্যথা এবং মাল্টিপল স্ক্লেরোসিস চিকিৎসায় ৮+ বছরের অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">বুধ, শুক্র, শনি: সকাল ১১:০০ - সন্ধ্যা ৬:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor 9 -->
                <div class="col-md-6 col-lg-4 doctor-card" data-category="orthopedics">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="department-badge">অর্থোপেডিক্স</span>
                            <h5 class="card-title mt-3">ডা. টমাস লি</h5>
                            <p class="card-text text-muted">স্পাইন স্পেশালিস্ট</p>
                            <p class="card-text">এমবিবিএস, এমএস (অর্থো), এফএনবি (স্পাইন)</p>
                            <p class="card-text">স্পাইনাল সার্জারি এবং ডিস্ক রিপ্লেসমেন্টে ১৩+ বছরের অভিজ্ঞতা।</p>

                            <div class="visiting-time">
                                <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                <p class="mb-0">মঙ্গল, বৃহস্পতি, শনি: সকাল ৯:০০ - বিকাল ৪:০০</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('doctor-profile') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Doctors pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">১</a></li>
                            <li class="page-item"><a class="page-link" href="#">২</a></li>
                            <li class="page-item"><a class="page-link" href="#">৩</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">পরবর্তী</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">আপনার পছন্দের ডাক্তার খুঁজে পাচ্ছেন না?</h2>
                    <p class="mb-0">আমাদের অ্যাপয়েন্টমেন্ট ডেস্কে যোগাযোগ করুন এবং আমরা আপনাকে সঠিক বিশেষজ্ঞ খুঁজে পেতে
                        সাহায্য করব।</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('appointment') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>অ্যাপয়েন্টমেন্ট নিন
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Doctor Filter Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const doctorCards = document.querySelectorAll('.doctor-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');

                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Filter doctor cards
                    doctorCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') ===
                            filterValue) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1)';
                            }, 100);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
@endsection
