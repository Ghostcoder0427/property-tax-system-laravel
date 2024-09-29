<header>
    <!-- Intro settings -->
    <style>
        /* Default height for small devices */
        #intro-example {
            height: 400px;
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 600px;
            }
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro-example" class="p-5 text-center bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                    <h5 class="mb-4">Best & free guide of responsive web design</h5>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg m-2"
                        href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow"
                        target="_blank">Start tutorial</a>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg m-2"
                        href="https://mdbootstrap.com/docs/standard/" target="_blank" role="button">Download MDB UI
                        KIT</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <h5 class="pt-1">MDB</h5>
        </a>
        <!-- Toggle button -->
        <button data-mdb-button-init class="navbar-toggler" type="button" data-mdb-collapse-init
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->

            <!-- Right elements -->
            <div class="d-flex align-items-center justify-content-start">
                <!-- Icon -->
                <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart text-white"></i>
                </a>

                <!-- Notifications -->
                <div class="dropdown">
                    <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell text-white"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </div>
                <!-- Avatar -->
                <div class="dropdown">
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                            alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<div style="height: 300px;"></div>

<!-- Footer -->
<footer class="bg-primary text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a data-mdb-ripple-init class="btn btn-outline-primary btn-floating m-1 border border-white" href="#!"
                role="button"><i class="fab fa-facebook-f text-white"></i></a>

            <!-- Twitter -->
            <a data-mdb-ripple-init class="btn btn-outline-primary btn-floating m-1 border border-white" href="#!"
                role="button"><i class="fab fa-twitter text-white"></i></a>

            <!-- Google -->
            <a data-mdb-ripple-init class="btn btn-outline-primary btn-floating m-1 border border-white" href="#!"
                role="button"><i class="fab fa-google text-white"></i></a>

            <!-- Instagram -->
            <a data-mdb-ripple-init class="btn btn-outline-primary btn-floating m-1 border border-white" href="#!"
                role="button"><i class="fab fa-instagram text-white"></i></a>

            <!-- Linkedin -->
            <a data-mdb-ripple-init class="btn btn-outline-primary btn-floating m-1 border border-white" href="#!"
                role="button"><i class="fab fa-linkedin-in text-white"></i></a>

            <!-- Github -->
            <a data-mdb-ripple-init class="btn btn-outline-primary btn-floating m-1 border border-white" href="#!"
                role="button"><i class="fab fa-github text-white"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer --> --}}
