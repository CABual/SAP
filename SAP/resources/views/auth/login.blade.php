<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin2 </title>
        <!-- plugins:css -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin_assets/assets/vendors/feather/feather.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/assets/vendors/ti-icons/css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/assets/vendors/typicons/typicons.css') }}" />
        <link rel="stylesheet"
            href="{{ asset('admin_assets/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin_assets/assets/vendors/css/vendor.bundle.base.css') }}" />

        <link rel="stylesheet"
            href="{{ asset('admin_assets/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/assets/js/select.dataTables.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/vertical-layout-light/style.css') }}" />
        <link rel="shortcut icon" href="{{ asset('admin_assets/assets/js/select.dataTables.min.css') }}" />

    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="../../assets/images/logo.svg" alt="logo">
                                </div>
                                <h4>Hello! let's get started</h4>
                                <h6 class="fw-light">Sign in to continue.</h6>
                                <form action="/Login/" method="POST" class="pt-3">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg"
                                            id="exampleInputEmail1" placeholder="Username/Email Address" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Password" name="password">
                                    </div>
                                    <div class="mt-3">
                                        <button
                                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                            IN</buttton>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input">
                                                Keep me signed in
                                            </label>
                                        </div>
                                        <a href="#" class="auth-link text-black">Forgot password?</a>
                                    </div>
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                            <i class="ti-facebook me-2"></i>Connect using facebook
                                        </button>
                                    </div>
                                    <div class="text-center mt-4 fw-light">
                                        Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('admin_assets/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/template.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/settings.js') }}"></script>
        <!-- endinject -->
    </body>

</html>
