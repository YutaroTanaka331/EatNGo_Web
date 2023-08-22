<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EatN'Go - {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link href="lib/animate/animate.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    {{-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    {{-- <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> --}}
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-prim" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Araya Mansion No.8 - 22,
                        Kec. Pakis, Kabupaten Malang</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 800 0000 0000</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>EatN'Go@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-prim m-0"><i class="fa fa-utensils me-3"></i>EatN'Go</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/home" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                    <a href="/restaurants"
                        class="nav-item nav-link {{ $title === 'Restaurants' ? 'active' : '' }}">Restaurants</a>
                </div>
                <a href="https://drive.google.com/drive/folders/1OxkXwYsbOZHeodUFyZgROkFlhxway6eS?usp=sharing"
                    class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-download" aria-hidden="true"></i>
                    Download EatN'Go on your Phone</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('container')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Araya Mansion No.8 - 22, Kec.
                        Pakis, Kabupaten Malang</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 800 0000 0000</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>EatN'Go@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">EatN'Go</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="lib/wow/wow.min.js"></script> --}}
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    {{-- <script src="lib/easing/easing.min.js"></script> --}}
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    {{-- <script src="lib/waypoints/waypoints.min.js"></script> --}}
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    {{-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> --}}
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    {{-- <script src="lib/tempusdominus/js/moment.min.js"></script> --}}
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    {{-- <script src="lib/tempusdominus/js/moment-timezone.min.js"></script> --}}
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    {{-- <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> --}}
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    {{-- <script src="js/main.js"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
