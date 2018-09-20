<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Transaksi Salon</title>
    <!-- Favicon-->
    <!-- Google Fonts -->
    <link href="{{ url('template/css/font-family.css') }}" rel="stylesheet">
    <link href="{{ url('template/css/material-icon.css') }}" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="{{ url('template/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ url('template/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url('template/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ url('template/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ url('template/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ url('template/css/style.css') }}" rel="stylesheet">

    <!-- Sweet Alert Css -->
    <link href="{{ url('template/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

     <!-- JQuery DataTable Css -->
    <link href="{{ url('template/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ url('template/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('template/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        @include('layouts.loader')
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        @include('layouts.navbar')
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                @include('layouts.user_info')
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                @include('layouts.menu')
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                @include('layouts.footer')
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ url('template/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('template/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url('template/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('template/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ url('template/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <script src="{{ url('template/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('template/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ url('template/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ url('template/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('template/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ url('template/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ url('template/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ url('template/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ url('template/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('template/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('template/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('template/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ url('template/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ url('template/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ url('template/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url('template/js/admin.js') }}"></script> 
    <script src="{{ url('template/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ url('template/js/pages/forms/form-wizard.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ url('template/js/demo.js') }}"></script>
    @yield('script')

</body>

</html>