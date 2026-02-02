<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আল মুতমাইন্নাহ মা ও শিশু হাসপাতাল</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex gap-4">
                        <a href="tel:028333081"><i class="fas fa-phone-alt me-2"></i> ইমারজেন্সি: ০২ ৮৩৩৩০৮১</a>
                        <a href="mailto:info@ammsh.com"><i class="fas fa-envelope me-2"></i> info@ammsh.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex justify-content-md-end gap-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('assets/images/logo.png') }}" width="70" alt="Logo" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">আমাদের
                            সম্পর্কে</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('doctors') ? 'active' : '' }}"
                            href="{{ route('doctors') }}">ডাক্তারগণ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('departments') ? 'active' : '' }}"
                            href="{{ route('departments') }}">বিভাগসমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('appointment') ? 'active' : '' }}"
                            href="{{ route('appointment') }}">অ্যাপয়েন্টমেন্ট</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">যোগাযোগ</a>
                    </li>
                </ul>
                <a href="{{ route('appointment') }}" class="btn btn-primary ms-lg-3 mt-3 mt-lg-0">অ্যাপয়েন্টমেন্ট বুক
                    করুন</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>আল মুতমাইন্নাহ মা ও শিশু হাসপাতাল</h5>
                    <p class="mt-3">
                        শরীয়ত সম্মত পরিবেশে আধুনিক ও সাশ্রয়ী চিকিৎসা সেবা প্রদানে অঙ্গীকারবদ্ধ একটি নির্ভরযোগ্য মা ও
                        শিশু হাসপাতাল।
                        সঠিক চিকিৎসার মাধ্যমে দেহ ও মনের প্রশান্তি নিশ্চিত করাই আমাদের লক্ষ্য।
                    </p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5>দ্রুত লিংক</h5>
                    <ul class="footer-links">
                        <li><a href="index.html">হোম</a></li>
                        <li><a href="about.html">আমাদের সম্পর্কে</a></li>
                        <li><a href="doctors.html">চিকিৎসকবৃন্দ</a></li>
                        <li><a href="departments.html">বিভাগসমূহ</a></li>
                        <li><a href="contact.html">যোগাযোগ</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>আমাদের সেবাসমূহ</h5>
                    <ul class="footer-links">
                        <li><a href="#">গাইনি ও প্রসূতি সেবা</a></li>
                        <li><a href="#">শিশুরোগ সেবা</a></li>
                        <li><a href="#">জেনারেল মেডিসিন</a></li>
                        <li><a href="#">ডায়াগনস্টিক ও প্যাথলজি</a></li>
                        <li><a href="#">২৪ ঘণ্টা ফার্মেসি</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h5>যোগাযোগের তথ্য</h5>
                    <ul class="footer-links">
                        <li>
                            <i class="fas fa-map-marker-alt me-2"></i>
                            ৫ আউটার সার্কুলার রোড, রাজারবাগ শরীফ, ঢাকা<br>
                            পুলিশ লাইন ৩ নং গেইটের বিপরীতে (পার্টি হাউজ কমিউনিটি সেন্টারের উপরে)
                        </li>
                        <li><i class="fas fa-phone-alt me-2"></i> ০২-৮৩৩৩০৮১, ০২-৯৩৪১৩৯৪</li>
                        <li><i class="fas fa-mobile-alt me-2"></i> ০১৭৪০৬৫৬৭৪৮, ০১৭১১০৫২৩৬৬</li>
                        <li><i class="fas fa-clock me-2"></i> ২৪ ঘণ্টা চিকিৎসা ও ফার্মেসি সেবা</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p class="mb-0">
                    &copy; ২০২৬ আল মুতমাইন্নাহ মা ও শিশু হাসপাতাল | সর্বস্বত্ব সংরক্ষিত
                </p>
            </div>
        </div>
    </footer>

    <!-- Floating Buttons -->
    <div class="floating-buttons">
        <button id="whatsappBtn" class="floating-btn whatsapp" title="হোয়াটসঅ্যাপ করুন">
            <i class="fab fa-whatsapp"></i>
        </button>
        <button id="emergencyBtn" class="floating-btn emergency" title="জরুরী সেবা">
            <i class="fas fa-phone-alt"></i>
        </button>
        <button id="scrollToTop" class="floating-btn scroll-top" title="উপরে যান">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <!-- Appointment Confirmation Modal -->
    <div class="modal fade" id="appointmentConfirmationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">অ্যাপয়েন্টমেন্ট নিশ্চিত!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center p-5">
                    <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                    <h4 class="mb-3">ধন্যবাদ!</h4>
                    <p>আপনার অ্যাপয়েন্টমেন্ট সফলভাবে বুক করা হয়েছে। আমাদের টিম শীঘ্রই আপনার সাথে নিশ্চিতকরণের জন্য
                        যোগাযোগ করবে।</p>
                    <p class="text-muted">আপনার নিবন্ধিত ইমেল ঠিকানায় একটি নিশ্চিতকরণ ইমেল পাঠানো হয়েছে।</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>

    @stack('scripts')
</body>

</html>
