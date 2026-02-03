@extends('layouts.main')

@section('meta_title', 'চিকিৎসকবৃন্দ')

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
                        <a href="{{ route('doctors') }}"
                            class="btn btn-outline-primary filter-btn {{ !request('department') ? 'active' : '' }}">সকল
                            ডাক্তার</a>
                        @foreach ($departments as $department)
                            <a href="{{ route('doctors', ['department' => $department->id]) }}"
                                class="btn btn-outline-primary filter-btn {{ request('department') == $department->id ? 'active' : '' }}">
                                {{ $department->dept_name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="doctorsGrid">
                @forelse ($doctors as $doctor)
                    <!-- Doctor 1 -->
                    <div class="col-md-6 col-lg-4 doctor-card">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="department-badge">{{ $doctor->department?->dept_name }}</span>
                                <h5 class="card-title mt-3">{{ $doctor->doctor_name }}</h5>
                                <p class="card-text text-muted">{{ $doctor->designation }}</p>
                                <p class="card-text">{{ $doctor->qualification }}</p>
                                <p class="card-text">{{ $doctor->professional_experience }}</p>

                                <div class="visiting-time">
                                    <p class="mb-1"><strong>সাক্ষাতের সময়:</strong></p>
                                    <p class="mb-0">{{ $doctor->chamber_time }}</p>
                                </div>

                                <div class="mt-4">
                                    <a href="{{ route('doctor-profile', $doctor) }}" class="btn btn-primary w-100">
                                        <i class="fas fa-user-md me-2"></i>প্রোফাইল দেখুন
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>কোন ডাক্তার নেই</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $doctors->withQueryString()->links('pagination::bootstrap-5') }}
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
        // Optional: specific page scripts
    </script>
@endsection
