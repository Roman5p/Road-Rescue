@extends('frontend.layouts.main')

@section('title', 'Service - RoadRescue')

@section('main-section')

    <link href="{{ asset('source/css/map.css') }}" rel="stylesheet">

    <div class="container-fluid p-0">
        <!-- Map Section -->
        <div id="map" style="height: 400px;"></div>

        <!-- Location Info -->
        <div class="location-info">
            <p><i class="fas fa-map-marker-alt"></i> <span id="location-name">Getting location...</span></p>
        </div>

        <!-- Include Google Maps JS (replace YOUR_API_KEY with your actual Google Maps API key) -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

        <script>
            let map;
            let marker;

            function initMap() {
                // Initialize map with default coordinates (will be updated with current location)
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 28.2096,
                        lng: 83.9856
                    }, // Default to Pokhara
                    zoom: 13
                });

                // Create marker
                marker = new google.maps.Marker({
                    position: {
                        lat: 28.2096,
                        lng: 83.9856
                    },
                    map: map
                });

                // Get current location
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        function(position) {
                            const pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };

                            // Update map center and marker
                            map.setCenter(pos);
                            marker.setPosition(pos);

                            // Reverse geocode to get location name
                            const geocoder = new google.maps.Geocoder();
                            geocoder.geocode({
                                location: pos
                            }, function(results, status) {
                                if (status === 'OK' && results[0]) {
                                    const locationName = results[0].formatted_address;
                                    document.getElementById('location-name').textContent = locationName;
                                    marker.setTitle(locationName);
                                    // Add info window
                                    const infowindow = new google.maps.InfoWindow({
                                        content: locationName
                                    });
                                    infowindow.open(map, marker);
                                } else {
                                    document.getElementById('location-name').textContent =
                                        'Location name unavailable';
                                    console.error('Geocoder failed:', status);
                                }
                            });
                        },
                        function(error) {
                            console.error('Error getting location:', error);
                            document.getElementById('location-name').textContent = 'Pokhara, Gandaki Pradesh, 33700';
                            marker.setTitle('Pokhara, Gandaki Pradesh, 33700');
                        }
                    );
                } else {
                    console.error('Geolocation not supported by this browser');
                    document.getElementById('location-name').textContent = 'Pokhara, Gandaki Pradesh, 33700';
                    marker.setTitle('Pokhara, Gandaki Pradesh, 33700');
                }
            }
        </script>

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
