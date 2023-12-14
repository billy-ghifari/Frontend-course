<!DOCTYPE html>
<html lang="en">

<head>
    @yield('head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('templates.partials.header')
    <!-- End Header -->

    <!-- ======= Main ======= -->
    <main id="main" class="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('templates.partials.footer')


    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>

    <script>
        //<---- Blog ---->
        $(document).ready(function() {
            $("#see-all-blog").click(function() {
                $(".hidden-blog").show(500);
            });
            $("#hide-all-blog").click(function() {
                $(".hidden-blog").hide(500);
            });
        })

        //<---- Articles ---->
        $(document).ready(function() {
            $("#see-all-articles").click(function() {
                $(".hidden-articles").show(500);
            });
        })
        $("#hide-all-articles").click(function() {
            $(".hidden-articles").hide(500);
        });

        function toggleDropdown(dropdown) {
            dropdown.classList.toggle("active");
        }

        //<---- scroll Course ---->
        const container = document.getElementById("scroll-course");
        // where "container" is the id of the container
        container.addEventListener("wheel", function(e) {
            if (e.deltaY > 0) {
                container.scrollLeft += 124;
                e.preventDefault();
                // prevenDefault() will help avoid worrisome 
                // inclusion of vertical scroll 
            } else {
                container.scrollLeft -= 124;
                e.preventDefault();
            }
        });
    </script>

</body>