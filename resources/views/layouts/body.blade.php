<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/chartjs/Chart.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.svg') }}" type="image/x-icon">
</head>
<body>
    <div id="app">
        <!-- debut sidebar -->
        @include('layouts.sidebar')
        <!-- fin sidebar -->

        <div id="main">
            {{-- debut navbar --}}
            @include('layouts.navbar2')
            {{-- fin navbar --}}

            @yield('content')

            {{-- debut footer --}}
            @include('layouts.footer')
            {{-- fin footer --}}
        </div>
    </div>

    <script src="{{ asset('backend/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <script src="{{ asset('backend/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
</body>
</html>



