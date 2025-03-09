@extends('frontend.layouts.main')

@section('title', 'Service - RoadRescue')

@section('main-section')

<style>
    #map {
        width: 100%;
        height: 400px;
        background-color: #f0f0f0;
    }

    .location-info {
        padding: 10px;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .location-info p {
        margin: 0;
        font-size: 16px;
    }

    .location-info a {
        font-size: 14px;
    }

    .warning-message {
        padding: 15px;
        background-color: #fff3cd;
        border: 1px solid #ffeeba;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 16px;
    }

    .service-item {
        padding: 10px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .service-item i {
        margin-right: 10px;
    }

    .continue-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .continue-btn:hover {
        background-color: #0056b3;
    }
</style>

<div class="container-fluid p-0">
    <!-- Map Section -->
    <div id="map"></div>

    <!-- Location Info -->
    <div class="location-info">
        <p><i class="fas fa-map-marker-alt"></i> {{ $location ?? 'Pokhara, Gandaki Pradesh, 33700' }}</p>
        <a href="#" class="text-primary float-end">EDIT</a>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2 class="mb-3">What help do you need?</h2>

        <!-- Warning Message -->
        <div class="warning-message">
            <i class="fas fa-exclamation-circle"></i> No services available<br>
            Unfortunately, there are no services available at this location.
        </div>

        <!-- Service List -->
        <p class="text-muted mb-3">Currently not available</p>
        <div class="service-item">
            <i class="fas fa-tools"></i>
            <span>Service 1</span>
        </div>
        <div class="service-item">
            <i class="fas fa-car"></i>
            <span>Service 2</span>
        </div>

        <!-- Continue Button -->
        <button class="continue-btn mt-3">Continue <i class="fas fa-arrow-right ms-2"></i></button>
    </div>
</div>

@endsection