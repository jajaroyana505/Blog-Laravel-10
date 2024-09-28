<nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand text-uppercase" href="index-1.html">
            <img class="logo-light" src="images/logo-light.png" alt="" height="25">
            <img class="logo-dark" src="images/logo-dark.png" alt="" height="25">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
            <!-- toggle button -->
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link {{( $title=='home' )?'active':'';}}" href="{{ url()->current() != url('/') ? url('/') : '#home' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#review">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact">Contact</a>
                </li>
                <li class="nav-item ">
                    <a href="/blogs" class="nav-link {{( $title=='blog' )?'active':'';}} mb-3 mb-lg-0">Blog</a>
                </li>
            </ul>
            <!-- Button trigger modal -->
            <div class="d-flex gap-2">
                <a href="{{ route('register')}}" type="button" class="btn btn-primary nav-btn">
                    Sign Up
                </a>
                <a href="{{ route('login')}}" type="button" class="btn btn-outline-white nav-btn">
                    Login
                </a>

            </div>
            <!-- Nav btn -->
        </div>
    </div><!-- End container -->
</nav>
<div class="bg-primary" style="height: 75px;">

</div>
<!-- End Navbar -->