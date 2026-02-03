@extends('layouts.main')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">আমাদের সম্পর্কে</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- About Hero Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">আমাদের সম্পর্কে</h1>
                    {!! settings('about_page')->about_description !!}
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/ammsh.png') }}"
                        alt="Hospital Building" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-5">
                            <div class="service-icon mb-4">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="card-title mb-3">আমাদের লক্ষ্য</h3>
                            <p class="card-text">{!! settings('about_page')->mission !!}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body text-center p-5">
                            <div class="service-icon mb-4">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="card-title mb-3">আমাদের ভিশন</h3>
                            <p class="card-text">{!! settings('about_page')->vision !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Counters -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">সংখ্যায় আমাদের যাত্রা</h2>
                    <p class="text-muted">মাইলফলক যা স্বাস্থ্যসেবা শ্রেষ্ঠত্বের প্রতি আমাদের প্রতিশ্রুতিকে সংজ্ঞায়িত করে
                    </p>
                </div>
            </div>

            <div class="row g-4">
                @foreach (settings('about_page')->experience_counters as $counter)
                    <div class="col-md-6 col-lg-3">
                        <div class="counter-box">
                            <span class="counter" data-target="{{ $counter['count'] }}">0</span>
                            <h5>{{ $counter['title'] }}</h5>
                            <p class="text-muted">{{ $counter['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">আমাদের সুবিধাসমূহ</h2>
                    <p class="text-muted">অত্যাধুনিক অবকাঠামো এবং সেবার ব্যবস্থা</p>
                </div>
            </div>

            <div class="row g-4">
                @foreach (settings('about_page')->facilities as $facility)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ $facility['image'] && Storage::exists($facility['image']) ? Storage::url($facility['image']) : asset('assets/images/ammsh.png') }}" class="card-img-top" alt="Emergency Ward">
                        <div class="card-body">
                            <h5 class="card-title">{{ $facility['title'] }}</h5>
                            <p class="card-text">{{ $facility['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
