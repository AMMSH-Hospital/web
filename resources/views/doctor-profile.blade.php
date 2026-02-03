@extends('layouts.main')

@push('styles')
    <style>
        .qualification-list {
            list-style: none;
            padding: 0;
        }

        .qualification-list li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .qualification-list li:last-child {
            border-bottom: none;
        }

        .experience-item {
            background-color: var(--light-blue);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .badge-specialization {
            background-color: var(--dark-green);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-right: 10px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .schedule-table {
            width: 100%;
        }

        .schedule-table th {
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .schedule-table th:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }

        .time-slot {
            background-color: var(--light-green);
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: 500;
            display: inline-block;
            margin: 2px;
        }

        .time-slot.available {
            background-color: #d1fae5;
            color: #065f46;
        }

        .time-slot.booked {
            background-color: #fee2e2;
            color: #991b1b;
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
                    <li class="breadcrumb-item"><a href="{{ route('doctors') }}">ডাক্তারগণ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $doctor->doctor_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctor Profile Header -->
    <section class="py-5">
        <div class="container">
            <div class="doctor-profile-header">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-5 fw-bold mb-2">{{ $doctor->doctor_name }}</h1>
                        <p class="lead text-primary mb-3">{{ $doctor->designation }}</p>

                        @if ($doctor->tags)
                            <div class="mb-4">
                                @foreach ($doctor->tags as $tag)
                                    <span class="badge-specialization">{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap text-primary me-2"></i> <strong>যোগ্যতা:</strong>
                                    {{ $doctor->qualification }}</p>
                                <p><i class="fas fa-briefcase text-primary me-2"></i> <strong>অভিজ্ঞতা:</strong>
                                    {{ enToBnNumber($doctor->experience_year) }}+ বছর</p>
                            </div>
                            {{-- <div class="col-md-6">
                                <p><i class="fas fa-language text-primary me-2"></i> <strong>ভাষা:</strong> বাংলা, ইংরেজি
                                </p>
                            </div> --}}
                        </div>

                        <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-calendar-check me-2"></i>অ্যাপয়েন্টমেন্ট নিন
                        </a>
                        <a href="tel:+1234567890" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone-alt me-2"></i>এখনই যোগাযোগ করুন
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Biography Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>{!! $doctor->bio !!}</p>

                    <h4 class="mt-5 mb-3">পেশাগত অভিজ্ঞতা</h4>
                    @if ($doctor->professional_experiences)
                        @foreach ($doctor->professional_experiences as $experience)
                            <div class="experience-item">
                                <h5>{{ $experience['title'] }}</h5>
                                <p class="text-primary mb-1">{{ $experience['organization'] }} •
                                    {{ $experience['duration'] }}</p>
                                <p>{{ $experience['description'] }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">যোগ্যতা</h4>
                            @if ($doctor->qualifications)
                                <ul>
                                    @foreach ($doctor->qualifications as $qualification)
                                        <li><i class="fas fa-check-circle text-success me-2"></i> {{ $qualification }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">যোগাযোগের তথ্য</h4>
                            <p><i class="fas fa-phone-alt text-primary me-2"></i> <strong>ফোন:</strong>
                                {{ $doctor->phone }}</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> <strong>ইমেইল:</strong>
                                {{ $doctor->email }}</p>
                            <hr>
                            <p class="text-muted"><small><i class="fas fa-info-circle me-2"></i> আপনার প্রথম পরিদর্শনের সময়
                                    অনুগ্রহ করে পূর্ববর্তী মেডিকেল রেকর্ডগুলি সাথে আনুন।</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="py-5" id="appointment">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">সাপ্তাহিক সময়সূচী</h2>
                    <p class="text-muted">উপলব্ধ সময়ের স্লটে অ্যাপয়েন্টমেন্ট নিন</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-table table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">দিন</th>
                                    <th style="width: 25%;">সময়</th>
                                    <th style="width: 25%;">অবস্থান</th>
                                    <th style="width: 30%;">অ্যাকশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($doctor->schedules as $schedule)
                                    @php
                                        $days = [
                                            'Saturday' => 'শনিবার',
                                            'Sunday' => 'রবিবার',
                                            'Monday' => 'সোমবার',
                                            'Tuesday' => 'মঙ্গলবার',
                                            'Wednesday' => 'বুধবার',
                                            'Thursday' => 'বৃহস্পতিবার',
                                            'Friday' => 'শুক্রবার',
                                        ];
                                        $bnDay = $days[$schedule->day_name] ?? $schedule->day_name;
                                    @endphp
                                    <tr>
                                        <td>{{ $bnDay }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i A') }} -
                                            {{ \Carbon\Carbon::parse($schedule->end_time)->format('h:i A') }}
                                        </td>
                                        <td><span class="badge bg-success">উপলব্ধ</span></td>
                                        <td>
                                            <a href="{{ route('appointment', ['department' => $doctor->department_id, 'doctor' => $doctor->id]) }}"
                                                class="btn btn-sm btn-primary">
                                                বুক করুন
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">কোন সময়সূচী পাওয়া যায়নি</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>দ্রষ্টব্য:</strong> পেমেন্টের পরেই অ্যাপয়েন্টমেন্ট নিশ্চিত করা হয়। অনুগ্রহ করে আপনার
                            নির্ধারিত সময়ের ১৫ মিনিট আগে উপস্থিত হন। জরুরি ক্ষেত্রে অগ্রাধিকার দেওয়া হয়।
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
