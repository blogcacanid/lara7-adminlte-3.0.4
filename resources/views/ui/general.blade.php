@include('_design._head')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
    .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: right;
        padding-right: .75rem;
    }

    .color-palette.disabled {
        text-align: center;
        padding-right: 0;
        display: block;
    }

    .color-palette-set {
        margin-bottom: 15px;
    }

    .color-palette span {
        display: none;
        font-size: 12px;
    }

    .color-palette:hover span {
        display: block;
    }

    .color-palette.disabled span {
        display: block;
        text-align: left;
        padding-left: .75rem;
    }

    .color-palette-box h4 {
        position: absolute;
        left: 1.25rem;
        margin-top: .75rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
    }
</style>
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
            @include('ui.general_content')

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('_design.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Add Content Here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('ui.general_script')
</body>
</html>
