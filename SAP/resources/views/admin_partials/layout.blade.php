<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <script src='https://code.jquery.com/jquery-3.7.0.js'></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>

    <body>
        <div class="container-scroller">
            @include('admin_partials._navbar')
            <div class="container-fluid page-body-wrapper">
                @include('admin_partials._settings-panel')
                @include('admin_partials._sidebar')
                @yield('content')
            </div>
        </div>
        {{-- <script src="{{ asset('admin_assets/assets/vendors/js/vendor.bundle.base.js') }}"></script> --}}
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('admin_assets/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/template.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/settings.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> --}}

        <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
        <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
        <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>

    </body>

</html>
