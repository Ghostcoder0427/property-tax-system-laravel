<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Tax System - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <img src="{{ asset('assets/images/backgrounds/navalmap.jpg') }}" width="" alt="">


    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">

            <div>
                <h3 class="float-md-start mb-0"></h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{ route('login') }}">Login
                    </a>
                </nav>

                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{ route('register') }}">
                        Register</a>
                </nav>
            </div>

        </header>
        <main class="px-3">
            <h1 class="text-primary">Welcome User</h1>
            <p class="text-white">Login to your account.</p>
        </main>

        <footer class="mt-auto text-white">
            <p>Copyright &copy; CAL-Q System Solutions <?php echo date('Y'); ?></p>
        </footer>
    </div>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
