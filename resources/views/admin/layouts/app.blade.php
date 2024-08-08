<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin {{ $title }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}assets/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('') }}assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{ asset('') }}assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">
    <!-- Rating -->


    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/vendor/star-rating/star-rating-svg.css" />

</head>

<body>
    @include('sweetalert::alert')

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    @include('admin.components.header')

    @include('admin.components.sidebar')
    <div class="content-body">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    </div>

    <!--**********************************
            Footer start
        ***********************************-->
    {{-- <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">AnandaMw</a> 2024</p>
        </div>
    </div> --}}
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->


    <!-- Rating -->

    <script src="{{ asset('') }}assets/vendor/star-rating/jquery.star-rating-svg.js"></script>


    <!-- Required vendors -->
    <script src="{{ asset('') }}assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('') }}assets/vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('') }}assets/vendor/apexchart/apexchart.js"></script>

    <!-- Datatable -->
    <script src="{{ asset('') }}assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins-init/datatables.init.js"></script>


    <!-- Dashboard 1 -->
    <script src="{{ asset('') }}assets/js/dashboard/dashboard-1.js"></script>

    <script src="{{ asset('') }}assets/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="{{ asset('') }}assets/js/custom.min.js"></script>
    <script src="{{ asset('') }}assets/js/deznav-init.js"></script>
    <script src="{{ asset('') }}assets/js/demo.js"></script>
    <script src="{{ asset('') }}assets/js/styleSwitcher.js"></script>
    <script>
        function carouselReview() {
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 20,
                nav: false,
                rtl: true,
                dots: false,
                navText: ['', ''],
                responsive: {
                    0: {
                        items: 3
                    },
                    450: {
                        items: 4
                    },
                    600: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },

                    1200: {
                        items: 7
                    },
                    1601: {
                        items: 5
                    }
                }
            })
        }
        jQuery(window).on('load', function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script>
</body>


</html>
