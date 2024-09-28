<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>@yield('title')</title> -->
    <title>@stack('titile') | MJProject</title>

    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />
    <link
        rel="icon"
        href="{{asset('/')}}assets/img/kaiadmin/favicon.ico"
        type="image/x-icon" />

    <link rel="shortcut icon" href="{{asset('/front')}}/images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('/front')}}/css/bootstrap.min.css" type="text/css" />

    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('/front')}}/css/materialdesignicons.min.css" type="text/css" />

    <!-- css -->
    <link rel="stylesheet" href="{{asset('/front')}}/css/style.min.css" type="text/css" />

    <!-- stuck CSS -->

    @stack('css')
</head>

<body class="vh-100 bg-account-pages">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="p-4">
                    @yield('content')
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>






    @stack('js')
</body>

</html>