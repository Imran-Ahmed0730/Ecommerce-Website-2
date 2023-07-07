
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 15:54:17 GMT -->
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('admin')}}/dist/images/logos/favicon.png" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('admin')}}/dist/css/style.min.css" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('admin')}}/dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('admin')}}/dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
            <div class="row">
                <div class="col-xl-7 col-xxl-8">
                    <a href="index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
                    </a>
                    <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-4">
                    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="col-sm-8 col-md-6 col-xl-9">
                            <h2 class="mb-3 fs-7 fw-bolder">Welcome to Modernize</h2>
                            <p class=" mb-9">Log In to Admin Dashboard</p>

                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Remember this Device
                                        </label>
                                    </div>
                                    <a class="text-primary fw-medium" href="authentication-forgot-password.html">Forgot Password ?</a>
                                </div>
                                <input type="submit" value="Sign In" class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{route('register')}}">Create an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset('admin')}}/dist/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('admin')}}/dist/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{asset('admin')}}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--  core files -->
<script src="{{asset('admin')}}/dist/js/app.min.js"></script>
<script src="{{asset('admin')}}/dist/js/app.init.js"></script>
<script src="{{asset('admin')}}/dist/js/app-style-switcher.js"></script>
<script src="{{asset('admin')}}/dist/js/sidebarmenu.js"></script>

<script src="{{asset('admin')}}/dist/js/custom.js"></script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 15:54:17 GMT -->
</html>
