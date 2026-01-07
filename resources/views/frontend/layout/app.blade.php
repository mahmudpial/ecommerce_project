<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Simple Shop')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Product Hover Effect -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('style')
</head>

<body>

    <!-- Navbar -->
    @include('frontend.layout.nav')


    <main>
        @yield('content')
    </main>




    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>© {{date('Y')}} SimpleShop — All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- for flash massage auto close -->
    <script>
        const alert = bootstrap.Alert.getOrCreateInstance('.alert')
        setTimeout(() => {
            alert.close();
        }, 3000);
    </script>

    <!--  Page Specific Scripts -->
    @yield('script')
</body>

</html>