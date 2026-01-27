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
                    <h1 class="display-5 fw-bold mb-4">আমাদের সম্পর্কে <span class="text-primary">আল মুতমাইন্নাহ</span></h1>
                    <p class="lead">চিকিৎসা গ্রহণ করা নূরে মুজাসসাম, হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম
                        উনার সম্মানিত সুন্নত মুবারক। একজন মানুষের মৌলিক চাহিদার মধ্যে চিকিৎসা একটি গুরুত্বপূর্ণ বিষয়।</p>
                    <p>‘সর্বপ্রাণ সেবা’ শব্দটি চিকিৎসার সঙ্গে সম্পর্কিত হলেও বর্তমানে চিকিৎসার সময় হাসপাতাল ও ক্লিনিকগুলোতে
                        ‘সর্বপ্রাণ সেবা’ বিষয়টি খুবই উপেক্ষিত। মেডিকেল চেক-আপ এবং চিকিৎসা আজকাল একটি ব্যবসায় পরিণত হয়েছে।
                        বর্তমানে চিকিৎসা গ্রহণ সম্পর্কিত শরীয়ত বিষয়ে মানুষের ধারণা না থাকায় শরীয়ত সম্মত পরিবেশের মধ্যে
                        চিকিৎসা গ্রহণ এবং হাসপাতালের অন্যান্য সুবিধা পাওয়া খুবই দূর্লভ হয়ে দাড়িয়েছে। সব হাসপাতালেই চিকিৎসা
                        ব্যয় আকাশ ছোঁয়া। নিম্ন মধ্যবিত্ত এবং মধ্যবিত্ত পরিবারের পক্ষে চিকিৎসার জন্য এ অর্থের ব্যবস্থাপনা
                        করা অত্যন্ত কঠিন হয়ে দাড়িয়েছে। তাই নারী ও শিশুদের সঠিক চিকিৎসার জন্য আল মুতমাইন্না মা ও শিশু
                        হাশপাতাল সাশ্রয়ী মূল্যে অনেকগুলি চিকিৎসা প্যাকেজের সুব্যবস্থা রেখেছে।</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1516549655669-df6654e435de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80"
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
                            <p class="card-text">শরীয়ত সম্মত পরিবেশে ন্যূনতম খরচে সর্বোত্তম চিকিৎসা সেবা প্রদান করা। সঠিক
                                চিকিৎসার মাধ্যমে রুগীর দেহ ও মনকে প্রশান্তি দেয়া।</p>
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
                            <p class="card-text">রোগীর যত্ন, চিকিৎসা শিক্ষা এবং উদ্ভাবনী গবেষণায় শ্রেষ্ঠত্বের জন্য স্বীকৃত
                                একটি শীর্ষস্থানীয় স্বাস্থ্যসেবা প্রতিষ্ঠান হওয়া, পাশাপাশি কমিউনিটি স্বাস্থ্য ও সুস্থতার
                                প্রতি আমাদের প্রতিশ্রুতি বজায় রাখা।</p>
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
                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="25">0</span>
                        <h5>বছরের অভিজ্ঞতা</h5>
                        <p class="text-muted">১৯৯৫ সাল থেকে সেবায় নিয়োজিত</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="150">0</span>
                        <h5>বিশেষজ্ঞ ডাক্তার</h5>
                        <p class="text-muted">অভিজ্ঞ চিকিৎসকদের টিম</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="500">0</span>
                        <h5>স্টাফ মেম্বার</h5>
                        <p class="text-muted">নিবেদিত সেবাকর্মী</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="counter-box">
                        <span class="counter" data-target="50">0</span>
                        <h5>বিভাগ</h5>
                        <p class="text-muted">সমন্বিত চিকিৎসা বিভাগ</p>
                    </div>
                </div>
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
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1586773860418-dc22f8b874bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top" alt="Emergency Ward">
                        <div class="card-body">
                            <h5 class="card-title">ইনডোর কেবিন ও ওয়ার্ড</h5>
                            <p class="card-text">ভিআইপি কেবিন, এ/সি কেবিন, এ/সি সেমি কেবিন এবং এ/সি ওয়ার্ড সুবিধা রয়েছে।</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1584467735871-8db9ac8d0916?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top" alt="ICU">
                        <div class="card-body">
                            <h5 class="card-title">আধুনিক প্যাথলজিক্যাল ল্যাবরেটরি</h5>
                            <p class="card-text">ক্লিনিক্যাল প্যাথলজি, হেমাটোলজি, বায়োকেমিস্ট্রি, মাইক্রোবায়োলজি সহ সব
                                ধরনের পরীক্ষা-নিরীক্ষার ব্যবস্থা।</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top" alt="Diagnostic Center">
                        <div class="card-body">
                            <h5 class="card-title">রোগ নির্ণয় সরঞ্জাম</h5>
                            <p class="card-text">অত্যাধুনিক এক্স-রে, ইসিজি এবং আল্ট্রা-সোনোগ্রাম মেশিন সহ উন্নত প্রযুক্তিগত
                                ডায়াগনস্টিক সুবিধা।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
