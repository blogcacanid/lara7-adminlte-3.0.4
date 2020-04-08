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
<body class="hold-transition lockscreen">
    @include('extras.lockscreen_content')
    @include('extras.lockscreen_script')
</body>
</html>
