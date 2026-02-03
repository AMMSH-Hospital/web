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
            justify-content: space-around;
            align-items: center;
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
                @foreach ($departments as $department)
                <!-- Cardiology Department -->
                <div class="col-md-6 col-lg-4">
                    <div class="card department-card">
                        <div class="card-body text-center p-4">
                            <div class="department-icon">
                                <img src="{{ Storage::url($department->image) }}" width="100" height="100" alt="{{ $department->dept_name }}">
                            </div>
                            <h4 class="card-title mb-3">{{ $department->dept_name }}</h4>
                            <p class="card-text">{{ $department->description }}</p>

                            <ul class="department-services">
                                @foreach ($department->services as $service)
                                    <li><i class="fas fa-check"></i> {{ $service }}</li>
                                @endforeach
                            </ul>

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">{{ enToBnNumber($department?->doctors?->count() ?? 0) }}</span>
                                    <span class="feature-label">ডাক্তার</span>
                                </div>
                                @php
                                    $featured = collect($department->extra_infos)
                                        ->firstWhere('featured', true);
                                @endphp
                                @if ($featured)
                                <div class="feature-item">
                                    <span class="feature-value">{{ $featured['title'] }}</span>
                                    <span class="feature-label">{{ $featured['description'] }}</span>
                                </div>
                                @endif
                                <div class="feature-item">
                                    <span class="feature-value">{{ $department->beds_count }}</span>
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
                @endforeach

                

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

                            <div class="department-features">
                                <div class="feature-item">
                                    <span class="feature-value">২৪/৭</span>
                                    <span class="feature-label">সার্ভিস</span>
                                </div>
                            </div>

                            <div class="department-cta">
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-phone-alt me-2"></i>জরুরি যোগাযোগ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- Radiology & Imaging -->
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
                </div> --}}
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
