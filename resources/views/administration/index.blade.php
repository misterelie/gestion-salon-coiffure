<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Tableau de bord | Salon de beauté</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('asset-backend-admin/assets/images/salon-favicon.jpg') }}">

      <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

        <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!--datatable css-->
    <link rel="stylesheet" href="{{asset('asset-backend-admin/cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css')}}"/>
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{asset('asset-backend-admin/cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('asset-backend-admin/cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css')}}">

    <!-- jsvectormap css -->
    <link
        href="{{ asset('asset-backend-admin/assets/libs/jsvectormap/css/jsvectormap.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link
        href="{{ asset('asset-backend-admin/assets/assets/libs/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('asset-backend-admin/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('asset-backend-admin/assets/css/bootstrap.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('asset-backend-admin/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('asset-backend-admin/assets/css/app.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('asset-backend-admin/assets/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="top-tagbar">
           @include('partials-admin.top-tagbar')
        </div>

        <header id="page-topbar">
            @include('partials-admin.page-topbar-header')
        </header>


        <!-- Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            @include('partials-admin.modal')
        </div>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            @include('partials-admin.notification')
           <!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
           @include('partials-admin.navbar-menu')
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay">

        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @include('partials-admin.main-content')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        @include('partials-admin.preloader')
    </div>

    <div class="customizer-setting d-none d-md-block">
        @include('partials-admin.customizer-setting ')
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        @include('partials-admin.themes')
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('asset-backend-admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset-backend-admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('asset-backend-admin/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('asset-backend-admin/assets/js/plugins.js') }}"></script>

    <!-- prismjs plugin -->
    <script src="{{asset('asset-backend-admin/assets/libs/prismjs/prism.js')}}"></script>
     <!-- gridjs js -->
     <script src="{{asset('asset-backend-admin/assets/libs/gridjs/gridjs.umd.js')}}"></script>

     <!-- gridjs init -->
     <script src="{{asset('asset-backend-admin/assets/js/pages/gridjs.init.js')}}"></script>
    <script src="{{asset('asset-backend-admin/assets/libs/list.js/list.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/assets/libs/list.pagination.js/list.pagination.min.js')}}"></script>

    <!-- listjs init -->
    <script src="{{asset('asset-backend-admin/assets/js/pages/listjs.init.js')}}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('asset-backend-admin/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="{{asset('asset-backend-admin/code.jquery.com/jquery-3.6.0.min.js')}}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="{{asset('asset-backend-admin/cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js')}}"></script>
    <script src="{{asset('asset-backend-admin/assets/js/pages/datatables.init.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('asset-backend-admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector map-->
    <script src="{{ asset('asset-backend-admin/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('asset-backend-admin/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <!--Swiper slider js-->
    <script src="{{ asset('asset-backend-admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Dashboard init -->
    <script src="{{ asset('asset-backend-admin/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('asset-backend-admin/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/hybrix/html/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 14:50:49 GMT -->

</html>