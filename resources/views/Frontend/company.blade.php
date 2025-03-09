@extends('frontend.layouts.main')

@section('title', 'Authorized Companies')

@section('main-section')

    <link href="{{ asset('source/css/company.css') }}" rel="stylesheet">

    <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('img/carousel-bg-1.jpg') }});">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Authorized Companies</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Roadside Assistance</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Company</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container main-section">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Roadside Assistance Providers</h1>
                <p>In moments of car trouble like a sudden flat tire or engine issues, roadside assistance becomes a
                    lifeline. Whether locked out or facing a dead battery, help is just a click away. Find a provider by
                    name and ensure reliable assistance whenever the need arises.</p>
                <h4>How much? How long?</h4>
                <p>Tap below to get prices and timing from local providers.</p>
                <button class="btn btn-find"><i class="fas fa-map-marker-alt me-2"></i> Find Providers Near Me</button>
                {{-- <p class="mt-4">Or find providers alphabetically:</p>
                <div class="alphabet-links">
                    <a href="#">#</a>
                    <a href="#">A</a>
                    <a href="#">B</a>
                    <a href="#">C</a>
                    <a href="#">D</a>
                    <a href="#">E</a>
                    <a href="#">F</a>
                    <a href="#">G</a>
                    <a href="#">H</a>
                    <a href="#">I</a>
                    <a href="#">J</a>
                    <a href="#">K</a>
                    <a href="#">L</a>
                    <a href="#">M</a>
                    <a href="#">N</a>
                    <a href="#">O</a>
                    <a href="#">P</a>
                    <a href="#">Q</a>
                    <a href="#">R</a>
                    <a href="#">S</a>
                    <a href="#">T</a>
                    <a href="#">U</a>
                    <a href="#">V</a>
                    <a href="#">W</a>
                    <a href="#">X</a>
                    <a href="#">Y</a>
                    <a href="#">Z</a>
                </div> --}}
            </div>
            <div class="col-md-6 text-center">
                <!-- Placeholder for Illustration -->
                <img src="{{ asset('source/img/illus.webp') }}" alt="Roadside Assistance Illustration"
                    class="illustration img-fluid" style="max-width: 65%; height: 65%;">
            </div>
        </div>
    </div>

    <!-- Provider Section -->
    <div class="container provider-section mt-0">
        <div class="row mb-3  ">
            <div class="col-md-10 mx-auto">
                <div class="provider-card">
                    <h3>Top Providers for Kaski</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-secondary text-white">
                                <tr class="text-center">
                                    <th>Service Provider</th>
                                    <th>Services</th>
                                    <th>Avg. ETA</th>
                                    <th>Contact</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>TVS Service Center</h5>
                                        <p class="">TVS Service Center, located in Parsyang, Pokhara, provides reliable roadside
                                            assistance.</p>
                                    </td>
                                    <td>
                                        <ul class="service-list">
                                            <li>Out of fuel</li>
                                            <li>Locked out</li>
                                            <li>Flat tire</li>
                                            <li>Won't start</li>
                                        </ul>
                                    </td>
                                    <td class="text-center">
                                        <p>25-35 min</p>
                                    </td>
                                    <td class="text-center">
                                        <ul class="contact-list">
                                            <li><i class="fas fa-phone-alt"></i> 061-123456</li>
                                            <li><i class="fas fa-envelope"></i> info@tvsservice.com</li>
                                        </ul>
                                    </td>
                                    {{-- <td class="text-center">
                                        <button class="btn btn-get-help">Get Help Now</button>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-end mt-3">
        <a href="#" class="text-white">View More <i class="fas fa-arrow-right"></i></a>
    </div>

@endsection
