@include('_design._head')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('_design.main_header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('_design.main_sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('_design.breadcrumb')

            <!-- Main content -->
            @include('widgets.widgets_content')
            <!-- /.content -->

            <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
        @include('_design.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->
    <!--        @include('_design._link')-->

    @include('widgets.widgets_script')
</body>
</html>
