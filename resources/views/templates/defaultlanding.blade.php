<!DOCTYPE html>
<html lang="en">

<head>
    @yield('head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('templates.partials.headerlanding')
    <!-- End Header -->

    <!-- ======= Main ======= -->
    <main id="main" class="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('templates.partials.footer')
</body>