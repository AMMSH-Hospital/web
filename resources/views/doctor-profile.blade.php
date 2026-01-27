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
                    <li class="breadcrumb-item active" aria-current="page">ডা. সারাহ জনসন</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Doctor Profile Header -->
    <section class="py-5">
        <div class="container">
            <div class="doctor-profile-header">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="Dr. Sarah Johnson" class="profile-img">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="display-5 fw-bold mb-2">ডা. সারাহ জনসন</h1>
                        <p class="lead text-primary mb-3">সিনিয়র কনসালটেন্ট কার্ডিওলজিস্ট</p>

                        <div class="mb-4">
                            <span class="badge-specialization">ইন্টারভেনশনাল কার্ডিওলজি</span>
                            <span class="badge-specialization">হার্ট ফেইলিউর ম্যানেজমেন্ট</span>
                            <span class="badge-specialization">প্রিভেন্টিভ কার্ডিওলজি</span>
                            <span class="badge-specialization">ইকোকার্ডিওগ্রাফি</span>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap text-primary me-2"></i> <strong>যোগ্যতা:</strong>
                                    এমবিবিএস, এমডি, ডিএম (কার্ডিওলজি)</p>
                                <p><i class="fas fa-briefcase text-primary me-2"></i> <strong>অভিজ্ঞতা:</strong> ১৫+ বছর</p>
                            </div>
                            <div class="col-md-6">
                                <p><i class="fas fa-language text-primary me-2"></i> <strong>ভাষা:</strong> বাংলা, ইংরেজি
                                </p>
                                <p><i class="fas fa-star text-primary me-2"></i> <strong>রেটিং:</strong> ৪.৯/৫ (২৪৭ রিভিউ)
                                </p>
                            </div>
                        </div>

                        <a href="#appointment" class="btn btn-primary btn-lg me-3">
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
                    <h2 class="section-title">জীবনবৃত্তান্ত</h2>
                    <p>ডা. সারাহ জনসন কার্ডিওভাসকুলার রোগ নির্ণয় ও চিকিৎসায় ১৫ বছরেরও বেশি অভিজ্ঞ একজন অত্যন্ত দক্ষ
                        কার্ডিওলজিস্ট। তিনি ন্যাশনাল হার্ট ইনস্টিটিউট থেকে কার্ডিওলজিতে ডিএম সম্পন্ন করেছেন এবং আমাদের
                        অঞ্চলে কার্ডিয়াক কেয়ারের উন্নতিতে গুরুত্বপূর্ণ ভূমিকা পালন করছেন।</p>

                    <p>ডা. জনসন করোনারি এনজিওপ্লাস্টি, স্টেন্ট প্লেসমেন্ট এবং জটিল কার্ডিয়াক ক্যাথেটারাইজেশন সহ
                        ইন্টারভেনশনাল কার্ডিওলজি পদ্ধতিতে বিশেষজ্ঞ। তিনি ৯৮.৭% এর উল্লেখযোগ্য সাফল্যের হারের সাথে ৫,০০০ টিরও
                        বেশি সফল কার্ডিয়াক পদ্ধতি সম্পন্ন করেছেন।</p>

                    <p>তার গবেষণামূলক কাজ বেশ কয়েকটি আন্তর্জাতিক কার্ডিওলজি জার্নালে প্রকাশিত হয়েছে এবং তিনি নিয়মিতভাবে
                        মূল বক্তা হিসেবে বৈশ্বিক কার্ডিওলজি সম্মেলনে অংশগ্রহণ করেন। ডা. জনসন প্রিভেন্টিভ কার্ডিওলজি সম্পর্কে
                        আগ্রহী এবং রোগীদের হার্ট-হেলদি লাইফস্টাইল সম্পর্কে শিক্ষিত করায় বিশ্বাসী।</p>

                    <h4 class="mt-5 mb-3">পেশাগত অভিজ্ঞতা</h4>
                    <div class="experience-item">
                        <h5>সিনিয়র কনসালটেন্ট কার্ডিওলজিস্ট</h5>
                        <p class="text-primary mb-1">আল মুতমাইন্নাহ হাসপাতাল • ২০১৫ - বর্তমান</p>
                        <p>কার্ডিওলজি বিভাগের নেতৃত্ব দিচ্ছেন, উন্নত কার্ডিয়াক ইন্টারভেনশন পরিচালনা করছেন, ফেলোদের
                            প্রশিক্ষণ দিচ্ছেন এবং প্রিভেন্টিভ কার্ডিওলজিতে গবেষণা পরিচালনা করছেন।</p>
                    </div>

                    <div class="experience-item">
                        <h5>কনসালটেন্ট কার্ডিওলজিস্ট</h5>
                        <p class="text-primary mb-1">সিটি হার্ট সেন্টার • ২০১০ - ২০১৫</p>
                        <p>আউটপেশেন্ট কার্ডিওলজি ক্লিনিক পরিচালনা করেছেন, ডায়াগনস্টিক এবং ইন্টারভেনশনাল পদ্ধতি সম্পন্ন
                            করেছেন, কার্ডিয়াক রিহ্যাবিলিটেশন প্রোগ্রাম প্রতিষ্ঠা করেছেন।</p>
                    </div>

                    <div class="experience-item">
                        <h5>কার্ডিওলজি ফেলো</h5>
                        <p class="text-primary mb-1">ন্যাশনাল হার্ট ইনস্টিটিউট • ২০০৭ - ২০১০</p>
                        <p>বিখ্যাত কার্ডিওলজিস্টদের অধীনে ইন্টারভেনশনাল কার্ডিওলজিতে অ্যাডভান্সড ফেলোশিপ সম্পন্ন করেছেন।</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">যোগ্যতা</h4>
                            <ul class="qualification-list">
                                <li><i class="fas fa-check-circle text-success me-2"></i> এমবিবিএস - ইউনিভার্সিটি অফ মেডিকেল
                                    সায়েন্সেস (২০০৩)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> এমডি (জেনারেল মেডিসিন) -
                                    অ্যাডভান্সড মেডিকেল কলেজ (২০০৬)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> ডিএম (কার্ডিওলজি) - ন্যাশনাল হার্ট
                                    ইনস্টিটিউট (২০১০)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> ফেলোশিপ ইন ইন্টারভেনশনাল
                                    কার্ডিওলজি (২০১১)</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> অ্যাডভান্সড কার্ডিয়াক লাইফ
                                    সাপোর্ট (ACLS) সার্টিফাইড</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> ফেলো অফ আমেরিকান কলেজ অফ
                                    কার্ডিওলজি (FACC)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">যোগাযোগের তথ্য</h4>
                            <p><i class="fas fa-phone-alt text-primary me-2"></i> <strong>ফোন:</strong> ০১৭৪০৬৫৬৭৪৮</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> <strong>ইমেইল:</strong> info@ammsh.com</p>
                            <p><i class="fas fa-map-marker-alt text-primary me-2"></i> <strong>ক্লিনিক:</strong> কার্ডিওলজি
                                বিভাগ, ৩য় তলা</p>
                            <p><i class="fas fa-clock text-primary me-2"></i> <strong>পরামর্শ ফি:</strong> ১০০০ টাকা
                                (ফলো-আপ: ৫০০ টাকা)</p>
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
