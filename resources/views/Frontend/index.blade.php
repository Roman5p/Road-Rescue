@extends('frontend.layouts.main')

@section('title', 'Index')

@section('main-section')

    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('source/img/carousel-bg-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Reliable roadside
                                        assistance—fast</h1>
                                    <p class="text-white mb-4 pb-3 animated slideInDown">Get quotes with ETAs from local
                                        insured providers—in three minutes or less.</p>
                                    <a href="{{ route('map') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Get
                                        Help Now<i class="fa fa-arrow-right ms-3"></i></a>
                                    <p class="text-white mt-4 mb-4 pb-3 animated slideInDown">No membership necessary. Pay
                                        only
                                        for services you receive.
                                    </p>
                                </div>
                                {{-- <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('source/img/carousel-1.png') }}" alt="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <img class="w-100" src="{{ asset('source/img/carousel-bg-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash
                                        Service Center</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ asset('source/img/carousel-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container header-section">
        <h1>We'll get you back on the road</h1>
        <p>Stranded? Need a tow? Locked out? If you've got a problem, we can help.</p>
        <p class="small-text">US 1,300+ providers in all 50 states</p>
    </div>

    <!-- Services Section -->
    <div class="container">
        <div class="row">
            <!-- Flat Tire -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <img src="{{ asset('source/img/tyre.jpeg') }}" alt="Flat Tire Icon" class="rounded-circle mb-3">
                    <button class="btn">Flat Tire</button>
                </div>
            </div>
            <!-- Won't Start -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <img src="{{asset('source/img/bat.webp')}}" alt="Won't Start Icon" class="rounded-circle mb-3">
                    <button class="btn">Won't Start</button>
                </div>
            </div>
            <!-- Locked Out -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <img src="{{asset('source/img/locked.png')}}" alt="Locked Out Icon" class="rounded-circle mb-3">
                    <button class="btn">Locked Out</button>
                </div>
            </div>
            <!-- Out of Gas -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <img src="{{asset('source/img/fuel.jpg')}}" alt="Out of Gas Icon" class="rounded-circle mb-3">
                    <button class="btn">Out of Gas</button>
                </div>
            </div>
            <!-- Basic Tow -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <img src="{{asset('source/img/tow.jpeg')}}" alt="Basic Tow Icon" class="rounded-circle mb-3">
                    <button class="btn">Basic Tow</button>
                </div>
            </div>
            <!-- Stuck -->
            <div class="col-md-4 col-sm-6">
                <div class="service-card">
                    <img src="{{asset('source/img/stuck.png')}}" alt="Stuck Icon" class="rounded-circle mb-3">
                    <button class="btn">Stuck</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <div class="container assistance-section">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <!-- Placeholder for Illustration -->
                <img src="{{ asset('source/img/scene.webp') }}" alt="Roadside Assistance Illustration" class="illustration">
            </div>
            <div class="col-md-6">
                <h2>Fast, trustworthy assistance</h2>
                <p>With Curbside SOS, you’re never stuck for long.</p>
                <div class="point">
                    <div>
                        <h5>Dependable, professional help</h5>
                        <p>Requests are sent to nearby licensed service providers in our network, giving you an added layer
                            of trust.</p>
                    </div>
                </div>
                <div class="point">
                    <div>
                        <h5>Transparency in price and wait time</h5>
                        <p>In a hurry? Must choose the provider with the shortest ETA. On a budget? Pick the best quote, on
                            your terms.</p>
                    </div>
                </div>
                <div class="point">
                    <div>
                        <h5>No-hassle payment</h5>
                        <p>Payment is easy and secure with Curbside SOS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset('source/img/testimonial-1.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3"
                        src="{{ asset('source/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3"
                        src="{{ asset('source/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3"
                        src="{{ asset('source/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
