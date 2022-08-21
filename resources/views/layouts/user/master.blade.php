<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/libraries/bootstrap/css/bootstrap.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800 | playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles/main.css')}}" />
</head>

<body>
    <!--Navbar-->
    <div class="container">
        @include('layouts.user.navbar')
    </div>
    <!--end navbar-->
    <!-- header -->

    @yield('header')

    <!-- end header -->
    <!-- main -->
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('assets/frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/frontend/libraries/retina/retina.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"></script>
</body>
@include('layouts.user.footer')

</html>
