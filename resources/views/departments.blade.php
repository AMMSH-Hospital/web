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
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">চিকিৎসা বিভাগসমূহ</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Departments Header -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-5 fw-bold mb-3">আমাদের চিকিৎসা বিভাগসমূহ</h1>
                    <p class="lead text-muted">বিভিন্ন বিশেষায়িত বিভাগে আমাদের সমন্বিত স্বাস্থ্যসেবা</p>
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
                            <h4 class="card-title mb-3">কার্ডিওলজি</h4>
                            <p class="card-text">উন্নত ডায়াগনস্টিক এবং ইন্টারভেনশনাল কার্ডিওলজি পরিষেবা সহ সম্পূর্ণ হার্ট
                                কেয়ার।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> ইকোকার্ডিওগ্রাফি</li>
                                <li><i class="fas fa-check"></i> এনজিওপ্লাস্টি ও স্টেন্টিং</li>
                                <li><i class="fas fa-check"></i> পেসমেকার ইমপ্লান্টেশন</li>
                                <li><i class="fas fa-check"></i> কার্ডিয়াক রিহ্যাবিলিটেশন</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৮</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">২৪/৭</span>
                                    <span class="feature-label">ক ক্যাথ ল্যাব</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৫০+</span>
                                    <span class="feature-label">বেড</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('doctors') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>ডাক্তার দেখুন
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
                            <h4 class="card-title mb-3">নিউরোলজি</h4>
                            <p class="card-text">অত্যাধুনিক প্রযুক্তির সাথে মস্তিষ্ক, মেরুদণ্ড এবং স্নায়ুর রোগের জন্য উন্নত
                                চিকিৎসা।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> ইইজি এবং ইএমজি স্টাডিজ</li>
                                <li><i class="fas fa-check"></i> স্ট্রোক ম্যানেজমেন্ট</li>
                                <li><i class="fas fa-check"></i> মৃগী রোগের চিকিৎসা</li>
                                <li><i class="fas fa-check"></i> মুভমেন্ট ডিসঅর্ডার</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৬</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৩টি</span>
                                    <span class="feature-label">এমআরআই</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৩০+</span>
                                    <span class="feature-label">বেড</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('doctors') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>ডাক্তার দেখুন
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
                            <h4 class="card-title mb-3">অর্থোপেডিকস</h4>
                            <p class="card-text">উন্নত অস্ত্রোপচার এবং নন-সার্জিক্যাল চিকিৎসা সহ হাড় এবং জয়েন্টের সম্পূর্ণ
                                যত্ন।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> জয়েন্ট রিপ্লেসমেন্ট</li>
                                <li><i class="fas fa-check"></i> আর্থ্রোস্কোপিক সার্জারি</li>
                                <li><i class="fas fa-check"></i> স্পাইন সার্জারি</li>
                                <li><i class="fas fa-check"></i> স্পোর্টস ইনজুরি</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৯</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৪</span>
                                    <span class="feature-label">ওটি</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৬০+</span>
                                    <span class="feature-label">বেড</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('doctors') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>ডাক্তার দেখুন
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
                            <h4 class="card-title mb-3">শিশুরোগ</h4>
                            <p class="card-text">নবজাতক থেকে কিশোর পর্যন্ত শিশুদের জন্য শিশু-বান্ধব পরিবেশে বিশেষ যত্ন।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> টিকাদান</li>
                                <li><i class="fas fa-check"></i> নিওনেটাল আইসিইউ</li>
                                <li><i class="fas fa-check"></i> বৃদ্ধি পর্যবেক্ষণ</li>
                                <li><i class="fas fa-check"></i> কিশোরকালীন যত্ন</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৭</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">লেভেল ৩</span>
                                    <span class="feature-label">এনআইসিইউ</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৪০+</span>
                                    <span class="feature-label">বেড</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('doctors') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>ডাক্তার দেখুন
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
                            <h4 class="card-title mb-3">জেনারেল সার্জারি</h4>
                            <p class="card-text">বিভিন্ন অবস্থার জন্য ন্যূনতম ইনভেসিভ কৌশল সহ উন্নত সার্জিকাল যত্ন।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> ল্যাপারোস্কোপিক সার্জারি</li>
                                <li><i class="fas fa-check"></i> গ্যাস্ট্রোইনটেস্টাইনাল সার্জারি</li>
                                <li><i class="fas fa-check"></i> ট্রমা সার্জারি</li>
                                <li><i class="fas fa-check"></i> এন্ডোস্কোপিক পদ্ধতি</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৮</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৬</span>
                                    <span class="feature-label">ওটি</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৫০+</span>
                                    <span class="feature-label">বেড</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('doctors') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>ডাক্তার দেখুন
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
                            <h4 class="card-title mb-3">ডেন্টাল</h4>
                            <p class="card-text">কসমেটিক ডেন্টিস্ট্রি, ইমপ্লান্ট এবং ওরাল সার্জারি সহ সম্পূর্ণ দাঁতের যত্ন।
                            </p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> ডেন্টাল ইমপ্লান্ট</li>
                                <li><i class="fas fa-check"></i> কসমেটিক ডেন্টিস্ট্রি</li>
                                <li><i class="fas fa-check"></i> অর্থোডন্টিক্স</li>
                                <li><i class="fas fa-check"></i> ওরাল সার্জারি</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৫</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">সিবিসিটি</span>
                                    <span class="feature-label">স্ক্যান</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">১২</span>
                                    <span class="feature-label">চেয়ার</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('doctors') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-user-md me-2"></i>ডাক্তার দেখুন
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
                            <h4 class="card-title mb-3">জরুরি সেবা</h4>
                            <p class="card-text">দ্রুত প্রতিক্রিয়া টিম এবং উন্নত লাইফ সাপোর্ট সিস্টেম সহ ২৪/৭ জরুরি
                                পরিষেবা।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> ট্রমা কেয়ার</li>
                                <li><i class="fas fa-check"></i> কার্ডিয়াক ইমারজেন্সি</li>
                                <li><i class="fas fa-check"></i> পয়জন ম্যানেজমেন্ট</li>
                                <li><i class="fas fa-check"></i> ক্রিটিক্যাল কেয়ার</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">১৫</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">২৪/৭</span>
                                    <span class="feature-label">সার্ভিস</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৩০+</span>
                                    <span class="feature-label">বেড</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('appointment') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-phone-alt me-2"></i>জরুরি যোগাযোগ
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
                            <h4 class="card-title mb-3">রেডিওলজি ও ইমেজিং</h4>
                            <p class="card-text">সঠিক রোগ নির্ণয়ের জন্য অত্যাধুনিক প্রযুক্তির সাথে উন্নত ডায়াগনস্টিক
                                ইমেজিং পরিষেবা।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> এমআরআই এবং সিটি স্ক্যান</li>
                                <li><i class="fas fa-check"></i> ডিজিটাল এক্স-রে</li>
                                <li><i class="fas fa-check"></i> আল্ট্রাসাউন্ড</li>
                                <li><i class="fas fa-check"></i> ম্যামোগ্রাফি</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৮</span>
                                    <span class="feature-label">রেডিওলোজিস্ট</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৩টি</span>
                                    <span class="feature-label">এমআরআই</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">২৫৬</span>
                                    <span class="feature-label">স্লাইস সিটি</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('appointment') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-calendar-alt me-2"></i>টেস্ট বুক করুন
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
                            <h4 class="card-title mb-3">ফিজিওথেরাপী</h4>
                            <p class="card-text">আঘাত এবং সার্জারি থেকে সুস্থ হওয়ার জন্য ব্যাপক পুনর্বাসন পরিষেবা।</p>

                            <ul class="department-services">
                                <li><i class="fas fa-check"></i> ব্যথা নিরাময়</li>
                                <li><i class="fas fa-check"></i> স্পোর্টস রিহ্যাবিলিটেশন</li>
                                <li><i class="fas fa-check"></i> নিউরোলজিক্যাল রিহ্যাব</li>
                                <li><i class="fas fa-check"></i> পোস্ট-সার্জিক্যাল রিহ্যাব</li>
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">৬</span>
                                    <span class="feature-label">থেরাপিস্ট</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">১৫</span>
                                    <span class="feature-label">মেশিন</span>
                                </div>
                                <div class="feature-item">
                                    <span class="feature-value">৫০০+</span>
                                    <span class="feature-label">রোগী/মাস</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('appointment') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-calendar-alt me-2"></i>সেশন বুক করুন
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
                    <h2 class="mb-3">বিশেষজ্ঞ ডাক্তারের পরামর্শ প্রয়োজন?</h2>
                    <p class="mb-0">আমাদের বিশেষজ্ঞ ডাক্তাররা পরামর্শের জন্য উপলব্ধ। আপনার স্বাস্থ্যসেবা প্রয়োজনের জন্য
                        সঠিক বিশেষজ্ঞের সাথে এখনই অ্যাপয়েন্টমেন্ট বুক করুন।</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('appointment') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>এপয়েন্টমেন্ট বুক করুন
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
