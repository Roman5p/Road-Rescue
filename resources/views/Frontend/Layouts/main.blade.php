<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Include the header section --}}
    @include('Frontend.layouts.header')
</head>
<body>
    {{-- Include the spinner section --}}
    @include('Frontend.layouts.spinner')
    {{-- Include the topbar section --}}
    @include('Frontend.layouts.topbar')
    {{-- Include the navbar section --}}
    @include('Frontend.layouts.navbar')
    <main>
        {{-- Main content section --}}
        @yield('main-section')
    </main>
    {{-- Include the footer section --}}
    @include('Frontend.layouts.footer')

    @include('Frontend.layouts.footer-scripts')
</body>
</html>
