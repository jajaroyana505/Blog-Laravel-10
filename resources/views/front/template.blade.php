<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@stack('titile') | MJProject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap v5.1.3 Landing Page Template" />
    <meta name="keywords" content="bootstrap v5.1.3, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />

    <!-- fevicon -->
    <link rel="shortcut icon" href="{{asset('front')}}/images/favicon.ico">

    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap.min.css" type="text/css" />

    <link rel="stylesheet" href="{{asset('front')}}/css/aos.css" />

    <link rel="stylesheet" href="{{asset('front')}}/css/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{asset('front')}}/css/materialdesignicons.min.css" type="text/css" />

    <link rel="stylesheet" href="{{asset('front')}}/css/style.min.css" type="text/css" />

    @stack('css')
</head>



<body class="overflow-hidden-x" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    @include('front.navbar')
    @yield('content')

    <div>
        <!-- Start Home -->

        <!-- End Home -->

        <!-- START FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-10 text-center">
                        <a href="javascript:void(0)"><img src="images/logo-light.png" height="24" alt=""></a>
                        <p class="mx-auto mt-sm-4">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Home</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">About us</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Order</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Member</a>
                                </li>
                                <li class="list-inline-item mx-lg-3 m-2">
                                    <a class="text-white" href="javascript:void(0)">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!--end container-->
        </footer>
        <!-- END FOOTER -->
    </div>

    <!-- FOOTER-ALT -->
    <div class="footer-alt pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-white fs-15">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Oxhen. Design by
                            <i class="mdi mdi-heart text-danger"></i> Themesdesign
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER-ALT -->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->

    <!--Custom js-->
    <script src="{{asset('front')}}/js/counter.js"></script>

    <!--Bootstrap Js-->
    <script src="{{asset('front')}}/js/bootstrap.bundle.min.js"></script>

    <!-- animation -->
    <script src="{{asset('front')}}/js/aos.js"></script>

    <!-- swiper js -->
    <script src="{{asset('front')}}/js/swiper-bundle.min.js"></script>

    <!-- contact -->
    <script src="{{asset('front')}}/js/contact.js"></script>

    <!-- Team particles-->
    <script src="{{asset('front')}}/js/particles.min.js"></script>

    <!-- App Js -->
    <script src="{{asset('front')}}/js/app.js"></script>

</body>

</html>