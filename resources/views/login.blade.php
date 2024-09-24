<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Tax System - Login</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    {{-- <link rel="stylesheet" href="assets/css/styles.min.css" /> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <?php
                                if (isset($_SESSION['error'])) {
                                    echo "<p style='color: red; align: center'>{$_SESSION['error']}</p>";
                                    unset($_SESSION['error']);
                                }
                                ?>
                                <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="assets/images/logos/favicon.png" width="130" alt="">
                                </a>

                                <!-- Tagline -->
                                <h5 class="text-center">Local Goverment Unit of Naval</h5>
                                <h6 class="text-center">Naval, Biliran</h6>

                                <!-- Form (Username, Password, Login) -->
                                <form action="login.php" method="POST">

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp" required>
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required>
                                    </div>

                                    <!-- Remeber this Device -->
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div>

                                        <!-- Forgot Password ? -->
                                        <a class="text-primary fw-bold" href="reset-password.php">Forgot Password ?</a>
                                    </div>

                                    <!-- Login -->
                                    <button type="submit"
                                        class="btn btn-secondary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                                </form>
                                <h6 class="text-center">Streamlining Real Property Management for Seamless Tax
                                    Solutions.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
