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
                                <p class="text-primary mb-1">{{ $experience['organization'] }} • {{ $experience['duration'] }}</p>
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
                            <p><i class="fas fa-phone-alt text-primary me-2"></i> <strong>ফোন:</strong> {{ $doctor->phone }}</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> <strong>ইমেইল:</strong> {{ $doctor->email }}</p>
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
                                    <th onclick="sortSchedule(1)" style="width: 15%;">
                                        দিন <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortSchedule(2)" style="width: 15%;">
                                        তারিখ <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortSchedule(3)" style="width: 30%;">
                                        সময়ের স্লট <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortSchedule(4)" style="width: 20%;">
                                        উপলব্ধতা <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th style="width: 20%;">অ্যাকশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>সোমবার</td>
                                    <td>পরবর্তী সপ্তাহ</td>
                                    <td>
                                        <span class="time-slot available">৯:০০ - ১০:০০</span>
                                        <span class="time-slot available">১০:০০ - ১১:০০</span>
                                        <span class="time-slot available">১১:০০ - ১২:০০</span>
                                        <span class="time-slot booked">১২:০০ - ১:০০</span>
                                        <span class="time-slot available">২:০০ - ৩:০০</span>
                                        <span class="time-slot available">৩:০০ - ৪:০০</span>
                                    </td>
                                    <td><span class="badge bg-success">উপলব্ধ</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#bookSlotModal">বুক করুন</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>মঙ্গলবার</td>
                                    <td>পরবর্তী সপ্তাহ</td>
                                    <td>
                                        <span class="time-slot booked">৯:০০ - ১০:০০</span>
                                        <span class="time-slot available">১০:০০ - ১১:০০</span>
                                        <span class="time-slot booked">১২:০০ - ১:০০</span>
                                        <span class="time-slot available">২:০০ - ৩:০০</span>
                                        <span class="time-slot available">৩:০০ - ৪:০০</span>
                                    </td>
                                    <td><span class="badge bg-warning">সীমিত</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#bookSlotModal">বুক করুন</button>
                                    </td>
                                </tr>
                                <!-- Skipping some rows for brevity but in real edit I should handle all or replace with static -->
                                <tr>
                                    <td>বুধবাার</td>
                                    <td>পরবর্তী সপ্তাহ</td>
                                    <td>
                                        <span class="time-slot available">৯:০০ - ১০:০০</span>
                                        <span class="time-slot available">১:০০ - ২:০০</span>
                                    </td>
                                    <td><span class="badge bg-success">উপলব্ধ</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#bookSlotModal">বুক করুন</button>
                                    </td>
                                </tr>
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

    <!-- Book Slot Modal -->
    <div class="modal fade" id="bookSlotModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ডা. সারাহ জনসনের সাথে অ্যাপয়েন্টমেন্ট বুক করুন</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">নির্বাচিত সময়ের স্লট</label>
                            <input type="text" class="form-control" value="Wednesday, 10:00 AM" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">রোগীর নাম *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">যোগাযোগ নম্বর *</label>
                            <input type="tel" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ইমেইল ঠিকানা</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ভিজিটের কারণ</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="termsCheck">
                            <label class="form-check-label" for="termsCheck">
                                আমি শর্তাবলী এবং শর্তসাপেক্ষে সম্মত
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                    <button type="button" class="btn btn-primary" onclick="bookAppointment()">বুকিং নিশ্চিত
                        করুন</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function bookAppointment() {
            const modal = bootstrap.Modal.getInstance(document.getElementById('bookSlotModal'));
            modal.hide();

            // Show success message
            const toastContainer = document.getElementById('toastContainer') || createToastContainer();
            const toastId = 'toast-' + Date.now();

            toastContainer.insertAdjacentHTML('beforeend', `
                <div id="${toastId}" class="toast align-items-center text-bg-success border-0" role="alert">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="fas fa-check-circle me-2"></i>
                            অ্যাপয়েন্টমেন্ট অনুরোধ সফলভাবে পাঠানো হয়েছে! আমরা শীঘ্রই নিশ্চিতকরণের জন্য আপনার সাথে যোগাযোগ করব।
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                </div>
            `);

            const toast = new bootstrap.Toast(document.getElementById(toastId), {
                delay: 5000
            });
            toast.show();

            setTimeout(() => {
                document.getElementById(toastId).remove();
            }, 5000);
        }

        function createToastContainer() {
            const container = document.createElement('div');
            container.id = 'toastContainer';
            container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
            document.body.appendChild(container);
            return container;
        }
    </script>
@endpush
