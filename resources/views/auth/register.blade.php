<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Register</title>
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
                            <p class=" mb-9">Register to Admin Dashboard</p>

                            <form action="{{route('register')}}" onsubmit="return validateUser()" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputtext" aria-describedby="textHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" id="">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Code</label>
                                    <input type="password" class="form-control" name="" id="code" min="3">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" min="8" id="exampleInputPassword1">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
                                </div>
                                <input type="submit" href="" class="btn btn-primary w-100 py-8 mb-4 rounded-2" value="Sign Up">
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{route('login')}}">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script !src="">
    function validateUser() {
        var code = document.getElementById("code").value;
        if (code != "567") {
            alert("The code you entered is incorrect.");
            return false;
        } else {
            return true;
        }
    }
</script>
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

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 15:54:17 GMT -->
</html>
